<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\Rentee\RenteeDashboardController;
use App\Http\Controllers\Frontend\Rentee\RenteeProfileController;
use App\Http\Controllers\Frontend\Renter\RenterDashboardController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


/**
 * Renter Frontend Pages
 */


/***  Rentee Dashboard Routes */
Route::group(
    [
        'middleware' =>
        [
            'auth',
            'verified',
            'user.role:rentee',
        ],
        'prefix' => 'rentee',
        'as' => 'rentee.',
    ],
    function () {
        Route::get('/dashboard', [RenteeDashboardController::class, 'index'])->name('dashboard');
        Route::get('/profile', [RenteeProfileController::class,'index'])->name('profile.index');
        Route::post('/profile/basic-info-update',  [RenteeProfileController::class, 'basicInfoUpdate'])->name('profile.basic-info-update');
        // Route::get('/profile', [CandidateProfileController::class, 'index'])->name('profile.index');
        // Route::post('/profile/basic-info-update', [CandidateProfileController::class, 'basicInfoUpdate'])->name('profile.basic-info.update');
        // Route::post('/profile/profile-info-update', [CandidateProfileController::class, 'profileInfoUpdate'])->name('profile.profile-info.update');
        // Route::post('/profile/account-info-update', [CandidateProfileController::class, 'accountInfoUpdate'])->name('profile.account-info.update');
        // Route::post('/profile/account-email-update', [CandidateProfileController::class, 'accountEmailUpdate'])->name('profile.account-email.update');
        // Route::post('/profile/account-password-update', [CandidateProfileController::class, 'accountPasswordUpdate'])->name('profile.account-password.update');


    }
);


/***  Renter Dashboard Routes */
Route::group(
    [
        'middleware' =>
        [
            'auth',
            'verified',
            'user.role:renter',
        ],
        'prefix' => 'renter',
        'as' => 'renter.',
    ],
    function () {
        // Dashboard
        Route::get('/dashboard', [RenterDashboardController::class, 'index'])->name('dashboard');
        //  Company Profile Routes
        // Route::get('/profile', [CompanyProfileController::class, 'index'])->name('profile');
        // Route::post('/profile/company-info', [CompanyProfileController::class, 'updateCompanyInfo'])->name('profile.company-info');
        // Route::post('/profile/founding-info', [CompanyProfileController::class, 'updateFoundingInfo'])->name('profile.founding-info');
        // Route::post('/profile/account-info', [CompanyProfileController::class, 'updateAccountInfo'])->name('profile.account-info');
        // Route::post('/profile/password-update', [CompanyProfileController::class, 'updatePassword'])->name('profile.password-update');


    }
);
