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
            <label class="form-label" for="id_tipo_produto">
                Tipo de produto
            </label>

            <select class="form-select" name="id_tipo_produto" id="id_tipo_produto" required>
                <option value="">Selecione</option>
                @foreach ($produto::orderBy('id')->get() as $item)

                @endforeach
            </select>
        </div>

        <div class="col-md-3">
            <label class="form-label" for="preco" >
                Preço
            </label>
            <input class="form-control" type="number" name="preco" id="preco" step="0.01" min="0" value="" required>
        </div>

        <div class="col-12 mt-3">
            <label class="form-label" for="observacoes">
                Observações
            </label>
            <textarea class="form-control" name="observacoes" id="observacoes"></textarea>
        </div>

    </div>
    <div class="mt-4"></div>

    @if ($cliente)
        <input class="btn btn-warning" type="submit" value="Atualizar Tamanho Produto">
    @else
        <input class="btn btn-success" type="submit" value="Cadastrar Tamanho Produto">
    @endif

</form>

@endsection

{{-- Script --}}
@section('scripts')

@endsection
