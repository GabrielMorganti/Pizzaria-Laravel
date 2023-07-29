@extends('layouts.baseadm')
@section('contentadm')

<h1>
    {{
        ($cliente) ? 'Editar Cliente' : 'Cadastrar Cliente'
    }}
</h1>

<form action="{{ ($cliente) ? route('cliente.update') : route('')  }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-md-3">
            <label class="form-label" for="id_tamanho">
                Tamanho*
            </label>

            <select class="form-select" name="id_tamanho" id="id_tamanho" required>
                <option value="">Selecione</option>
                @foreach ($cliente::orderBy('nome')->get() as $item)

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
