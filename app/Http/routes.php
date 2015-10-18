<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/
// Route::get('/models', '\\Jimbolino\\Laravel\\ModelBuilder\\ModelGenerator5@start');

Route::get('token', function()
{
    return Session::token();
});

// Route::get('/', 'ApiController@index');

Route::post('/login', 'ApiController@login');
