<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Fontend\PageController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\BookingHouseController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\HouseOwner\HouseController;
use App\Http\Controllers\Fontend\HousController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\StripeController;

Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/About', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact-submit', [ContactController::class, 'store'])->name('contact.store');
Route::get('/single-house/{id}', [HousController::class, 'singleHouse'])->name('house.single');
Route::get('/all-house', [HousController::class, 'allHouse'])->name('house.all');
Route::get('/all-house-category/{id}', [HousController::class, 'categoryHouse'])->name('house.category');
Route::get('/all-house-newest-to-oldest-date', [HousController::class, 'newToOldHouse'])->name('house.new.to.old');
Route::get('/all-house-oldest-to-newest-date', [HousController::class, 'oldToNewHouse'])->name('house.old.to.new');
Route::get('/all-house-newest-to-oldest-price', [HousController::class, 'newToOldHousePrice'])->name('house.new.to.old.price');
Route::get('/all-house-oldest-to-newest-price', [HousController::class, 'oldToNewHousePrice'])->name('house.old.to.new.price');
Route::post('/avail-able_house', [HousController::class, 'availAbleHouse'])->name('avail.able.house');


//booking House
//stripe payment
Route::post('stripe/order-complete', [StripeController::class, 'store'])->name('stripe.order');
// ====================================== Admin Routes =====================================
Route::group(['middleware' => ['admin', 'auth']], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('edit-profile', [AdminController::class, 'edit'])->name('edit.profile');
    Route::post('update-profile', [AdminController::class, 'update'])->name('update.profile');
    Route::get('/password-change', [AdminController::class, 'changePassword'])->name('password');
    Route::post('update-password', [AdminController::class, 'storePassword'])->name('update.password');

    Route::group(['prefix' => 'Admin'], function () {

        Route::get('create-category', [CategoryController::class, 'create'])->name('category.create');
        Route::post('store-category', [CategoryController::class, 'store'])->name('category.store');
        Route::post('delete-category', [CategoryController::class, 'distroy'])->name('category.distroy');
        Route::get('manage-category', [CategoryController::class, 'index'])->name('category.manage');
        Route::get('edit-category/{id}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::post('update-category/{id}', [CategoryController::class, 'update'])->name('category.update');

        Route::get('all-contact', [ContactController::class, 'all'])->name('contact.all');

        //all house 
        Route::get('all-house', [HouseController::class, 'allHosue'])->name('admin.house.all');
        Route::get('all-house-owner', [AdminController::class, 'allHosueOwner'])->name('house.owner.all');
        Route::get('all-varati', [AdminController::class, 'allVarati'])->name('varati.all');
        Route::get('all-booking-house', [AdminController::class, 'allBookingHouse'])->name('booking.house.all');

        //download national id card
        Route::get('download-national-id/{id}', [AdminController::class, 'downloadNationalId'])->name('download.nation.id');
    });

    Route::group(['prefix' => 'House-owner'], function () {
        Route::get('add-house', [HouseController::class, 'create'])->name('house.create');
        Route::post('store-house', [HouseController::class, 'store'])->name('house.store');
        Route::get('edit-house/{id}', [HouseController::class, 'edit'])->name('house.edit');
        Route::post('update-house/{id}', [HouseController::class, 'update'])->name('house.update');
        Route::get('manage-house', [HouseController::class, 'index'])->name('house.manage');
        Route::post('delete-house', [HouseController::class, 'distroy'])->name('house.distroy');

        //booking house
        Route::get('booking-request-house/{id}', [BookingHouseController::class, 'index'])->name('bookig.request.house');
        Route::post('booking-request-approve', [BookingHouseController::class, 'approve'])->name('bookig.request.house.approve');

        //all booking house
        Route::get('all-booking-house', [HouseController::class, 'all'])->name('bookig.house.all.house.owner');
    });
});

// ====================================== User Routes =====================================
Route::group(['prefix' => 'user', 'middleware' => ['user', 'auth']], function () {
    Route::get('/my-account', [UserController::class, 'myAccount'])->name('user.dashboard');
    Route::get('/my-account-details', [UserController::class, 'myAccountDetail'])->name('user.detail');
    Route::get('/my-password-change', [UserController::class, 'changePassword'])->name('user.password');
    Route::post('update-user-profile', [UserController::class, 'update'])->name('update.user.profile');
    Route::post('update-user-password', [UserController::class, 'storePassword'])->name('update.user.password');

    //booking House
    Route::post('/booking-house', [BookingHouseController::class, 'booking'])->name('booking.house');
    Route::post('give-review', [BookingHouseController::class, 'reviewStore'])->name('review.store');
});
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
