<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/addclient', [ClientController::class, 'addclient'])->name('addclient');

Route::get('/clientlist', [ClientController::class, 'clientlist'])->name('clientlist');

Route::get('/doctorlist', [ClientController::class, 'doctorlist'])->name('doctorlist');

Route::delete('/delete-client/{email}', [ClientController::class, 'deleteClient']);

Route::post('/addclient/check', [ClientController::class, 'addclient_check']);
