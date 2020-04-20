<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('tasks', 'TasksController@getAll')->name('getAllTasks');
Route::post('tasks', 'TasksController@add')->name('addTasks');
Route::get('tasks/{id}', 'TasksController@get')->name('getTasks');
Route::post('tasks/{id}', 'TasksController@edit')->name('editTasks');
Route::get('tasks/delete/{id}', 'TasksController@delete')->name('deleteTasks');
