<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\CallViewController;




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

Route::get('/', [LoginController::class, 'Login']);

// Route::get('/App/Administration', [LoginController::class, 'UserAdmin']);

Route::post('/Acess', [LoginController::class, 'Acess']);


//Manipulação de dados

Route::post('/AddDashboard', [ContentController::class, 'AddAdmin']);
Route::post('/AddServers', [ContentController::class, 'AddServers']);
Route::post('/AddPabxUsers', [ContentController::class, 'AddPabxUsers']);

Route::get('/InserindoPabxUser', [CallViewController::class, 'addpabxuser']);
Route::get('/InserindoServers', [CallViewController::class, 'addserver']);
Route::get('/InserindoAdmin', [CallViewController::class, 'addadmin']);


// Fim - Manipulação de dados



Route::get('/ShowDashboard', [ContentController::class, 'ShowDashboard']);
Route::get('/ShowServers', [ContentController::class, 'ShowServers']);
Route::get('/ShowPabxUsers', [ContentController::class, 'ShowPabxUsers']);





Route::get('/home', [CallViewController::class, 'Home']);
Route::get('/pabxusers', [CallViewController::class, 'PabxUsers']);
Route::get('/servers', [CallViewController::class, 'Servers']);
Route::get('/Admin', [CallViewController::class, 'Admin']);




