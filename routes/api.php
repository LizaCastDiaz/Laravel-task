<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
rout
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/tasks', function (){
    return 'Welcome to my tasks Application';

});

Route::put('/tasks', function (){
    return 'update tasks Application';

});

Route::post('/tasks', function (){
    return 'Welcome to my tasks Application';

});

Route::delete('/tasks', function (){
    return 'Delete my tasks Application';

});


Route::get('/tasks', function (){
    return 'Get my tasks Application';

});
