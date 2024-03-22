<?php

use Illuminate\Support\Facades\Route;

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
    Route::namespace('App\Http\Controllers')->group(function(){
        Route::get('/', 'Home@index');
        Route::get('/danh-muc', 'Category@index');
        Route::get('/san-pham', 'Product@defaults');
        Route::get('/thanh-toan', 'Payment@index');
        Route::get('/san-pham-chi-tiet', 'Detail@index');


        
        Route::namespace('Admin')->group(function(){


            Route::prefix('api')->group(function(){


                Route::prefix('category')->group(function(){
                    Route::get('/getall', 'Category@getAll');
                    Route::get('/changestatus', 'Category@changeStatus');
                    Route::post('/update', 'Category@update');
                    Route::post('/create', 'Category@create');
                    Route::post('/delete', 'Category@delete');
                });

                Route::prefix('product')->group(function(){
                    Route::get('/getall', 'Product@getAll');
                    Route::get('/get', 'Product@get');
                    Route::post('/update', 'Product@update');
                    Route::post('/delete', 'Product@delete');
                    Route::post('/create', 'Product@create');
                    Route::get('/changestatus', 'Product@changeStatus');
                });
                Route::prefix('trademark')->group(function(){
                    Route::get('/getall', 'TradeMark@getAll');
                    Route::get('/get', 'TradeMark@get');
                    Route::post('/update', 'Trademark@update');
                    Route::post('/delete', 'Trademark@delete');
                    Route::post('/create', 'Trademark@create');
                    Route::get('/changestatus', 'Trademark@changeStatus');
                });
                Route::prefix('slide')->group(function(){
                    Route::get('/getall', 'slide@getAll');
                    Route::get('/changestatus', 'slide@changeStatus');
                    Route::post('/update', 'slide@update');
                    Route::post('/delete', 'slide@delete');
                    Route::post('/create', 'slide@create');
                });
                Route::prefix('user')->group(function(){
                    Route::get('/getall', 'User@getAll');
                    Route::get('/get', 'User@get');
                    Route::post('/update', 'User@update');
                    Route::post('/delete', 'User@delete');
                    Route::post('/create', 'User@create');
                });
                Route::prefix('module')->group(function(){
                    Route::get('/getall', 'module@getAll');
                    Route::get('/get', 'module@get');
                    Route::post('/update', 'module@update');
                    Route::post('/delete', 'module@delete');
                    Route::post('/create', 'module@create');
                    Route::get('/changestatus', 'module@changeStatus');
                });

            });
            
            
        });
        Route::get('{any}', 'Route@index')->where('any', '.*');
    });
