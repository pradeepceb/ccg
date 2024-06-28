<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\UserController;


/*My controllers start*/
use App\Http\Controllers\BeforeloginController;





/*My controllers end*/

Route::any('/', [HomeController::class, 'index'])->name('welcome');

Route::any('/home', [HomeController::class, 'home'])->name('home');

Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');

Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');

Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

Route::get('login', [AuthController::class, 'index'])->name('login');

Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 

Route::get('register', [AuthController::class, 'registration'])->name('register');

Route::post('post-register', [AuthController::class, 'postRegistration'])->name('register.post'); 

Route::post('verify-register', [AuthController::class, 'verify_register'])->name('register.verify'); 


Route::get('dashboard', [AuthController::class, 'dashboard']); 

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');


Route::get('partner-registration', [UserController::class, 'partnerRegistration'])->name('partner.register');

Route::post('partner-post-registration', [UserController::class, 'partnerPostRegistration'])->name('partner.register.post'); 

Route::get('company-registration', [UserController::class, 'companyRegistration'])->name('company.register');

Route::post('company-post-registration', [UserController::class, 'companyPostRegistration'])->name('company.register.post'); 








/* My required urls */
Route::any('/register-signup', [BeforeloginController::class, 'rgister_signup'])->name('register.signup');
