<?php

use App\Http\Controllers\DetailsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServicesController;
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


// All services Routes
Route::group(['prefix' => 'services'], function () {
  Route::get('/all-service/', [ServicesController::class, 'serviceIndex'])->name('all.services');
  Route::get('/add/', [ServicesController::class, 'serviceAdd'])->name('service.add');
  Route::post('/store/', [ServicesController::class, 'serviceStore'])->name('service.store');
  Route::get('/getData/{id}', [ServicesController::class, 'serviceGetData'])->name('service.data');
  Route::post('/save/{id}', [ServicesController::class, 'serviceSave'])->name('service.save');
  Route::post('/delete/{id}', [ServicesController::class, 'serviceDelete'])->name('service.delete');
});

// All Project Routes
Route::get('/', [ProjectController::class, 'projectIndex'])->name('home');

Route::group(['prefix' => 'Project'], function () {
  Route::post('/store/', [ProjectController::class, 'projectStore'])->name('project.store');
});

// All Details Routes
Route::group(['prefix' => 'details'], function () {
  Route::get('/personal/', [DetailsController::class, 'personalIndex'])->name('all.details');
  Route::post('/personal/save', [DetailsController::class, 'personalSave'])->name('save.details');
});