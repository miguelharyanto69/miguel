<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthenticationController;


Route::group(['prefix'=>'/auth'] , function($router) {
      Route::get('/login' , [AuthenticationController::class,'showLogin'])->name('auth.login.view');
      Route::post('/login' , [AuthenticationController::class, 'login'])->name('auth.login');
      Route::get('/register' , [AuthenticationController::class, 'showRegister'])->name('auth.register.view');
      Route::post('/register'  , [AuthenticationController::class, 'register'])->name('auth.register');
});

Route::group(['prefix'=>'/'],function($router) {
     Route::get('/' , function(){
          if(!Auth::check()){
              return redirect()->route('auth.login.view');
          }

          return view('home' , ['title'=>'Home']);
     })->name('home');
});

 