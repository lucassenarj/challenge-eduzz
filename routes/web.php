<?php
use Illuminate\Http\Request;

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

$router->get('/home', ['as' => 'home', 'uses' => 'HomeController@home'], function (Request $request){
    return view('home');
});

$router->get('/candidate/{id}', ['uses' => 'HomeController@candidates']);


/*
$router->get('/candidate', ['as' => 'candidate', 'uses' => 'HomeController@candidate'], function (Request $request){
    return view('candidate');
});
//*/

Route::get('/login', ['as' => 'login', 'uses' => 'HomeController@login']);
Route::get('/register', ['as' => 'register', 'uses' => 'HomeController@register']);
Route::get('/request/password', ['as' => 'password.request', 'uses' => 'HomeController@register']);
Route::post('/login', ['as' => 'login', 'uses' => 'UserController@login']);


/*
Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@home'], function(Request $token){
    //if($token == null) return response('Not valid token provider.', 401);
    
    return view('home');
});
*/


$router->group(['middleware' => 'jwt.auth', 'prefix' => 'api/v1'], function ($router) {
    $router->get('/candidates', 'CandidateController@index');
    $router->get('/candidates/{id}', 'CandidateController@show');
    $router->post('/candidates', 'CandidateController@store');
    $router->put('/candidates/{id}', 'CandidateController@update');
    $router->delete('/candidates/{id}', 'CandidateController@destroy');

    $router->get('/users', 'UserController@index');
    $router->get('/users/{id}', 'UserController@show');
    $router->post('/users/logout', 'UserController@logout');
    $router->post('/users/me', 'UserController@me');
    $router->post('/users/refresh', 'UserController@refresh');
});

//$router->post('api/v1/users/login', ['as' => 'singin', 'uses' => 'UserController@login']);

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