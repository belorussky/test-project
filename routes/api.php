<?php

Route::post('login', 'AuthenticateController@login');

//users
Route::apiResource('user', 'Api\UsersController');
