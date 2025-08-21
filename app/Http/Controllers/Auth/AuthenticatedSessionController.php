<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $userId = Auth::id();
        
        // Log the logout attempt
        Log::info('User logout initiated', ['user_id' => $userId]);
        
        try {
            // Logout the user from the web guard
            Auth::guard('web')->logout();
    
            // Invalidate the session
            $request->session()->invalidate();
    
            // Regenerate the CSRF token for security
            $request->session()->regenerateToken();
    
            // Clear any cached data if needed
            $request->session()->flush();
            
            // Log successful logout
            Log::info('User logout completed successfully', ['user_id' => $userId]);
    
            // Redirect to login page with success message
            return redirect()->route('login')
                ->with('status', 'You have been successfully logged out.')
                ->with('logout_success', true);
                
        } catch (\Exception $e) {
            // Log any errors
            Log::error('Logout error occurred', [
                'user_id' => $userId,
                'error' => $e->getMessage()
            ]);
            
            // Still attempt to redirect to login even if there was an error
            return redirect()->route('login')
                ->with('status', 'Logout completed.')
                ->withErrors(['logout' => 'There was an issue during logout, but you have been signed out.']);
        }
    }
}
