<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAgentController;
use App\Http\Controllers\MasterAgentController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Hash;
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

// clear application cache
Route::get('/clear-cache', function () {
	Artisan::call('cache:clear');
	return "Application cache flushed";
});

// clear route cache
Route::get('/clear-route-cache', function () {
	Artisan::call('route:clear');
	return "Route cache file removed";
});

// clear view compiled files
Route::get('/clear-view-compiled-cache', function () {
	Artisan::call('view:clear');
	return "View compiled files removed";
});

// clear config files
Route::get('/clear-config-cache', function () {
	Artisan::call('config:clear');
	return "Configuration cache file removed";
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register',[AuthController::class,'loadRegister']);
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::get('/login',function(){
    return redirect('/');
});

// ********** Athu verfication *********

Route::get('/',[AuthController::class,'loadLogin']);
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');


// ********** Admin Routes *********
Route::group(['prefix' => 'admin','middleware'=>['web','isAdmin']],function(){
    Route::get('/dashboard',[AdminController::class,'dashboard']);
    Route::get('/users',[AdminController::class,'users'])->name('AdminUsers');
    Route::get('/manage-role',[AdminController::class,'manageRole'])->name('manageRole');
    Route::post('/update-role',[AdminController::class,'updateRole'])->name('updateRole');
});

// ********** Super Agent Routes *********
Route::group(['prefix' => 'super-agent','middleware'=>['web','isSuperAgent']],function(){
    Route::get('/dashboard',[SuperAgentController::class,'dashboard']);
});

// ********** Master Agent Routes *********
Route::group(['prefix' => 'master-agent','middleware'=>['web','isMasterAgent']],function(){
    Route::get('/dashboard',[MasterAgentController::class,'dashboard']);
});

// ********** Agent Routes *********
Route::group(['prefix' => 'agent','middleware'=>['web','isAgent']],function(){
    Route::get('/dashboard',[AgentController::class,'dashboard']);
});

// ********** User Routes *********
Route::group(['middleware'=>['web','isUser']],function(){
    Route::get('/dashboard',[UserController::class,'dashboard']);
});
