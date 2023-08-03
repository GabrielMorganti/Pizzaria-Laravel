@extends('layouts.baseadm')
@section('contentadm')

<h1>
    {{
        ($produto) ? 'Editar Produto' : 'Cadastrar Produto'
    }}
</h1>

<form method="post"
action="{{ $produto ? route('produto.update', ['id_produto' => $produto->id_produto]) : route('produto.store') }}"
id="produto-form" enctype="multipart/form-data" class="mt-6">
    @csrf

    <div class="row">

<<<<<<< HEAD
=======
            <select class="form-select" name="id_tipo_produto" id="id_tipo_produto" required>
                <option value="">Selecione</option>
                @foreach ($produtos as $item)
>>>>>>> main

            <div class="col-md-3">
                <label class="form-label" for="id">
                    Tipo de produto
                </label>

                <select class="form-select" name="id_tipo_produto" id="id_tipo_produto" required>
                    <option value="">Selecione</option>

                    @foreach ($tiposProduto::orderBy('tipo')->get() as $item)

                    <option class="" value="{{ $item->id_tipo_produto }}"
                    @selected(
                        ($produto && $produto->id_tipo_produto == $item->id_tipo_produto)? true
                        :
                        false
                    )
                    >
                    {!! $item->tipo !!}


                </option>
                @endforeach
            </select>

        </div>

        <div class="col-md-3">
            <label class="form-label" for="nome" >
                Nome
            </label>
            <input class="form-control"  name="nome" id="nome" value="" required>
        </div>

        <div class="col-md-3">
            <label class="form-label" for="observacoes" >
                Observações
            </label>
            <input class="form-control"  name="observacoes" id="observacoes" value="">
        </div>

        <div class="col-md-4">
            <label for="foto" class="form-label">Foto</label>
            <input class="form-control" type="file" name="foto" id="foto">
        </div>

        <div class="col-12 mt-3">
            <label class="form-label" for="descricao">
                Descriçao
            </label>
            <textarea class="form-control" name="descricao" id="descricao"></textarea>
        </div>

    </div>
    <div class="mt-4"></div>

    @if ($produto)
        <input class="btn btn-warning" type="submit" value="Atualizar Produto">

        <a class="btn btn-warning" href="{{ route('produto.destroy') }}" onclick=" return confirm('tem certeza que deseja excluir?')" ><i class="bi bi-trash3"></i></a>
    @else
        <input class="btn btn-success" type="submit" value="Cadastrar Produto">
    @endif


</form>

@endsection

{{-- Script --}}
@section('scripts')

@endsection
