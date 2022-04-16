<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;
use App\Http\Controllers\adminController;

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

Route::get('get1', [apiController::class, 'get1']);
Route::get('getspec', [apiController::class, 'getSpecs']);
Route::get('admininfo', [adminController::class, 'admininfo']);



Route::post('detail-item', [apiController::class, 'detail_item']);
Route::post('update-item', [apiController::class, 'update_item']);
Route::post('filtre', [apiController::class, 'filtre']);
Route::post('search-item', [apiController::class, 'search_item']);
Route::post('add-item', [apiController::class, 'add_item']);
Route::post('import-products', [apiController::class, 'import_products']);
Route::post('update-admin-info', [apiController::class, 'update_admin_info']);

Route::post('post1', [apiController::class, 'post1']);