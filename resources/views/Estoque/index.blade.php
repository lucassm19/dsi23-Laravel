{{-- resources/views/estoque/index.blade.php --}}
@extends('base')

@section('title', 'Estoque')

@section('content')

<div class="mb-5">Index do estoque</div>

<!-- Listar os produtos em estoque -->
<div class="mb-5">
    <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr>
                <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">ID</th>
                <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Produto</th>
                <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Quantidade</th>
                <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Excluir</th>
            </tr>
        </thead>

        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($lista as $item)
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">{{$item['id']}}</td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5"><a href="{{route('estoque.editar', $item['id'])}}">{{$item['nome']}}</td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">{{$item['quantidade']}}</td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5"><a ref="{{route('estoque.apagar', $item['id'])}}">Excluir</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div><a href="{{ route('estoque.adicionar')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Adicionar item</a></div>

@endsection
