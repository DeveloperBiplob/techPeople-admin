<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogDetailsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('service', [ServiceController::class, 'index'])->name('service');
Route::get('portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('details', [BlogDetailsController::class, 'index'])->name('blogdetails');
Route::get('contact', [ContactController::class, 'index'])->name('contact');

Route::get('/dashboard', function () {
    return view('Backend.Layouts.master');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
