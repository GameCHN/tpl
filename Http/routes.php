<?php

Route::group(['prefix' => 'tpl', 'namespace' => 'App\Tpl\Http\Controllers'], function()
{
	Route::get('/', 'TplController@index');
});