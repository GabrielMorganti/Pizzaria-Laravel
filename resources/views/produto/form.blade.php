@extends('layouts.baseadm')
@section('contentadm')

<h1>
    {{
        ($produto) ? 'Editar Produto' : 'Cadastrar Produto'
    }}
</h1>

<form action="{{ ($produto) ? route('produto.update') : route('produto.store')  }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-md-3">
            <label class="form-label" for="id">
                Tipo de produto
            </label>

            <div class="col-md-3">
                <label class="form-label" for="id_tipo_produto" >
                    tipo
                </label>


                {{-- <select class="form-select" name="id_tipo_produto" id="id_tipo_produto" required>
                    <option value="">Selecione</option>
                    @foreach ($tiposProduto::orderBy('tipo_produto')->get() as $item)
                        <option value="{{ $item->id_tipo_produto }}"
                            @if ($tipoProduto && $tipoProduto->id_tipo_produto == $item->id_tipo_produto)
                                selected="selected"
                            @endif
                        >
                            {!! $item->tipo !!}
                        </option>
                    @endforeach
                </select> --}}



                <select class="form-select" name="id_tipo_produto" id="id_tipo_produto" required>
                <option value="">Selecione</option>
                @dd($tiposProduto->orderBy('tipo')->get())
                @foreach ($tiposProduto::orderBy('tipo_produto') as $item)

                <option class="" value="{{ $item->id_tipo_produto }}"
                    @selected(
                        ($tiposProduto && $tiposProduto->id_tipo_produto == $item->id_tipo_produto)? true
                        :
                        false
                    )
                    >
                    {!! $item->tipo_produto !!}
                </option>
                @endforeach
            </select>
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
    @else
        <input class="btn btn-success" type="submit" value="Cadastrar Produto">
    @endif


</form>

@endsection

{{-- Script --}}
@section('scripts')

@endsection
