<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AgentController;

require __DIR__ . '/auth.php';

// 🚪 Public Routes
Route::get('/', function () {
    return redirect()->route('properties.homepage');
});
Route::get('/', [PropertyController::class, 'showHomePage'])->name('properties.homepage');
Route::get('/listing_page', [PropertyController::class, 'show_listing_page_client'])->name('properties.show_listing_page_client');
Route::get('/listing_page/home_details/{id}', [PropertyController::class, 'show_details_home'])->name('properties.show_details_home');
Route::get('/properties/search', [PropertyController::class, 'search'])->name('properties.search');

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
Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
Route::get('{any}', [RoutingController::class, 'root'])
    ->where('any', '^(?!$).*') // exclude '/'
    ->name('any');
