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

//RETURN STRING
Route::get("Coba", function(){
    return "Ini nyoba doang tp seru juga yak";
});

//ARRAY JSON
Route::get('coba1', function(){
    return['bella', 'nomi'];
});

//JSON OBJECT
Route::get('coba2', function(){
    return [
        'Nama' => 'Isabella Rumbewas',
        'Kelas' => 'XII RPL 4',
        'NIS' => 3103120113
    ];
});

//Objek JSON, ubah status code
Route::get('coba3', function(){
    return response()->json(
        [
            'Nama' => 'Isabella Rumbewas',
            'Kelas' => 'XII RPL 4',
            'NIS' => 3103120113
        ], 201
    );
});