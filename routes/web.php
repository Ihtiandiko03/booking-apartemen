<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdvertisementController;

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
Route::get('/detailunit/{id}', [HomeController::class, 'detailunit']);



Route::get('/index-1', [HomeController::class, 'index1']);
Route::get('/index-2', [HomeController::class, 'index2']);
Route::get('/all-rooms', [HomeController::class, 'allrooms']);
Route::get('/room-details', [HomeController::class, 'roomdetails']);
Route::get('/room-details-block', [HomeController::class, 'roomdetailsblock']);
Route::get('/room-details-1', [HomeController::class, 'roomdetails1']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/menu', [HomeController::class, 'menu']);
Route::get('/events', [HomeController::class, 'events']);
Route::get('/aminities1', [HomeController::class, 'aminities1']);
Route::get('/all-rooms1', [HomeController::class, 'allrooms1']);
Route::get('/aminities', [HomeController::class, 'aminities']);
// Route::get('/dashboard', [HomeController::class, 'dashboard']);
Route::get('/db-activity', [HomeController::class, 'dbactivity']);
Route::get('/db-booking', [HomeController::class, 'dbbooking']);
Route::get('/db-event', [HomeController::class, 'dbevent']);
Route::get('/db-new-booking', [HomeController::class, 'dbnewbooking']);
Route::get('/booking', [HomeController::class, 'booking']);
Route::get('/contact-us', [HomeController::class, 'contactus']);
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/blog-inner', [HomeController::class, 'bloginner']);
Route::get('/gallery', [HomeController::class, 'gallery']);
Route::get('/gallery1', [HomeController::class, 'gallery1']);
Route::get('/gallery2', [HomeController::class, 'gallery2']);
Route::get('/collapsible', [HomeController::class, 'collapsible']);
Route::get('/about-us', [HomeController::class, 'aboutus']);
Route::get('/services1', [HomeController::class, 'services1']);
Route::get('/typho-grid', [HomeController::class, 'typhogrid']);
Route::get('/typo-alert', [HomeController::class, 'typoalert']);
Route::get('/form-fields', [HomeController::class, 'formfields']);
Route::get('/typo-all-head', [HomeController::class, 'typoallhead']);
Route::get('/typo-badges-labels', [HomeController::class, 'typobadgeslabels']);
Route::get('/typo-buttons', [HomeController::class, 'typobuttons']);
Route::get('/typo-pagination', [HomeController::class, 'typopagination']);
Route::get('/typo-progressbar', [HomeController::class, 'typoprogressbar']);
Route::get('/preloading', [HomeController::class, 'preloading']);
Route::get('/menu1', [HomeController::class, 'menu1']);
Route::get('/typo-slider', [HomeController::class, 'typoslider']);
Route::get('/typo-table', [HomeController::class, 'typotable']);
Route::get('/sitemap', [HomeController::class, 'sitemap']);
Route::get('/hotel-details', [HomeController::class, 'hoteldetails']);
Route::get('/hotel-detail', [HomeController::class, 'hoteldetail']);
Route::get('/db-profile', [HomeController::class, 'dbprofile']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/tables', [DashboardController::class, 'tables'])->middleware(['auth', 'verified']);
Route::get('/dashboard/billing', [DashboardController::class, 'billing'])->middleware(['auth', 'verified']);
Route::get('/dashboard/vr', [DashboardController::class, 'vr'])->middleware(['auth', 'verified']);
Route::get('/dashboard/profile', [DashboardController::class, 'profile'])->middleware(['auth', 'verified']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/unit', UnitController::class)->middleware(['auth', 'verified']);
Route::resource('/advertisement', AdvertisementController::class)->middleware(['auth', 'verified']);
Route::resource('/faq', FaqController::class)->middleware(['auth', 'verified']);
Route::resource('/user', UserController::class);

Route::post('/price', [PriceController::class, 'store'])->name('price.store');
Route::delete('/price/{unitId}/{type}', [PriceController::class, 'destroy'])->name('price.destroy');

Route::post('/facility', [FacilityController::class, 'store'])->name('facility.store');
Route::put('/facility/{id}', [FacilityController::class, 'update'])->name('facility.update');
Route::delete('/facility/{id}', [FacilityController::class, 'destroy'])->name('facility.destroy');

Route::post('/gallery', [GalleryController::class, 'store'])->name('gallery.store');
Route::delete('/gallery/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
Route::post('/gallery/thumbnail/{id}', [GalleryController::class, 'changeThumbnail'])->name('gallery.thumbnail');


require __DIR__.'/auth.php';
