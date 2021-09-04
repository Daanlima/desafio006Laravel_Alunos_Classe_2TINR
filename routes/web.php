<?php

use Illuminate\Support\Facades\Route;
use App\Models\Alunos;
use App\Http\Controllers\AlunosController;
use App\Http\Controllers\ClasseController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/alunos/novo', [AlunosController::class, 'create']);
Route::post('/alunos/novo', [AlunosController::class, 'store'])->name('registrar_aluno');
Route::get('/alunos/ver/{id}', [AlunosController::class, 'ver']);
Route::get('/alunos/editar/{id}', [AlunosController::class, 'editar']);
Route::post('/alunos/editar/{id}', [AlunosController::class, 'update'])->name('alterar_aluno');
Route::get('/alunos/excluir/{id}', [AlunosController::class, 'delete']);
Route::post('/alunos/excluir/{id}', [AlunosController::class, 'destroy'])->name('deletar_aluno');

Route::get('/classes/novo', [ClasseController::class, 'create']);
Route::post('/classes/novo', [ClasseController::class, 'store'])->name('registrar_classe');
Route::get('/classes/ver/{id}', [ClasseController::class, 'ver']);
Route::get('/classes/editar/{id}', [ClasseController::class, 'editar']);
Route::post('/classes/editar/{id}', [ClasseController::class, 'update'])->name('alterar_classe');
Route::get('/classes/excluir/{id}', [ClasseController::class, 'delete']);
Route::post('/classes/excluir/{id}', [ClasseController::class, 'destroy'])->name('deletar_classe');
