@extends('layouts.baseadm')
@section('contentadm')

<h1>Cliente: {{ $cliente->nome}}</h1>
<h2>Informações do cliente</h2>

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
                <a class="btn btn-success" href="{{route('cliente.edit', ['id_cliente'=>$cliente->id_cliente])}}"><i class="bi bi-pencil"></i></a>
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
<h2>Endereços cadastrados</h2>
<table class="table table-striped">
    <h6><a class="btn btn-primary" href="{{route('cliente.createEndereco', ['id_cliente' => $cliente->id_cliente])}}">Cadastrar Endereço</a></h6>

    <thead>
        <tr>
            <th>Ações</th>
            <th>ID</th>
            <th>Endereço</th>
            <th>Número</th>
            <th>Bairro</th>
            <th>Cidade</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <a class="btn btn-success" href="#"><i class="bi bi-pencil"></i></a>
            </td>

            <td>
                {{$endereco->cep}}
            </td>
        </tr>
    </tbody>
</table>


@endsection

{{-- Script --}}
@section('scripts')

@endsection
