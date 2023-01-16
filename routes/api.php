<?php


// use App\Models\User;
use App\Models\Backend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendController;

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

Route::post('/user/{id}', function ($id) {
    return new UserResource(Backend::findOrFail($id));
});


Route::get('backend',[BackendController::class,"index"]);
Route::post('backend',[BackendController::class,"store"]);
Route::delete('backend/{backend}',[BackendController::class,"destory"]);
Route::put('backend/{backend}',[BackendController::class,"update"]);
Route::get('backend/{backend}',[BackendController::class,"show"]);

