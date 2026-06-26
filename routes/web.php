<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LinkBioController;

Route::get('/', [LinkBioController::class, 'index']);