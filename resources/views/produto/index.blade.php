@extends('layouts.baseadm')
@section('contentadm')

<<<<<<< HEAD
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>


<h1>Produtos</h1>

<div class="row">
<div class="col-9 mt-3">
    <a href="{{route('produto.create')}}" class="btn btn-primary">
        Novo Produto
    </a>
</div>


<div class="col-3 mt-4">

<form action="{{ route('produto.storeTipo') }}" method="post" enctype="multipart/form-data">

     @csrf
        <label for="" class="">

            Criar novo tipo de produto


        <input type="text" class="form-control mb-2" name="tipo" id="tipo">

        </label>
        <input type="submit" class=" btn btn-primary" value="Criar">
        </div>

    </div>

</form>

<table class="table table-striped">
=======
<h1>
    <i class="fa-solid fa-pizza-slice"></i>
    Produtos -
    <a href="{{route('produto.create')}}" class="btn btn-primary">
        Novo Produto
    </a>
</h1>

<div class="container">
    <div class="row">
        <div class="col-12">
            <p>{{ $produtos->onEachSide(5)->links() }}
            </p>
        </div>
        <div class="col-3 mt-4">

            <form action="{{ route('produto.storeTipo') }}" method="post" enctype="multipart/form-data">

                 @csrf
                    <label for="" class="">

                        Criar novo tipo de produto


                    <input type="text" class="form-control mb-2" name="tipo" id="tipo">

                    </label>
                    <input type="submit" class=" btn btn-primary" value="Criar">

                </div>

            </form>
    </div>
</div>


{{-- Alerts --}}
@include('layouts.partials.alerts')
<table class="table table-striped table-hover">
>>>>>>> b46dbec83104d02ba668b8bcdc57142cadc5dca2
    <thead>
        <tr>
            <th class="col-2">Ações</th>
            <th class="col-1">ID</th>
            <th>Produto</th>
            <th>Observações</th>
            <th>Qtd Tamanhos</th>
<<<<<<< HEAD
            <th>Foto</th>
=======

>>>>>>> b46dbec83104d02ba668b8bcdc57142cadc5dca2
        </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $produto)
            <tr>
                <td>
                    <a class="btn btn-primary" href="{{ route('produto.edit', ['id' => $produto->id_produto]) }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <a class="btn btn-success" href="{{ route('produto.show', ['id' => $produto->id_produto]) }}">
                        <i class="fa-solid fa-eye"></i>
                    </a>

<<<<<<< HEAD
        <tr>
            <td>
                <a class="btn btn-success" href="{{ route('produto.edit', ['id'=>$produto->id_produto]) }}" ><i class="bi bi-pencil"  ></i></a>
                {{-- <a class="btn btn-primary" href="{{ route('produto.show', ['id'=>$produto->id_produto]) }}"><i class="bi bi-eye"></i></a> --}}
               <a class="btn btn-primary" href="{{ route('produto.show', ['id'=>$produto->id_produto]) }} " ><i class="bi bi-eye"></i></a>



               <a class="btn btn-warning" href="{{ route('produto.destroy', ['id'=>$produto->id_produto]) }}" onclick=" return confirm('tem certeza que deseja excluir?')" ><i class="bi bi-trash3"></i></a>


            </td>

            <td>{{$produto->id_produto}}</td>

            <td>{{$produto->nome}}</td>

            <td>{{ nl2br($produto->observacoes)}}</td>
            <td>{!! $produto->tamanhos()->count() !!}</td>

            <td>
                @if ($produto->foto)
                        <br>
                        <img src="{{ url('storage/' . $produto->foto) }}" class="img-thumbnail" width="250">
                        @endif
            </td>
        </tr>
=======
                    <button type="button" class="btn btn-danger ml-1" data-bs-toggle="modal"
                        data-bs-target="#modalExcluir"
                        data-identificacao="Nº {{ $produto->id_produto }} : {{ $produto->nome }}"
                        data-url="{!! route('produto.destroy', ['id' => $produto->id_produto]) !!}">
                        <span data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Excluir">
                            <i class="fas fa-trash"></i>
                        </span>
                    </button>
                    {{-- <a class="btn btn-danger" href="{{ route('produto.destroy', ['id' => $produto->id_produto]) }}">
                        <i class="fa-solid fa-trash-can"></i>
                    </a> --}}
                </td>
                <td>
                    {{ $produto->id_produto }}

                </td>
                <td>
                    {{ $produto->nome }}
                    @if ($produto->foto)
                    <br>
                    <img src="{{ url('storage/fotos/' . $produto->foto) }}" class="img-thumbnail" width="250">
                    @endif
                </td>
                <td>{{ nl2br($produto->observacoes) }}</td>
                <td>
                    {!! $produto->tamanhos()->count() !!}
                </td>
            </tr>
>>>>>>> b46dbec83104d02ba668b8bcdc57142cadc5dca2
        @endforeach
    </tbody>
</table>












    @parent
        {{-- MODAL EXCLUSÃO --}}
        @include('layouts.partials.modalExcluir')

@endsection
