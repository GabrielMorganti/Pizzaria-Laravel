@extends('layouts.baseadm')
@section('contentadm')
    <h1>
        {{ $clienteEndereco ? 'Editar Endereco' : 'Cadastrar Endereco' }}
    </h1>

    <form
        action="{{ $clienteEndereco ? route('cliente.updateEndereco', ['id' =>  $clienteEndereco->id_cliente_endereco]) : route('cliente.storeEndereco', ['id_cliente' =>  $cliente->id_cliente]) }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-4">
                <label class="form-label" for="endereco">
                    Endereco*
                </label>

                <input class="form-control" type="text" name="endereco" id="endereco"
                    value="{{ $clienteEndereco ? $clienteEndereco->endereco->endereco : old('endereco') }}" required>
            </div>

            <div class="col-md-2">
                <label class="form-label" for="numero">
                    Numero
                </label>

                <input class="form-control" type="number" name="numero" id="numero"
                    value="{{ $clienteEndereco ? $clienteEndereco->endereco->numero : old('numero') }}">
            </div>

            <div class="col-md-2">
                <label class="form-label" for="complemento">
                    Complemento
                </label>

                <input class="form-control" type="text" name="complemento" id="complemento"
                    value="{{ $clienteEndereco ? $clienteEndereco->endereco->complemento : old('complemento') }}">
            </div>

            <div class="col-md-4">
                <label class="form-label" for="bairro">
                    Bairro
                </label>

                <input class="form-control" type="text" name="bairro" id="bairro"
                    value="{{ $clienteEndereco ? $clienteEndereco->endereco->bairro : old('bairro') }}">
            </div>

            <div class="col-md-4 mt-3">
                <label class="form-label" for="cidade">
                    Cidade
                </label>

                <input class="form-control" type="text" name="cidade" id="cidade"
                    value="{{ $clienteEndereco ? $clienteEndereco->endereco->cidade : old('cidade') }}">
            </div>

            <div class="col-md-4 mt-3">
                <label class="form-label" for="uf">
                    uf
                </label>

                <input class="form-control" type="text" name="uf" id="uf"
                    value="{{ $clienteEndereco ? $clienteEndereco->endereco->uf : old('uf') }}">
            </div>

            <div class="col-md-4 mt-3">
                <label class="form-label" for="cep">
                    cep
                </label>

                <input class="form-control" type="text" name="cep" id="cep"
                    value="{{ $clienteEndereco ? $clienteEndereco->endereco->cep : old('cep') }}">
            </div>

            <div class="col-12 mt-3">
                <label class="form-label" for="observacoes">
                    Observações
                </label>

                <input class="form-control" type="text" name="observacoes" id="observacoes"
                    value="{{ $clienteEndereco ? $clienteEndereco->endereco->observacoes : old('observacoes') }}">
            </div>

        </div>
        <div class="mt-4"></div>

        @if ($clienteEndereco)
            <input class="btn btn-warning" type="submit" value="Atualizar Endereco">
        @else
            <input class="btn btn-success" type="submit" value="Cadastrar Endereco">
        @endif

    </form>
@endsection

{{-- Script --}}
@section('scripts')
@endsection
