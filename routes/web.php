<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaControllers;
use app\Http\Controllers\RelatorioController;


Route ::get('/',function(){
    return view('home');
})->name('home');

//Route::get('/pessoas',[PessoaController::class,'index'])->name('pessoas.index');
//Route::get('/pessoas/create',[PessoaController::class,'create']);
//Route::post('/pessoas',[PessoaController::class,'store'])->name('pessoas.store');
//Route :: get('/')

//Route::resource('/nivels',)

Route::get('/relatorios',[RelatorioController::class, 'emitirRelatorio'])->name('relatorio.emitir');


