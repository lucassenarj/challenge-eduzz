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
$router->get('/candidate/edit/{id}', ['uses' => 'HomeController@edit']);
$router->put('/candidate/{id}', ['uses' => 'HomeController@update']);
$router->post('/home', ['uses' => 'HomeController@store']);
$router->get('/candidate/delete/{id}', ['uses' => 'HomeController@destroy']);

//Route::get('candidate/{id}/delete', ['as' => 'delete', 'uses' => 'HomeController@destroy']);

$router->get('/candidate', function(){
    return view('add');
});


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