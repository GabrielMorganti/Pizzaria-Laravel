@extends('layouts.baseadm')
@section('contentadm')

@include('layouts.partials.menu')

<<<<<<< HEAD
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
=======
    <h1>
        <i class="fa-solid fa-pizza-slice"></i>

        @if ($produto)
            Atualizar produto
        @else
            Novo produto
        @endif
    </h1>
    <form method="post"
        action="{{ $produto ? route('produto.update', ['id' => $produto->id_produto]) : route('produto.store') }}"
        id="produto-form" enctype="multipart/form-data" class="mt-6">
        @csrf

        {{-- Dados do Produto --}}
        <div class="card-deck">
            <div class="card border-dark mt-1">
                <div class="card-header">
                    <h5>
                        Dados do Produto
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="id_tipo_produto" class="form-label">Tipo Produto*</label>
                            <select class="form-select" name="id_tipo_produto" id="id_tipo_produto" required>
                                <option value="">Selecione</option>
                                @foreach ($tiposProduto::orderBy('tipo')->get() as $item)
                                    <option value="{{ $item->id_tipo_produto }}"
                                        @selected(old('id_tipo_produto') || ($produto && $produto->id_tipo_produto == $item->id_tipo_produto))>
                                        {{ $item->tipo}}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="nome" class="form-label">Nome*</label>
                            <input type="text" class="form-control" name="nome" id="nome"
                                value="{!! $produto ? $produto->nome : old('nome') !!}" placeholder="Ex.: Pizza de T94" required>
                        </div>
                        <div class="col-md-4">
                            <label for="foto" class="form-label">Foto</label>
                            <input class="form-control" type="file" name="foto" id="foto">
                        </div>

                        <div class="col-md-6">
                            <label for="descricao">Descrição</label>
                            <input class="form-control" type="text" name="descricao" id="descricao" value="{!! $produto ? $produto->descricao : old('descricao') !!}" placeholder="Ex.: Ingredientes do produto">
                        </div>

                        <div class="col-12 mt-2">
                            <label for="observacoes" class="form-label">Observações</label>
                            <textarea name="observacoes" id="observacoes" class="form-control">{!! $produto != null ? $produto->observacoes : old('observacoes') !!}</textarea>
                        </div>
                    </div>
                    <button class="btn btn-success mt-3 col-md-3 offset-md-9" type="submit"
                        data-loading-text="Salvando...">
                        <i class="fa fa-save"></i>
                        @if ($produto)
                            Atualizar Produto
                        @else
                            Cadastrar Produto
                        @endif
                    </button>
                </div>
            </div>
        </div>
    </form>
>>>>>>> b46dbec83104d02ba668b8bcdc57142cadc5dca2

@endsection

{{-- Script --}}
@section('scripts')

@endsection
