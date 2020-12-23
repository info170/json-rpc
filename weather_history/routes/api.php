<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Services\JsonRpcServer;
use App\Http\Controllers\HistoryController;

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

Route::post('/', function (Request $request, JsonRpcServer $server, HistoryController $controller) {
    return $server->handle($request, $controller);
});