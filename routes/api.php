<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\CollegeController;
use App\Http\Controllers\Api\V1\ProgramController;
use App\Http\Controllers\Api\V1\UniversityEventController;
use App\Http\Controllers\Api\V1\NewsController;
use App\Http\Controllers\Api\V1\TransparencyController;
use App\Http\Controllers\Api\V1\DownloadablesController;
use App\Http\Controllers\Api\V1\PhilgepsController;

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

Route::prefix('v1')->name('api.')->middleware('auth:sanctum')->group(function(){
    Route::apiResources([
        'users' => UserController::class,
        'college' => CollegeController::class,
        'program' => ProgramController::class,
        'event' => UniversityEventController::class,
        'news' => NewsController::class,
        'transparency' => TransparencyController::class,
        'downloadables' => DownloadablesController::class,
        'philgeps' => PhilgepsController::class,
    ]);
});
