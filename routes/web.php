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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/test', function () {
//    //$data=config("store");
//    $data=[
//        'nome'=>'khalil',
//        'cognome'=>'sidane',
//        'email'=>'khalil@gmail.com'
//   ];
//    return view('test',$data);
//});

Route::get('/test', function () {

    $data = [
        "fumetti"=> Config("store")
    ];
    return view('test', $data );
});


