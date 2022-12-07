<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PackegeController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TermController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\WelcomeController;
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

Route::resource("/", WelcomeController::class);
Route::resource("about-us", AboutController::class);
Route::resource("blogs", BlogController::class);
Route::resource("contact-us", ContactController::class);
Route::resource("faqs", FaqController::class);
Route::resource("packeges", PackegeController::class);
Route::resource("projects", ProjectController::class);
Route::resource("policies", PolicyController::class);
Route::resource("samples", SampleController::class);
Route::resource("services", ServiceController::class);
Route::resource("teams", TeamController::class);
Route::resource("terms", TermController::class);
Route::resource("testimonials", TestimonialController::class);
Route::post('send-message', [SendMailController::class, 'store'])->name('send-message');
