<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\MerchantsController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// merchant
 Route::resource('merchant','\App\Http\Controllers\MerchantsController');
 Route::get('merchant-search','\App\Http\Controllers\MerchantsController@search');
 Route::get('getproduct','\App\Http\Controllers\MerchantsController@index2');
 Route::get('getproducts','\App\Http\Controllers\MerchantsController@getproducts');
 Route::get('index2','\App\Http\Controllers\MerchantsController@index2');
 Route::get('list','\App\Http\Controllers\MerchantsController@index2');
 Route::get('show-user','\App\Http\Controllers\MerchantsController@show3');
// customer
 Route::resource('customer','\App\Http\Controllers\CustomerController');
 Route::get('customer-search','\App\Http\Controllers\CustomerController@search');
 Route::get('getStoreProd/{id}','\App\Http\Controllers\CustomerController@getProducts');
 Route::get('get-cart/{id}', '\App\Http\Controllers\CustomerController@getCartList');
// driver
 Route::resource('driver','\App\Http\Controllers\DriverController');
 Route::get('driver-search','\App\Http\Controllers\DriverController@search');
 Route::get('get-driver-orders/{id}', '\App\Http\Controllers\DriverController@getDriverOrders');
// store_user
 Route::resource('storeuser','\App\Http\Controllers\StoreUserController');
 Route::get('storeuser-search','\App\Http\Controllers\StoreUserController@search');
 // store
 Route::resource('store','\App\Http\Controllers\StoreController');
 Route::get('store-search','\App\Http\Controllers\StoreController@search');
 Route::get('get-customer-stores/{id}','\App\Http\Controllers\StoreController@getCustomerStores');
 Route::get('get-stores/{id}','\App\Http\Controllers\StoreController@getStores');
 Route::get('get-orders/{id}', '\App\Http\Controllers\StoreController@getOrders');
// category
Route::resource('category','\App\Http\Controllers\CategoryController');
Route::get('category-search','\App\Http\Controllers\CategoryController@search');

// voucher
Route::resource('voucher','\App\Http\Controllers\VoucherController');
Route::get('voucher-search','\App\Http\Controllers\VoucherController@search');

// product
Route::resource('product','\App\Http\Controllers\ProductController');
Route::get('product-search','\App\Http\Controllers\ProductController@search');

// order
Route::resource('order','\App\Http\Controllers\OrderController');
Route::get('order-search','\App\Http\Controllers\OrderController@search');
Route::put('update-order-status/{id}','\App\Http\Controllers\OrderController@updateOrderStatus');

//test
Route::get('students', '\App\Http\Controllers\StudentController@index');
Route::post('students', '\App\Http\Controllers\StudentController@store');
Route::get('fetch-students', '\App\Http\Controllers\StudentController@fetchstudent');
Route::get('edit-student/{id}', '\App\Http\Controllers\StudentController@edit');
Route::put('update-student/{id}', '\App\Http\Controllers\StudentController@update');
Route::delete('delete-student/{id}', '\App\Http\Controllers\StudentController@destroy');

//cart
Route::resource('cart-list','\App\Http\Controllers\CartListController');
Route::delete('delete-list/{id}', '\App\Http\Controllers\CartListController@destroy');

//sms
Route::get('sendsms','\App\Http\Controllers\MerchantsController@sendsms');


// merchant_store_user
Route::resource('merchant-storeuser','\App\Http\Controllers\MerchantStoreUserController');
Route::get('merchant-storeuser-search','\App\Http\Controllers\MerchantStoreUserController@search');



// merchant_category
Route::resource('merchant-category','\App\Http\Controllers\MerchantCategoryController');
Route::get('merchant-category-search','\App\Http\Controllers\MerchantCategoryController@search');

 // merchant_store
 Route::resource('merchant-store','\App\Http\Controllers\MerchantStoreController');
 Route::get('merchant-store-search','\App\Http\Controllers\MerchantStoreController@search');
 Route::get('merchant-get-customer-stores/{id}','\App\Http\Controllers\MerchantStoreController@getCustomerStores');
 Route::get('merchant-get-stores/{id}','\App\Http\Controllers\MerchantStoreController@getStores');
 Route::get('merchant-get-orders/{id}', '\App\Http\Controllers\MerchantStoreController@getOrders');
 Route::get('get-available-withdrawal-orders/{id}', '\App\Http\Controllers\MerchantStoreController@getAvailableWithdrawalOrders');


 // merchant_voucher
Route::resource('merchant-voucher','\App\Http\Controllers\MerchantVoucherController');
Route::get('merchant-voucher-search','\App\Http\Controllers\MerchantVoucherController@search');

// merchant_product
Route::resource('merchant-product','\App\Http\Controllers\MerchantProductController');
Route::get('merchant-product-search','\App\Http\Controllers\MerchantProductController@search');

// merchant_order
Route::resource('merchant-order','\App\Http\Controllers\MerchantOrderController');
Route::get('merchant-order-search','\App\Http\Controllers\MerchantOrderController@search');
Route::put('merchant-update-order-status/{id}','\App\Http\Controllers\MerchantOrderController@updateOrderStatus');

// merchant_withdrawal
Route::resource('merchant-withdrawal','\App\Http\Controllers\MerchantWithdrawalController');
Route::get('merchant-withdrawal-search','\App\Http\Controllers\MerchantWithdrawalController@search');
Route::put('merchant-withdrawal-order-status/{id}','\App\Http\Controllers\MerchantWithdrawalController@updateOrderStatus');

// withdrawal
Route::resource('withdrawal','\App\Http\Controllers\WithdrawalController');
Route::get('withdrawal-search','\App\Http\Controllers\WithdrawalController@search');
Route::put('decline-withdrawal/{id}','\App\Http\Controllers\WithdrawalController@declineWithdrawal');



// announcement
Route::resource('announcement','\App\Http\Controllers\AnnouncementController');
Route::get('announcement-search','\App\Http\Controllers\AnnouncementController@search');

// main page
Route::resource('customer-main','\App\Http\Controllers\CustomerMainController');

// home page
Route::resource('customer-home','\App\Http\Controllers\CustomerHomeController');
