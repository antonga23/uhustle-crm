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

Route::get('/home', function () {
    return redirect('/workstation');
});

Route::post('/api-request', 'GuzzleController@index')->name('api-request');

Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes();

// User Routes
Route::post('/upload-avatar','UserController@uploadAvatar');
Route::post('/update-user','UserController@update');
Route::post('/update-account','UserController@updateAccount');
Route::get('/get-current-user','UserController@getCurrentUser');
Route::get('/get-preferences','UserController@getPreferences');
Route::post('/update-preferences','UserController@updatePreferences');
Route::get('/delete-file/{id}', 'UserController@deleteFile');
Route::get('/download-file/{id}', 'UserController@downloadFile');

// App Pages Routes
Route::get('/workstation', 'PagesController@index')->name('workstation');
Route::get('/workstation/{lead_id}', 'PagesController@index')->name('workstation-lead-idea');
Route::get('/dashboard', 'PagesController@dashboard')->name('dashboard');
Route::get('/call-history', 'PagesController@callHistory')->name('call-history');
Route::get('/social-board', 'PagesController@socialBoard')->name('social-board');
Route::get('/users', 'PagesController@users')->name('users');
Route::get('/leads', 'PagesController@leads')->name('leads');
Route::get('/contacts', 'PagesController@contacts')->name('contacts');
Route::get('/preferences', 'PagesController@preferences')->name('preferences');
Route::get('/transactions', 'PagesController@transactions')->name('transactions');

// Stripe Routes
Route::group(['prefix' => 'stripe'], function () {
	Route::get('/balance-transactions', 'StripeController@index');
});

// Calls Routes
Route::group(['prefix' => 'calls'], function () {
	Route::get('/list', 'TwillioController@index');
	Route::get('/token', 'TwillioController@newToken');
	Route::post('/voice', 'TwillioController@voice');
	Route::post('/status-update', 'TwillioController@statusUpdate');
	Route::post('/create-call-record', 'TwillioController@createCallRecord');
	Route::get('/get-call-history', 'TwillioController@getCallHistory');
	Route::get('/get-call-history/{month}', 'TwillioController@getCallHistory');
	Route::get('/get-dashboard', 'TwillioController@getDashboard');
	Route::get('/get-dashboard/{month}', 'TwillioController@getDashboard');
});

// Users Routes
Route::group(['prefix' => 'users'], function () {
	Route::get('/get-users', 'UserController@index');
	Route::get('/get-user-counts', 'UserController@getUsers');
	Route::get('/get-user-counts/{role}', 'UserController@getUsers');
	Route::post('/get-assigned', 'UserController@getAssigned');
	Route::get('/get/{id}', 'UserController@getById');
	Route::post('/create', 'UserController@store');
	Route::post('/update', 'UserController@update');
	Route::get('/delete/{id}', 'UserController@destroy');
});

// Clients Routes
Route::group(['prefix' => 'clients'], function () {
	Route::get('/get/{client_id}', 'ClientsController@getById');
	Route::get('/get-all', 'ClientsController@index');
	Route::post('/create', 'ClientsController@store');
	Route::post('/update', 'ClientsController@update');
	Route::get('/delete/{client_id}', 'ClientsController@destroy');
	Route::get('/transactions', 'ClientsController@getAllTransactions');
});

// Tasks Routes
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

// Leads Routes
Route::group(['prefix' => 'leads'], function () {
	Route::get('/enqueue', 'LeadController@enQueue');
	Route::get('/get/{lead_id}', 'LeadController@getById');
	Route::get('/get-all', 'LeadController@index');
	Route::get('/get-active', 'LeadController@getActive');
	Route::post('/create', 'LeadController@store');
	Route::post('/create-client', 'LeadController@storeClient');
	Route::post('/update', 'LeadController@update');
	Route::get('/delete/{lead_id}', 'LeadController@destroy');
    Route::post('/updatestatus/{lead_id}', 'LeadController@updateStatus');
    Route::post('/updateassign/{lead_id}', 'LeadController@updateAssign');
    Route::post('/updatetime/{lead_id}', 'LeadController@updateTime');
    Route::post('/setcallback', 'LeadController@setCallback');
    Route::get('/get-user-callbacks', 'LeadController@getUserCallBacks');
    Route::get('/get-lead-counts', 'LeadController@getLeadsCount');
	Route::get('/get-lead-counts/{type}', 'LeadController@getLeadsCount');
    Route::get('/get-client-counts', 'LeadController@getClientCount');
	Route::get('/get-client-counts/{type}', 'LeadController@getClientCount');
	Route::get('/get-select-options', 'LeadController@getSelectOptions');
});

 // Filters Routes 
Route::group(['prefix' => 'filters'], function () {
	Route::get('/get/{id}', 'StoredFilterController@getById');
	Route::get('/get-all', 'StoredFilterController@index');
	Route::get('/get-active', 'StoredFilterController@getActive');
	Route::post('/create', 'StoredFilterController@store');
	Route::post('/update', 'StoredFilterController@update');
	Route::get('/delete/{id}/{type}', 'StoredFilterController@destroy');
	Route::post('/filter/{type}', 'StoredFilterController@filterLeadsData');
	Route::post('/clients-filter', 'StoredFilterController@filterClientsData');
	Route::post('/filter-counts/{type}', 'StoredFilterController@filterCounts');
});
// Roles Routes
Route::group(['prefix' => 'roles'], function () {
	Route::get('/get/{role_id}', 'RoleController@getById');
	Route::get('/get-all', 'RoleController@index');
	Route::get('/get-active', 'RoleController@getActive');
	Route::post('/create', 'RoleController@store');
	Route::post('/update', 'RoleController@update');
	Route::get('/get-permissions', 'RoleController@getPermissions');
	Route::put('/apply-permissions', 'RoleController@applyPermissions');
});

// Products Routes
Route::group(['prefix' => 'products'], function () {
	Route::get('/get/{role_id}', 'ProductController@getById');
	Route::get('/get-all', 'ProductController@index');
	Route::get('/get-active', 'ProductController@getActive');
	Route::post('/create', 'ProductController@store');
	Route::post('/update', 'ProductController@update');
});

// Comments Routes
Route::group(['prefix' => 'comments'], function () {
    Route::post('/add', 'CommentController@store');
    Route::post('/update', 'CommentController@update');
    Route::get('/get/{type}/{id}', 'CommentController@getStatsTypeById');
    Route::post('/check-exist', 'CommentController@checkExist');
});

// Modules Routes
Route::group(['prefix' => 'modules'], function () {
    Route::get('/get-all', 'ModuleController@index');
    Route::post('/add', 'ModuleController@store');
    Route::post('/update', 'ModuleController@update');
    Route::get('/destroy/{id}', 'ModuleController@destroy');
    Route::get('/get/{type}/{id}', 'ModuleController@getStatsTypeById');
    Route::post('/check-exist', 'ModuleController@checkExist');
});

// API Integration Routes
Route::group(['prefix' => 'apis'], function () {
    Route::get('/get-all', 'ApiIntegrationController@index');
    Route::post('/update', 'ApiIntegrationController@update');
});

