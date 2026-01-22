<?php

use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [ MainController::class, 'showIndex' ]) -> name('home');
Route::get('/array', [ MainController::class, 'showArray' ]) -> name('showArray');

Route::get('/reports', [ ReportController::class, 'index' ]) -> name('reports.index');
Route::get('/reports/create', [ ReportController::class, 'index' ]) -> name('reports.create');
Route::delete('/reports/{report}', [ ReportController::class, 'destroy' ]) -> name('reports.destroy');

//Route::get('/', function () {
//    return view('welcome');
//});
