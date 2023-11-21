<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('V1/posts', App\Http\Controllers\Api\V1\PostController::class)
->only(['index','show']);//establecer que está habilitado en la api para consumir
