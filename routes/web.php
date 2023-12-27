<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\RefundController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\riwayatuserController;
use App\Http\Controllers\riwayatadminController;
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

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/detailunit/{slug}', [HomeController::class, 'detailunit']);
Route::get('/detailbooking/{slug}', [HomeController::class, 'detailbooking']);



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


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('/unit', UnitController::class);
    Route::put('/unit/nonaktif/{id}', [UnitController::class, 'nonaktif'])->name('unit.nonaktif');

    Route::resource('/faq', FaqController::class);
    Route::resource('/user', UserController::class);
    
    Route::post('/price', [PriceController::class, 'store'])->name('price.store');
    Route::delete('/price/{unitId}/{type}', [PriceController::class, 'destroy'])->name('price.destroy');
    
    Route::post('/facility', [FacilityController::class, 'store'])->name('facility.store');
    Route::put('/facility/{id}', [FacilityController::class, 'update'])->name('facility.update');
    Route::delete('/facility/{id}', [FacilityController::class, 'destroy'])->name('facility.destroy');
    
    Route::post('/gallery', [GalleryController::class, 'store'])->name('gallery.store');
    Route::delete('/gallery/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
    Route::post('/gallery/thumbnail/{id}', [GalleryController::class, 'changeThumbnail'])->name('gallery.thumbnail');

    Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
    Route::post('/setting/update', [SettingController::class, 'updateOrCreate'])->name('setting.post');

    Route::get('/refund/list', [RefundController::class, 'historyRefund'])->name('refund.history');
    Route::get('/refund/show/{id}', [RefundController::class, 'historyDetailRefund'])->name('refund.detailhistory');
    Route::post('/refund/agreement/{refundId}', [RefundController::class, 'refundAgreement'])->name('refund.agreement');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::resource('/riwayatuser', riwayatuserController::class);
    Route::get('/lihatriwayat', [riwayatuserController::class, 'lihatriwayat']);

    Route::get('/order/history/{invoice_code}', [OrderController::class, 'historyOrderUserDetail'])->name('order.detail');
    Route::get('/order/history', [OrderController::class, 'historyOrderUser'])->name('order.history');
    
    Route::get('/refund/history', [RefundController::class, 'historyRefundUser'])->name('refund.historyuser');
    Route::get('/refund/detail/{id}', [RefundController::class, 'historyDetailRefundUser'])->name('refund.detailhistoryuser');
    Route::post('/refund/add/{orderId}', [RefundController::class, 'addRefund'])->name('refund.add');
    
});

Route::middleware(['auth', 'role:admin,marketing'])->group(function () {
    Route::resource('/advertisement', AdvertisementController::class);
});

Route::middleware(['auth', 'role:admin,user,penjaga'])->group(function () {
    Route::get('/invoice/{invoice_code}', [OrderController::class, 'invoice'])->name('order.invoice');
});

Route::middleware(['auth', 'role:admin,penjaga'])->group(function () {
    Route::get('/order/list', [OrderController::class, 'historyOrder'])->name('order.list');
    Route::get('/order/detail/{invoice_code}', [OrderController::class, 'historyOrderDetail'])->name('order.detailadmin');
});

Route::post('/order/pay', [OrderController::class, 'pay'])->name('order.pay');
Route::post('/midtrans-callback', [OrderController::class, 'callback'])->name('order.callback');
Route::get('/home/faq', [HomeController::class, 'faq'])->name('home.faq');


require __DIR__.'/auth.php';