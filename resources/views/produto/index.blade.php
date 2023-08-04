@extends('layouts.baseadm')
@section('contentadm')

@include('layouts.partials.menu')

<h1 class="mt-5">
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
    <thead>
        <tr>
            <th class="col-2">Ações</th>
            <th class="col-1">ID</th>
            <th>Produto</th>
            <th>Observações</th>
            <th>Qtd Tamanhos</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $produto)
            <tr>
                <td>
                    <a class="btn btn-primary" href="{{ route('produto.edit', ['id' => $produto->id_produto]) }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <br><br>
                    <a class="btn btn-success" href="{{ route('produto.show', ['id' => $produto->id_produto]) }}">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <br><br>
                    <form action="{{ route('produto.destroy',['id'=>$produto->id_produto])}}" method="post">
                        @csrf
                        @method('delete')
                        <button class=" btn btn-danger" onclick=" return confirm('tem certeza que deseja excluir?')" ><i class="fa-solid fa-trash-can"></i></button>
                        </form>

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
