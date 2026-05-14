<?php

use App\http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


route::resource('anggota',AnggotaController::class);
