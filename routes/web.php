<?php

use App\Http\Controllers\EstoqueController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/estoque', [EstoqueController::class,'index'])->name('estoque');

// Route::get('/teste', function() {
//     return 'o teste funcionou';
// });

// Route::get('/teste-com-view', function() {
//     return view('teste');
// });

// Route::get('/noticia/{id}', function($id = 'nada') {
//     return "Você esta lendo a notícia {$id}";
// });