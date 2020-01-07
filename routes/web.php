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

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->group(['prefix' => 'api','middleware'=>'autenticador'], function () use ($router) {
    $router->group(['prefix'=>'user'],function() use ($router){
        $router->post('', 'UserController@store');
        $router->get('', 'UserController@index');
        $router->get('{id}', 'UserController@show');
        $router->put('{id}', 'UserController@update');
        $router->delete('{id}', 'UserController@destroy');
    });

    $router->group(['prefix'=>'institution-type'],function() use ($router){
        $router->post('', 'InstitutionTypeController@store');
        $router->get('', 'InstitutionTypeController@index');
        $router->get('{id}', 'InstitutionTypeController@show');
        $router->put('{id}', 'InstitutionTypeController@update');
        $router->delete('{id}', 'InstitutionTypeController@destroy');
    });
    $router->group(['prefix'=>'institution'],function() use ($router){
        $router->post('', 'InstitutionController@store');
        $router->get('', 'InstitutionController@index');
        $router->get('{id}', 'InstitutionController@show');
        $router->put('{id}', 'InstitutionController@update');
        $router->delete('{id}', 'InstitutionController@destroy');
    });
    $router->group(['prefix'=>'event-category'],function() use ($router){
        $router->post('', 'EventCategoryController@store');
        $router->get('', 'EventCategoryController@index');
        $router->get('{id}', 'EventCategoryController@show');
        $router->put('{id}', 'EventCategoryController@update');
        $router->delete('{id}', 'EventCategoryController@destroy');
    });
    $router->group(['prefix'=>'event'],function() use ($router){
        $router->post('', 'EventController@store');
        $router->get('', 'EventController@index');
        $router->get('{id}', 'EventController@show');
        $router->put('{id}', 'EventController@update');
        $router->delete('{id}', 'EventController@destroy');
    });
    $router->group(['prefix'=>'contact'],function() use ($router){
        $router->post('', 'ContactController@store');
        $router->get('', 'ContactController@index');
        $router->get('{id}', 'ContactController@show');
        $router->put('{id}', 'ContactController@update');
        $router->delete('{id}', 'ContactController@destroy');
    });
    $router->group(['prefix'=>'event-price'],function() use ($router){
        $router->post('', 'EventPriceController@store');
        $router->get('', 'EventPriceController@index');
        $router->get('{id}', 'EventPriceController@show');
        $router->put('{id}', 'EventPriceController@update');
        $router->delete('{id}', 'EventPriceController@destroy');
    });
    $router->group(['prefix'=>'activity-type'],function() use ($router){
        $router->post('', 'ActivityTypeController@store');
        $router->get('', 'ActivityTypeController@index');
        $router->get('{id}', 'ActivityTypeController@show');
        $router->put('{id}', 'ActivityTypeController@update');
        $router->delete('{id}', 'ActivityTypeController@destroy');
    });
    $router->group(['prefix'=>'activity'],function() use ($router){
        $router->post('', 'ActivityController@store');
        $router->get('', 'ActivityController@index');
        $router->get('{id}', 'ActivityController@show');
        $router->put('{id}', 'ActivityController@update');
        $router->delete('{id}', 'ActivityController@destroy');
    });
    $router->group(['prefix'=>'schedule'],function() use ($router){
        $router->post('', 'ScheduleController@store');
        $router->get('', 'ScheduleController@index');
        $router->get('{id}', 'ScheduleController@show');
        $router->put('{id}', 'ScheduleController@update');
        $router->delete('{id}', 'ScheduleController@destroy');
    });
    $router->group(['prefix'=>'activity'],function() use ($router){
        $router->post('', 'ActivityTagController@store');
        $router->get('', 'ActivityTagController@index');
        $router->get('{id}', 'ActivityTagController@show');
        $router->put('{id}', 'ActivityTagController@update');
        $router->delete('{id}', 'ActivityTagController@destroy');
    });
});

$router->post('/api/login', 'TokenController@gerarToken');


