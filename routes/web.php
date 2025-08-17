<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

// Page À propos
Route::get('/about', [AboutController::class, 'show'])->name('about');
// Page de contact
Route::get('/contact', [ContactController::class, 'show'])->name('contact');

require __DIR__ . '/auth.php';

// 🚪 Public Routes
Route::get('/', function () {
    return redirect()->route('properties.homepage');
});
    Route::view('/faq', 'pages.faq')->name('faq');
    Route::view('/register', 'pages.register')->name('register');
Route::get('/', [PropertyController::class, 'showHomePage'])->name('properties.homepage');
    Route::view('/terms', 'pages.terms')->name('terms');
Route::get('/listing_page', [PropertyController::class, 'show_listing_page_client'])->name('properties.show_listing_page_client');
Route::get('/listing_page/home_details/{id}', [PropertyController::class, 'show_details_home'])->name('properties.show_details_home');
Route::get('/properties/search', [PropertyController::class, 'search'])->name('properties.search');
Route::post('/properties/search', [PropertyController::class, 'search'])->name('properties.search.post');

// 🔒 Authenticated Routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboards/analytics', [RoutingController::class, 'index'])->name('dashboard.analytics');

    Route::get('/property/grid', [PropertyController::class, 'grid'])->name('properties.grid');
    Route::get('/property/list', [PropertyController::class, 'list'])->name('properties.list');

    Route::get('/properties/{id}', [PropertyController::class, 'show'])->name('properties.show');
    Route::resource('properties', PropertyController::class);

    Route::resource('agents', AgentController::class);

    Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
    Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
});

// 🧠 Wildcard Route Handlers (for dynamic pages)
// Page de contact (doit être avant les routes catch-all)
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
// ...existing code...
// Les routes catch-all doivent être placées à la fin pour ne pas interférer avec /about et /contact
Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
Route::get('{any}', [RoutingController::class, 'root'])
    ->where('any', '^(?!$).*') // exclude '/'
    ->name('any');
