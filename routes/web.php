<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', HomeController::class);

// Route::get('cursos', [CursoController::class, 'index']);
// Route::get('cursos/create', [CursoController::class, 'create']);
// Route::get('cursos/{curso}/{categoria?}', [CursoController::class, 'show']);

// Route::controller(CursoController::class)->group(function () {
//     Route::get('cursos', 'index');
//     Route::get('cursos/create', 'create');
//     Route::get('cursos/{curso}/{categoria?}', 'show');
// });

Route::group(['prefix' => 'cursos'], function () {
    Route::controller(CursoController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/create', 'create');
        Route::get('/{curso}/{categoria?}', 'show');
    });
});
