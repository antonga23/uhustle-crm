<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Yongama Another Pipeline Tst
// Yongama Another Pipeline Tst

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'calls'], function () {
	Route::post('/call', 'TwillioController@makeCall');
	Route::post('/end', 'TwillioController@endCall');
	Route::post('/get-call-status', 'TwillioController@getCallStatus');
	Route::get('/get-call-history/{agent_id}/{month}', 'TwillioController@getCallHistoryByAgentID');
});

Route::group(['prefix' => 'clients'], function () {
	Route::get('/get/{client_id}', 'ClientsController@getById');
	Route::get('/get-all', 'ClientsController@index');
	Route::post('/create', 'ClientsController@store');
	Route::post('/update', 'ClientsController@update');
	Route::get('/delete/{client_id}', 'ClientsController@destroy');
});

Route::group(['prefix' => 'tasks'], function () {
	Route::get('/get/{task_id}', 'TaskController@getById');
	Route::get('/get-all', 'TaskController@index');
	Route::get('/get-active', 'TaskController@getActive');
	Route::post('/create', 'TaskController@store');
	Route::post('/update', 'TaskController@update');
	Route::get('/delete/{task_id}', 'TaskController@destroy');
    Route::post('/updatestatus/{task_id}', 'TaskController@updateStatus');
    Route::post('/updateassign/{task_id}', 'TaskController@updateAssign');
    Route::post('/updatetime/{task_id}', 'TaskController@updateTime');
});

Route::group(['prefix' => 'leads'], function () {
	Route::get('/enqueue', 'LeadController@enQueue');
	Route::get('/get/{lead_id}', 'LeadController@getById');
	Route::get('/get-all', 'LeadController@index')->middleware('auth:api');
	Route::get('/get-active', 'LeadController@getActive');
	Route::post('/create', 'LeadController@store');
	Route::post('/update', 'LeadController@update');
	Route::get('/delete/{lead_id}', 'LeadController@destroy');
    Route::post('/updatestatus/{lead_id}', 'LeadController@updateStatus');
    Route::post('/updateassign/{lead_id}', 'LeadController@updateAssign');
    Route::post('/updatetime/{lead_id}', 'LeadController@updateTime');
    Route::post('/setcallback', 'LeadController@setCallback');
});

Route::group(['prefix' => 'roles'], function () {
	Route::get('/get/{role_id}', 'RoleController@getById');
	Route::get('/get-all', 'RoleController@index');
	Route::get('/get-active', 'RoleController@getActive');
	Route::post('/create', 'RoleController@store');
	Route::post('/update', 'RoleController@update');
});


Route::group(['prefix' => 'products'], function () {
	Route::get('/get/{role_id}', 'ProductController@getById');
	Route::get('/get-all', 'ProductController@index');
	Route::get('/get-active', 'ProductController@getActive');
	Route::post('/create', 'ProductController@store');
	Route::post('/update', 'ProductController@update');
});

Route::group(['prefix' => 'comments'], function () {
    Route::post('/add', 'CommentController@store');
    Route::get('/get/{type}/{id}', 'CommentController@getStatsTypeById');
});

