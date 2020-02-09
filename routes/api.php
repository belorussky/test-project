<?php

Route::post('login', 'AuthenticateController@login');
Route::post('user', 'AuthenticateController@getAuthUser');
