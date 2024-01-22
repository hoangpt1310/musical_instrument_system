<?php

use App\Http\Controllers\client\ClientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/')->group(function () {
    //page index
    Route::get('/melody', [ClientController::class, 'index'])->name('index');
    Route::get('/getAllCategories', [ClientController::class, 'getAllCategories']);

});
