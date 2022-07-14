<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProviderModuleController;
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
Route::get('/moduleviewer', function () {
    return view('moduleviewer');
});

Route::get('/', [ProviderModuleController::class, 'index'])->name('home');


Route::resource('providerModules', ProviderModuleController::class);

