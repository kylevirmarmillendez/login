<?php

use Illuminate\Support\Facades\Route;
use illuminate\Support\Facades\Auth;

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
  
    if(!Auth::check()){
        return redirect('/login');
    }
    return redirect()->intended();
    

    // $username = "adadadas";
    // $password = "asdadasd";

    // if(Auth::attempt(['username'=>$username, 'password'=>$password])){
    //     return redirect()->intended();
    // }

    // Auth::logout();

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
