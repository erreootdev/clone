<?php

use Illuminate\Support\Facades\Route;

route::get('/post',[\App\Http\Controllers\PostController::class,'index']);
route::get('/post/{id}',[\App\Http\Controllers\PostController::class,'show']);
