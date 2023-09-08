<?php

use App\Http\Controllers\Api\ApiBasicController;
use App\Http\Controllers\Api\ApiPageController;
use Illuminate\Support\Facades\Route;

Route::get('pages/{slug?}', [ApiPageController::class, 'page']);
Route::get('basic', [ApiBasicController::class, 'basic']);

