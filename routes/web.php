<?php

use Illuminate\Support\Facades\Route;

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

Route::prefix('clients')->group(function () { // mes sukursime grupe keliu, kurie susije su autoriais

    Route::get('','ClientController@index')->name('client.index');
    Route::get('create','ClientController@create')->name('client.create');
    Route::post('store','ClientController@store')->name('client.store');

    //EDIT / UPDATE
    Route::get('edit/{client}','ClientController@edit')->name('client.edit');
    Route::post('update/{client}','ClientController@update')->name('client.update');

    // DELETE
    Route::post('delete/{client}','ClientController@destroy')->name('client.destroy');

    //SHOW
    Route::get('show/{client}','ClientController@show')->name('client.show');

});

Route::prefix('companies')->group(function () { // mes sukursime grupe keliu, kurie susije su autoriais

    Route::get('','CompanyController@index')->name('company.index');
    Route::get('create','CompanyController@create')->name('company.create');
    Route::post('store','CompanyController@store')->name('company.store');

    //EDIT / UPDATE
    Route::get('edit/{company}','CompanyController@edit')->name('company.edit');
    Route::post('update/{company}','CompanyController@update')->name('company.update');

    // DELETE
    Route::post('delete/{company}','CompanyController@destroy')->name('company.destroy');

    //SHOW
    Route::get('show/{company}','CompanyController@show')->name('company.show');

});

