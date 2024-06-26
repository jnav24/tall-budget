<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Passwords\Confirm;
use App\Livewire\Auth\Passwords\Email;
use App\Livewire\Auth\Passwords\Reset;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Verify;
use App\Livewire\Dashboard\BudgetComponent;
use App\Livewire\Dashboard\BudgetTemplateComponent;
use App\Livewire\Dashboard\HomeComponent;
use App\Livewire\Dashboard\SettingsComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'welcome')->name('home');

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');

    Route::group(['prefix' => 'password/reset'], function () {
        Route::get('/', Email::class)
            ->name('password.request');

        Route::get('{token}', Reset::class)
            ->name('password.reset');
    });
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/', HomeComponent::class)
            ->name('dashboard.home');

        Route::get('/budgets', BudgetComponent::class)
            ->name('dashboard.budgets');

        Route::get('/budgets/{budget}', HomeComponent::class)
            ->name('dashboard.budget.edit');

        Route::get('/budget-template', BudgetTemplateComponent::class)
            ->name('dashboard.budget.template');

        Route::get('/reports', HomeComponent::class)
            ->name('dashboard.reports');

        Route::get('/settings', SettingsComponent::class)
            ->name('dashboard.settings');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::group(['prefix' => 'email/verify'], function () {
        Route::get('/', Verify::class)
            ->middleware('throttle:6,1')
            ->name('verification.notice');

        Route::get('{id}/{hash}', EmailVerificationController::class)
            ->middleware('signed')
            ->name('verification.verify');
    });

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');

    Route::post('logout', LogoutController::class)
        ->name('logout');
});
