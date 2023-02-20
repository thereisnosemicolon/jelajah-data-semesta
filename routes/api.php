<?php

use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\CommentNewsController;
use App\Http\Controllers\DeleteNewsController;
use App\Http\Controllers\JDSNewsManagementController;
use App\Http\Controllers\PostNewsController;
use App\Http\Controllers\ShowNewsController;
use App\Http\Controllers\UpdateNewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [Register::class, 'regist']);
Route::post('/login', [Login::class, 'login']);
Route::delete('news/{jdm_management_news}', [DeleteNewsController::class, 'delete'])->middleware(['auth:api', 'isadmin']);
Route::patch('news/{jdm_management_news}', [UpdateNewsController::class, 'update'])->middleware(['auth:api', 'isadmin']);
Route::get('news/{jdm_management_news}', [ShowNewsController::class, 'show'])->middleware('auth:api');
Route::post('news/comment', [CommentNewsController::class, 'comment'])->middleware('auth:api');
Route::post('news', [PostNewsController::class, 'post'])->middleware(['auth:api', 'isadmin']);
