<?php

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


//Route::patch('/project','projectController@update');
Route::get('/project','ProjectDashboard@Project');
//Route::delete('/project','projectController@destroy');
Route::get('/create','projectController@create');
Route::post('/project','projectController@store');
 Route::get('/create', [
    'as' => 'create',
     'uses' => 'projectController@create'
 ]);
Route::get('/project', [
     'as' => 'project',
     'uses' => 'projectController@project'
 ]);
Route::get('/detail', 'ProjectTasksController@detail');
Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'projectController@edit']);
Route::patch('{project}', 'projectController@update');
Route::delete('{project}', 'projectController@destroy');
Route::get('{project}', 'projectController@show');
// Route::patch('/project', [
//      'as' => 'project',
//      'uses' => 'projectController@update'
//  ]);
Route::patch('/tasks/{task}', 'ProjectTasksController@update'); 
Route::post('/{project}/tasks','ProjectTasksController@store');
