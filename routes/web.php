<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/acceptance-version', function () {
    return response('Gavan Dashboard Acceptance — Release 2', 200, [
        'Content-Type' => 'text/plain; charset=UTF-8',
    ]);
});
