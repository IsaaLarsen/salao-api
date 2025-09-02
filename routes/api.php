<?php

use Illuminate\Support\Facades\Route;

Route::get('/ping', function () {
    return ['ok' => true, 'at' => now()->toDateTimeString()];
});
