<?php

use App\Models\listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\listingController;

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

// index - show all listings
// show - show single listing
// create - show form to create new listing
// store - store new listing
// edit - show form to edit
// update - update listing
// destroy - delete listing

Route::get('/', [listingController::class ,'index'] );

Route::get('/listings/create', [listingController::class ,'create'] )->middleware('auth') ;

Route::post('/listings' , [listingController::class , 'store'] );

Route::get('/listings/{listing}/edit', [listingController::class ,'edit'] )->middleware('auth') ;

Route::put('/listings/{listing}' , [listingController::class, 'update'] )->middleware('auth') ;

Route::delete('/listings/{listing}' , [listingController::class, 'destroy'] )->middleware('auth') ;

Route::get('/listings/{listing}' , [listingController::class, 'show'] );

Route::get('/users/create' , [userController::class, 'create'] )->middleware('guest') ;

Route::post('/users' , [userController::class, 'store'] )->middleware('guest') ;

Route::get('/logout' , [userController::class, 'logout'] )->middleware('auth') ;

Route::get('/login' , [userController::class, 'login'] )->name('login')->middleware('guest') ;

Route::post('/users/authenticate' , [userController::class, 'authenticate'] );





//reference area
Route::get('/hello', function() {
    return response('<h1>hellow world</h1>' , 200)
        ->header('Content-Type' , 'text/plain');
});

Route::get('/posts/{id}' , function($id){
    return response('post' . $id);
})->where('id', '(0-9)+');

route::get('/search', function(Request $request){
    dd($request);
});
//till here!
