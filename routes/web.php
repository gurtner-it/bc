<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChainController;

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

Route::get('/', function () {
    return view('welcome');
});

// cart group to pass on cart session
Route::group(['middleware' => ['web']], function () {

    #Test Funcions
    Route::get('/addBlock', [ChainController::class,'addBlock']);

    # Main
    Route::get('/', function () {
        return view('welcome');
    });
});
