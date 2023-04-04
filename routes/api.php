<?php

use App\Http\Controllers\FileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/file', [FileController::class, 'index'])->name('file.index');
Route::get('/file/{file}', [FileController::class, 'getFile'])->name('file.getFile');
Route::post('/upload-file', [FileController::class, 'upload'])->name('file.upload');
