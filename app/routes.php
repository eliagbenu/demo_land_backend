<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
header('Access-Control-Allow-Origin: http://127.0.0.1:9000');

Route::get('/', function()
{
	return View::make('intro_page');
});

Route::post("/auth/login","AuthController@login");

Route::get("/auth/logout","AuthController@logout");

Route::get("/expiry",function(){
	return Response::json(array("flash"=>"All is good"));	
//	return Response::json(array("flash"=>"Your session has expired, please login"),401);
});


