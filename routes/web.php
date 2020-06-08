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
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/trade-with-us', 'TradeWithUsController@index')->name('trade-with-us');

    Route::post('/newsletter', [
        'as' => 'newsletter-subscription',
        'uses' => 'Newsletter\NewsletterController@newsletterSubscription'
    ]);
