<?php

Route::post('login', 'AuthenticateController@login');

//users
Route::resource('user', 'Api\UsersController');

Route::post('user', 'AuthenticateController@getAuthUser');
Route::post('register' ,'AuthenticateController@register');

