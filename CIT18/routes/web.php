<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\GreetController;

//Default route
Route::get('/', function () {
    return view('welcome');
});

//route for greeting
Route::get('/greet', [GreetController::class, 'showGreeting']);