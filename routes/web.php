<?php

use App\Models\listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ejraController;
use App\Http\Controllers\clientController;

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

Route::get('/', [ejraController::class ,'index'] );

Route::get('/ejras/create', [ejraController::class ,'create'] );

Route::post('/ejras' , [ejraController::class , 'store'] );

Route::get('/ejras/{ejra}/edit' , [ejraController::class ,'edit'] );

Route::put('/ejras/{ejra}' , [ejraController::class, 'update'] );

Route::delete('/ejras/{ejra}' , [ejraController::class, 'destroy'] );

Route::get('/ejras/{ejra}' , [ejraController::class, 'show'] );

Route::get('/clients/create' , [clientController::class, 'create'] );

Route::post('/clients' , [clientController::class, 'store'] );

Route::get('/logout' , [clientController::class, 'logout'] );

Route::get('/login' , [clientController::class, 'login'] )->name('login');

Route::post('/clients/authenticate' , [clientController::class, 'authenticate'] );





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
