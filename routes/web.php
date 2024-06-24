<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', fn() => redirect()->route('dashboard'));

/**
 * Redirects the user to their dashboard
 */
Route::get('/dashboard', function () {

    return redirect()->route('organization.dashboard');

})->middleware(['auth'])->name('dashboard');


/**
 * Org routes
 */
require __DIR__ . '/org.php';

/**
 * Auth routes
 */
require __DIR__ . '/auth.php';
