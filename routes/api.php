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
// we need the id
Route::put('/tasks/{id}', function ($id){
    return 'update tasks: '.$id;

});
//to make a post we need a body
Route::post('/tasks', function (){
    return 'Create tasks';

});
//DELETE TASK
Route::delete('/tasks/{id}', function ($id){
    return 'Delete tasks: '.$id;

});

//GET ALL
Route::get('/tasks', function (){
    return 'Get my tasks Application';

});

//get only one task
Route::get('/tasks/{id}', function ($id){
    return 'Get my tasks Application: '.$id;

});

