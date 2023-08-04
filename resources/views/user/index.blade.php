@extends('layouts.baseadm')
@section('contentadm')

@include('layouts.partials.menu')

<h1 class="mt-5">
    <i class="fa-solid fa-pizza-slice"></i>
    usuarios -
    <a href="{{route('user.create')}}" class="btn btn-primary">
        Novo usuario
    </a>
</h1>

<div class="container">
    <div class="row">
        <div class="col-12">
            {{-- <p>{{ $user->onEachSide(5)->links() }}
            </p> --}}
        </div>
        <div class="col-3 mt-4">





    </div>
</div>


{{-- Alerts --}}
@include('layouts.partials.alerts')
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th class="col-2">Ações</th>
            <th class="col-1">ID</th>
            <th>usuario</th>
            <th>Observações</th>
            <th>Cargo</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($users as $item)
            <tr>
                <td>
                    <a class="btn btn-primary" href="{{ route('user.edit', ['id' => $item->id]) }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <br><br>
                    <a class="btn btn-success" href="{{ route('user.show', ['id' => $item->id]) }}">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <br><br>
                    <form action="{{ route('user.destroy',['id'=>$item->id])}}" method="post">
                        @csrf
                        @method('delete')
                        <button class=" btn btn-danger" onclick=" return confirm('tem certeza que deseja excluir?')" ><i class="fa-solid fa-trash-can"></i></button>
                        </form>

                </td>
                <td>
                    {{ $item->id }}

                </td>
                <td>
                    {{ $item->nome }}

                </td>
                <td>{{ $item->email }}</td>
                <td>
                    {{ $item->cargo->cargo }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection

{{-- Script --}}
@section('scripts')

    @parent
        {{-- MODAL EXCLUSÃO --}}
        @include('layouts.partials.modalExcluir')

@endsection
