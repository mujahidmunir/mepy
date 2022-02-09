<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MepyCreativaController;
use App\Http\Controllers\MepyRecordController;
use App\Http\Controllers\MepyEntertaimentController;
use App\Http\Controllers\MepyTalentManagement;
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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [PageController::class, 'index']);

Route::get('/mepy-record', [MepyRecordController::class, 'index'])->name('record.index');
Route::get('/mepy-record/{param}', [MepyRecordController::class, 'detail'])->name('record.detail');

Route::get('/mepy-creativa', [MepyCreativaController::class, 'index'])->name('creativa.index');
Route::get('/mepy-creativa/{param}', [MepyCreativaController::class, 'detail'])->name('creativa.detail');

Route::get('/mepy-talent-management', [MepyTalentManagement::class, 'index'])->name('talent.index');
Route::get('/mepy-talent-management/{param}', [MepyTalentManagement::class, 'detail'])->name('talent.detail');

Route::get('/mepy-entertaiment', [MepyEntertaimentController::class, 'index'])->name('entertaime.index');
Route::get('/mepy-entertaiment/{parm}', [MepyEntertaimentController::class, 'detail'])->name('entertaime.detail');

Route::get('/contact-us', [PageController::class, 'index']);

