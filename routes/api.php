<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
 //establecer que está habilitado en la api para consumir
 Route::apiResource('V1/posts', App\Http\Controllers\Api\V1\PostController::class)
    ->only(['index', 'show', 'destroy']);
//si establesco una segunda ruta tendre problemas por  PostController debo declarar un alias
Route::apiResource('V2/posts', App\Http\Controllers\Api\V2\PostController::class)
    ->only(['index', 'show', 'destroy']);
 */
//asi se crean alias para evitar conflictos:   as nombrealias
use App\Http\Controllers\Api\V1\PostController as PostV1;
use App\Http\Controllers\Api\V2\PostController as PostV2;

Route::apiResource('V1/posts', PostV1::class)
    ->only(['index', 'show', 'destroy'])
    ->middleware(['auth:sanctum']);

Route::apiResource('V2/posts', PostV2::class)
    ->only(['index', 'show'])
    ->middleware(['auth:sanctum']);


Route::post('login', [App\Htpp\Controllers\Api\LoginController::class,'login']);

