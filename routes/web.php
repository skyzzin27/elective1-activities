<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

// ✅ DEFAULT HOME ROUTE
Route::get('/', function () {
    return view('welcome');
});




Route::view('/item', 'activity1.item')->name('item');
Route::view('/customer', 'activity1.customer')->name('customer');
Route::view('/order', 'activity1.order')->name('order');
Route::view('/orderDetails', 'activity1.orderDetails')->name('orderDetails');




Route::get('/activity2/customer/{id}/{name}/{address}', function ($id, $name, $address) {
    return view('activity2.customer', compact('id', 'name', 'address'));
});

Route::get('/activity2/item/{no}/{name}/{price}', function ($no, $name, $price) {
    return view('activity2.item', compact('no', 'name', 'price'));
});

Route::get('/activity2/order/{custId}/{custName}/{orderNo}/{date}', function ($custId, $custName, $orderNo, $date) {
    return view('activity2.order', compact('custId', 'custName', 'orderNo', 'date'));
});

Route::get('/activity2/orderDetails/{transNo}/{orderNo}/{itemId}/{name}/{price}/{qty}', function ($transNo, $orderNo, $itemId, $name, $price, $qty) {
    return view('activity2.orderDetails', compact('transNo', 'orderNo', 'itemId', 'name', 'price', 'qty'));
});






Route::get('/controller/customer/{id}/{name}/{address}', [OrderController::class, 'customer']);
Route::get('/controller/item/{no}/{name}/{price}', [OrderController::class, 'item']);
Route::get('/controller/order/{custId}/{custName}/{orderNo}/{date}', [OrderController::class, 'order']);
Route::get('/controller/orderDetails/{transNo}/{orderNo}/{itemId}/{name}/{price}/{qty}', [OrderController::class, 'orderDetails']);
