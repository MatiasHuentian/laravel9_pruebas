<?php

use Illuminate\Support\Facades\Route;
USE App\Http\Controllers\Admin\HomeController;

Route::get('', [ HomeController::class , 'index' ]);
