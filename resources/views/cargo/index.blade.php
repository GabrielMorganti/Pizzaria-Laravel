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
        @foreach ($cargos as $cargo )

        <tr>
            <td>
                <a class="btn btn-success" href="{{ route('cargo.edit', ['id'=>$cargo->id_cargo]) }}"><i class="bi bi-pencil"></i></a>
                <a class="btn btn-primary" href="{{ route('cargo.show', ['id'=>$cargo->id_cargo]) }}"><i class="bi bi-eye"></i></a>
                <a class="btn btn-warning" href="{{ route('cargo.destroy', ['id'=>$cargo->id_cargo]) }}"><i class="bi bi-trash3"></i></a>
            </td>

            <td>{{$cargo->id_cargo}}</td>

            <td>{{$cargo->cargo}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection


{{-- Script --}}
@section('scripts')

@endsection
