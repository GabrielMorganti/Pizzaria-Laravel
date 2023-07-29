@extends('layouts.baseadm')
@section('contentadm')

<h1>Cliente: {{ $cliente->nome}}</h1>
<h2>Relação de Usuários com esse cargo</h2>

<table class="table table-striped">

    <thead>
        <tr>
            <th>Ações</th>
            <th>ID</th>
            <th>Nome</th>
            <th>DDD Celular</th>
            <th>E-mail</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <a class="btn btn-success" href="#"><i class="bi bi-pencil"></i></a>
            </td>

            <td>
                {{$cliente->id_cliente}}
            </td>
            <td>
                {{$cliente->nome}}
            </td>
            <td>
                {{$cliente->ddd}}
                {{$cliente->celular}}
            </td>
            <td>
                {{$cliente->email}}
            </td>
        </tr>
    </tbody>
</table>

<h1 class="mt-5">Endereços</h1>
<table class="table table-striped">

    <thead>
        <tr>
            <th>Ações</th>
            <th>Nome</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <a class="btn btn-success" href="#"><i class="bi bi-pencil"></i></a>
            </td>

            <td>
                {{$cliente->cliente}}
            </td>
        </tr>
    </tbody>
</table>


@endsection

{{-- Script --}}
@section('scripts')

@endsection
