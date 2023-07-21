@extends('layouts.base')
@section('content')

<h1>Cargo: {{ $cargo->cargo }}</h1>
<h2>Relação de Usuários com esse cargo</h2>

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
                {{$cargo->cargo}}
            </td>
        </tr>
    </tbody>
</table>

@endsection

{{-- Script --}}
@section('scripts')

@endsection
