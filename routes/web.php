<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReportController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainController::class, 'showIndex']) -> name('home');

Route::get('/array', [MainController::class, 'showArray']) -> name('array');

Route::get('/report', [ReportController::class, 'index'])-> name('Report.index');

Route::delete('/report/{report}', [ReportController::class, 'destroy']) -> name('reports.destroy');

Route::post('/report', [ReportController::class, 'store']) -> name('reports.store');

Route::get('/report/{report}', [ReportController::class, 'show']) ->name('reports.show');

Route::put('/report/{report}', [ReportController::class, 'update']) ->name('reports.update');