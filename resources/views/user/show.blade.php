@extends('layouts.baseadm')
@section('contentadm')

<h1>Usuario: {{ $user->nome}}</h1>  <br><br>
<h2>Informações do cliente</h2> <br><br>

<table class="table table-striped">

    <thead>
        <tr>

            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Cargo</th>
        </tr>
    </thead>
    <tbody>
        <tr>

            <td>
                {{$user->id}}
            </td>
            <td>
                {{$user->nome}}
            </td>
            <td>
                {{$user->email}}


            </td>

            <td>
                {{$user->cargo->cargo}}
            </td>

        </tr>
    </tbody>
</table>


    <tbody>

    </tbody>
</table>


@endsection

{{-- Script --}}
@section('scripts')

@endsection
