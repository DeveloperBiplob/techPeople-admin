<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\BlogPageController;
use App\Http\Controllers\BlogDetailsPageController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PortfolioPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicePageController;
use App\Http\Controllers\SliderController;
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

Route::get('/', [HomePageController::class, 'index'])->name('home');
Route::get('about', [AboutPageController::class, 'index'])->name('about');
Route::get('service', [ServicePageController::class, 'index'])->name('service');
Route::get('portfolio', [PortfolioPageController::class, 'index'])->name('portfolio');
Route::get('blog', [BlogPageController::class, 'index'])->name('blog');
Route::get('details', [BlogDetailsPageController::class, 'index'])->name('blogdetails');
Route::get('contact', [ContactPageController::class, 'index'])->name('contact');

Route::get('/dashboard', function () {
    return view('Backend.Pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('slider', SliderController::class);
});

require __DIR__.'/auth.php';
