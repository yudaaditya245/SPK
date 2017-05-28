<?php

Route::get('/', 'HomeController@index');

Route::get('/diaghidup', 'HidupController@index');
Route::get('/diagmati', 'MatiController@index');

Route::get('/diagmati/{id}', 'MatiController@diagnosa');
Route::get('/diaghidup/{id}', 'HidupController@diagnosa');

Route::get('/solmati/{text}', 'MatiController@solmati');
Route::get('/solhidup/{text}', 'HidupController@solhidup');
