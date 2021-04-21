<?php

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

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'barang'], function(){
    Route::get('index', 'BarangController@index')->name('barang.index');
    Route::get('create/{barang}', 'BarangController@create')->name('barang.create');
    Route::post('save.request/{barang}', 'BarangController@store')->name('barang.save.request');
});

Route::group(['prefix' => 'dashboard'], function(){
    Route::get('index', 'DashboardController@index')->name('dashboard.index');
});

Route::group(['prefix' => 'stock'], function(){
    Route::get('index', 'StockController@index')->name('stock.index');
    Route::get('create', 'StockController@create')->name('stock.create');
    Route::post('save', 'StockController@store')->name('stock.save');
    Route::get('formEdit/{stock}', 'StockController@edit')->name('stock.formEdit');
    Route::patch('update/{stock}', 'StockController@update')->name('stock.update');
    Route::get('QuantityUp/{stock}', 'StockController@quantity')->name('stock.QuantityUp');
    Route::patch('update.quantity/{stock}', 'StockController@updateQuantity')->name('stock.update.quantity');
    Route::delete('delete/{stock}', 'StockController@destroy')->name('stock.delete');
});

Route::group(['prefix' => 'suplier'], function(){
    Route::get('index', 'SuplierController@index')->name('suplier.index');
    Route::get('create', 'SuplierController@create')->name('suplier.create');
    Route::post('save', 'SuplierController@store')->name('suplier.save');
});

Route::group(['prefix' => 'request'], function(){
    Route::get('index', 'RequestController@index')->name('request.index');
    Route::get('accept', 'RequestController@accept')->name('request.accept');
    Route::get('reject', 'RequestController@reject')->name('request.reject');
});

Route::group(['prefix' => 'member'], function(){
    Route::get('index', 'MemberController@index')->name('member.index');
    Route::get('create', 'MemberController@create')->name('member.create');
    Route::get('edit', 'MemberController@edit')->name('member.edit');
});
