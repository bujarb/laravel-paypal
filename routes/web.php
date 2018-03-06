<?php

Route::get('/', function () {
    return view('pay');
});

Route::post('paypal','PaymentController@payWithpaypal');
Route::get('status','PaymentController@getPaymentStatus');
