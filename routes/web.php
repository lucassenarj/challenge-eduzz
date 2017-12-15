<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function (){
    return view('welcome');
});

Route::group(['middleware' => 'jwt.auth', 'prefix' => 'api'], function ($router) {
    Route::get('/candidates', 'CandidateController@index');
    Route::get('/candidates/{id}', 'CandidateController@show');
    Route::post('/candidates', 'CandidateController@store');
    Route::put('/candidates/{id}', 'CandidateController@update');
    Route::delete('/candidates/{id}', 'CandidateController@destroy');

    Route::get('/users', 'UserController@index');
    Route::get('/users/{id}', 'UserController@show');
    Route::post('/users/logout', 'UserController@logout');
    Route::post('/users/me', 'UserController@me');
    Route::post('/users/refresh', 'UserController@refresh');
});

Route::post('api/users/login', 'UserController@login');

/*
Route::group(['middleware' => 'api', 'prefix' => 'users'], function ($router) {
    Route::post('login', 'UsersController@login');
    Route::post('logout', 'UsersController@logout');
    Route::post('refresh', 'UsersController@refresh');
    Route::post('me', 'UsersController@me');
    Route::get('all', 'UsersController@all');
});

//Route::post('/login' , 'Auth\LoginController@login');

Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@login']);
Route::get('register', ['as' => 'register', 'uses' => 'LoginController@getView']);

$router->group(['prefix' => 'eduzz'], function($app) {
    $app->post('register','UserController@create');
    $app->post('authorize','UserController@auth');
    $app->post('accesstoken','UserController@accesstoken');
    $app->post('refresh','UserController@refresh');
    $app->get('me','UserController@me');
    $app->post('logout','UserController@logout');
    $app->put('users/{id}','UserController@update');
    $app->get('users/{id}','UserController@view');
    $app->delete('users/{id}','UserController@deleteRecord');
    $app->get('users','UserController@index');
    
    //$app->post('candidates','EmployeesController@create');
    //$app->put('candidates/{id}','EmployeesController@update');
    //$app->get('candidates/{id}','EmployeesController@view');
    //$app->delete('candidates/{id}','EmployeesController@deleteRecord');
    //$app->get('candidates','EmployeesController@index');
});

/**
 * Routes for resource user-controller
 */
//$app->get('user-controller', 'UserController@all');
//$app->get('user-controller/{id}', 'UserController@get');
//$app->post('user-controller', 'UserController@add');
//$app->put('user-controller/{id}', 'UserController@put');
//$app->delete('user-controller/{id}', 'UserController@remove');