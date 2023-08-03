@extends('layouts.baseadm')
@section('contentadm')

<h1>Clientes</h1>
<h6>
    <a class="btn btn-primary" href="{{ route('cliente.create')}}">Cadastrar novo Cliente</a>
</h6>
 {{-- <p>{{ $clientes->get()->onEachSide(5)->links() }}</p> --}}

<table class="table table-striped">
    <thead>
        <tr>
            <th>Ações</th>
            <th>ID</th>
            <th>Nome</th>
            <th>DDD Celular</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes->get() as $cliente )

        <tr>
            <td>
                <a class="btn btn-success" href="{{route('cliente.edit', ['id_cliente'=>$cliente->id_cliente])}}"><i class="bi bi-pencil"></i></a>
                <a class="btn btn-primary" href="{{ route('cliente.show', ['id'=>$cliente->id_cliente])}}"><i class="bi bi-eye"></i></a>

                <form action="{{ route('cliente.destroy',['id'=>$cliente->id_cliente])}}" method="post">
                    @csrf
                    @method('delete')
                    <button class=" btn btn-danger" onclick=" return confirm('tem certeza que deseja excluir?')" ><i class="fa-solid fa-trash-can"></i></button>
                    </form>

            </td>

            <td>{{$cliente->id_cliente}}</td>

            <td>{{$cliente->nome}}</td>

            <td>{{$cliente->ddd}}{{$cliente->celular}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection


{{-- Script --}}
@section('scripts')

@endsection
