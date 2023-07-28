@extends('layouts.baseadm')

@section('contentadm')

<h1>Produtos</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th class="col-2">Ações</th>
            <th class="col-1">ID</th>
            <th>Produto</th>
            <th>Observações</th>
            <th>Qtd Tamanhos</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produtos->get() as $produto)

        <tr>
            <td>
                <a class="btn btn-success" href="{{ route('produto.edit', ['id'=>$produto->id_produto]) }}"><i class="bi bi-pencil"></i></a>
                <a class="btn btn-primary" href="{{ route('produto.show', ['id'=>$produto->id_produto]) }}"><i class="bi bi-eye"></i></a>
                <a class="btn btn-warning" href="{{ route('produto.destroy', ['id'=>$produto->id_produto]) }}"><i class="bi bi-trash3"></i></a>
            </td>

            <td>{{$produto->id_produto}}</td>

            <td>{{$produto->nome}}</td>

            <td>{{ nl2br($produto->observacoes)}}</td>
            <td>{!! $produto->tamanhos()->count() !!}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection

{{-- Script --}}
@section('scripts')

@endsection
