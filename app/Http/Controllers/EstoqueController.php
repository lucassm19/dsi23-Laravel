<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstoqueResquest;
use App\Models\Estoque;
use Illuminate\Http\Request;

class EstoqueController extends Controller
{
    public function index()
    {
        return view('estoque.index');
        $lista = Estoque::all();

        return view('estoque.index', [
            'lista' => $lista,
        ]);
    }

    public function adicionar()
    {
        return view('estoque.adicionar');
    }

    public function adicionarGravar(EstoqueResquest $form)
    {
        $dados = $form->validated();
        Estoque::create($dados);
        return redirect('estoque');
    }

    public function editarGravar(EstoqueResquest $form)
    {
        $dados = $form->validated();
        $estoque = Estoque::find($dados['id']);
        $estoque->fill($dados);
        $estoque->save();
        return redirect('estoque');
    }

    public function editar(Estoque $estoque){
        return view('estoque.adicionar', ['editar' => $estoque,]);
    }
}
