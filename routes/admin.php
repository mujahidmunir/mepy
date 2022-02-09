<?php

use App\Http\Controllers\Admin\AboutUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController;

Route::group(['prefix' => 'admin', 'middleware' => 'auth:web', 'role' => 'admin'], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('/dashboard', [PageController::class, 'index']);
    Route::get('/sliders', [PageController::class, 'sliders']);
    Route::get('page/{slug}', [PageController::class, 'index'])->name('admin.page.index');
    Route::get('page/show/{id}', [PageController::class, 'index'])->name('admin.page.show');
    Route::get('page/create', [PageController::class, 'index'])->name('admin.page.create');
    Route::post('page/create', [PageController::class, 'store'])->name('admin.page.store');
    Route::get('page/edit/{id}', [PageController::class, 'edit'])->name('admin.page.edit');
    Route::post('page/edit/{id}', [PageController::class, 'update'])->name('admin.page.update');
    Route::post('page/delete/{id}', [PageController::class, 'destroy'])->name('admin.page.destroy');
});
