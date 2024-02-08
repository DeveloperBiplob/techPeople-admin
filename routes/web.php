<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogPageController;
use App\Http\Controllers\BlogDetailsPageController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ConfigerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\OverviewController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PortfolioPageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServicePageController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TestimonialController;
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
Route::post('/contact-us', [ContactController::class, 'store'])->name('contactUs');

Route::get('/dashboard', function () {
    return view('Backend.Pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('slider', SliderController::class);
    Route::resource('about', AboutController::class);
    
    Route::get('/company-view/{companyDetail}', [AboutController::class, 'companyView'])->name('companyView');
    Route::get('/company-edit/{companyDetail}', [AboutController::class, 'companyEdit'])->name('companyEdit');
    Route::put('/company-update/{companyDetail}', [AboutController::class, 'companyUpdate'])->name('companyUpdate');

    Route::resource('service', ServiceController::class);
    Route::resource('process', ProcessController::class);

    Route::resource('overview', OverviewController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('portfolio', PortfolioController::class);
    Route::resource('testimonial', TestimonialController::class);
    Route::resource('brand', BrandController::class);

    Route::get('/contact', [ContactController::class, 'index'])->name('contactContent');
    Route::get('/contact/show/{id}', [ContactController::class, 'show'])->name('contactShow');
    Route::delete('/contact/delete/{id}', [ContactController::class, 'destroy'])->name('contactDelete');

    Route::resource('configer', ConfigerController::class);
    Route::resource('gallery', GalleryController::class);

    Route::resource('blogcategory', BlogCategoryController::class);
    Route::resource('tag', TagController::class);
    Route::resource('post', PostController::class);
    Route::get('/post-status/{slug}', [PostController::class, 'postStatus'])->name('post-status');
});

require __DIR__.'/auth.php';
