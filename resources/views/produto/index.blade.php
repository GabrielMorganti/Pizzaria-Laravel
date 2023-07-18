@extends('layouts.base')
@section('content')

<h1>Cargos</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Ações</th>
            <th>ID</th>
            <th>Cargo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $produto )

        <tr>
            <td>
                <a class="btn btn-success" href="{{ route('produto.edit', ['id'=>$produto->id_produto]) }}"><i class="bi bi-pencil"></i></a>
                <a class="btn btn-primary" href="{{ route('produto.show', ['id'=>$produto->id_produto]) }}"><i class="bi bi-eye"></i></a>
                <a class="btn btn-warning" href="{{ route('produto.destroy', ['id'=>$produto->id_produto]) }}"><i class="bi bi-trash3"></i></a>
            </td>

            <td>{{$produto->id_produto}}</td>

            <td>{{$produto->nome}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection

{{-- Script --}}
@section('scripts')

@endsection
