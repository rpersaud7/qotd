<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/quotes',[
    'uses'       =>      'QuoteController@getQuotes',
    'as'         =>      'get-quotes'
]);

Route::get('/quotes/quotd',[
    'uses'      =>       'QuoteController@getQuotd',
    'as'        =>       'get-quotd'
]);

Route::get('/quotes/random', [
    'uses'      =>       'QuoteController@getRandom',
    'as'        =>       'get-random'
]);

Route::put('/quotes/setQuotes/{quotes}', [
    'uses'      =>      'QuoteController@setQuotes',
    'as'        =>      'set-quotes'
]);

Route::get('/quotes/searchQuotes/{word}', [
    'uses'      =>      'QuoteController@searchQuotes',
    'as'        =>      'search-quotes'
]);