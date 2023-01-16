<?php

use App\Http\Resources\UserResource;
use App\Http\Resources\BackendResource;
use App\Models\User;
use App\Models\Backend;


use App\Http\Resources\UserCollection;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/user/{id}', function ($id) {
    return new UserResource(Backend::findOrFail($id));
});


Route::get('/users', function () {
    $backenduser = Backend::orderBy('name')->get();
    return BackendResource::collection($backenduser);
});


// Route::get('/users', function () {
//     return new UserCollection(User::all());
// });
