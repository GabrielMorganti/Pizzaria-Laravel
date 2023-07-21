@extends('layouts.base')
@section('content')
    {{-- Menu --}}
    @include('produto.partials.menu')
    {{-- /Menu --}}

    <div class="mt-3"></div>
    <h1> Produto: {{ $produto->nome }}</h1>
    <h2> Tipo: {{ $produto->tipo->tipo }}</h2>
    <p> Descrição: {!! nl2br($produto->descricao) !!}</p>

    @if ($produto->observacoes)
        <p class="alert alert-info">Observações: {!! nl2br($produto->observacoes) !!}</p>
    @endif

    <h6> <a class="btn btn-primary" href="{{ route('produto.createTamanho', ['id_produto' => $produto->id_produto]) }}">
            Adicionar Novo Tamanho
        </a>
    </h6>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Ações</th>
                <th>Tamanho</th>
                <th>Preço</th>
                <th>Obs.:</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($produto->tamanhos()->get() as $item)
                <tr>
                    <td>
                        <a class="btn btn-success" href="#"><i class="bi bi-pencil"></i></a>
                    </td>

                    <td>
                        {!! $item->tamanho->tamanho !!}
                    </td>
                    <td>
                        {{ $item->preco }}
                    </td>
                    <td>
                        {!! nl2br($item->observacoes) !!}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="2">
                        Nenhum tamanho definido para esse produto
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection

{{-- Script --}}
@section('scripts')
@endsection
