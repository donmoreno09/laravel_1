<?php

use Illuminate\Support\Facades\DB;
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

    $tasks = [
        'Go to the store',
        'Clean the house',
        'Finish the screencast'
    ];


    return view('welcome', compact('tasks'));
});

Route::get('datiDaDB', function () {

    $tasks = DB::table('tasks')->get();

    return $tasks;

    //return view('datiDaDB', compact('tasks'));
});

Route::get('about', function(){
    return  view('about');
});
