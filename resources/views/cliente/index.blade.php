@extends('layouts.baseadm')
@section('contentadm')

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
        @foreach ($clientes as $cliente )

        <tr>
            <td>
                <a class="btn btn-success" href="{{ route('cargo.edit', ['id'=>$cliente->id_cliente]) }}"><i class="bi bi-pencil"></i></a>
                <a class="btn btn-primary" href="{{ route('cliente.show', ['id'=>$cliente->id_cliente]) }}"><i class="bi bi-eye"></i></a>
                <a class="btn btn-warning" href="{{ route('cliente.destroy', ['id'=>$cliente->id_cliente]) }}"><i class="bi bi-trash3"></i></a>
            </td>

            <td>{{$cliente->id_cliente}}</td>

            <td>{{$cliente->cliente}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection


{{-- Script --}}
@section('scripts')

@endsection
