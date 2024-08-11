<?php
use Illuminate\Support\Facades\Route;
use app\http\Controllers\api\V1\UserController;

Route::get('/users',[UserController::class, 'index']);