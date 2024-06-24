<?php

use App\Http\Controllers\Organization\DashboardController;
use App\Http\Controllers\Organization\RoleController;
use App\Http\Controllers\Organization\UserController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

Route::prefix('dashboard/o/')
    ->name('organization.')
    ->middleware(['auth'])
    ->group(function () {

        # Dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        # Role
        Route::prefix('role')
            ->name('role.')
            ->group(function () {
                Route::get('/', [RoleController::class, 'index'])->middleware(['permission:role:index'])->name('index');
                Route::get('create', [RoleController::class, 'create'])->middleware(['permission:role:create'])->name('create');
                Route::get('{role:id}/edit', [RoleController::class, 'edit'])->middleware(['permission:role:edit'])->name('edit');
            });

        # User
        Route::prefix('users')
            ->name('user.')
            ->group(function () {

                Route::get('/', [UserController::class, 'index'])->middleware(['permission:user:index'])->name('index');
                Route::get('create', [UserController::class, 'create'])->middleware(['permission:user:create'])->name('create');
                Route::get('edit/{user}', [UserController::class, 'edit'])->middleware(['permission:user:edit'])->name('edit');
            });

        # User
        Route::prefix('settings')
            ->name('settings.')
            ->group(function () {

                Route::get('/', [SettingController::class, 'index'])->middleware(['permission:user:index'])->name('index');
                // Route::get('create', [SettingController::class, 'create'])->middleware(['permission:user:create'])->name('create');
                // Route::get('edit/{user}', [SettingController::class, 'edit'])->middleware(['permission:user:edit'])->name('edit');
            });

        # Profile
        Route::view('profile', 'users.organization.profile')->name('profile');
    });
