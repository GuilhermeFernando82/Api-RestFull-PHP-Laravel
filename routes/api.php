<?php

Route::apiResource('produtos', 'DataProducts');
Route::get('produtoslist/{id}', 'DataProducts@filtro');
Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');
Route::get('logout', 'AuthController@logout');
Route::get('user', 'AuthController@getAuthUser');