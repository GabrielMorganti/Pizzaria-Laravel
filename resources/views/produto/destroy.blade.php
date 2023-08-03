f
@extends('layouts.baseadm')
@section('contentadm')
    {{-- Menu --}}
    @include('produto.partials.menu')
    {{-- /Menu --}}

    <div class="mt-3"></div>
    <h1> Produto: {{ $produto->nome }}</h1>
    <h2> Tipo: {{ $produto->tipo->tipo }}</h2>
    @if ($produto->foto)
    <p>
        <img src="{{ url('storage/' . $produto->foto) }}" class="img-thumbnail img-fluid" width="200">
    </p>

@endif
    <p> Descrição: {!! nl2br($produto->descricao) !!}</p>

    @if ($produto->observacoes)
        <p class="alert alert-info">Observações: {!! nl2br($produto->observacoes) !!}</p>
    @endif


    <form action="{{route('produto.destroy')}}" method="POST" class="form-control">

        <input class="btn btn-warning" type="submit" value="Excluir" onclick=" return confirm('tem certeza que deseja excluir?')" >


    </form>
        </tbody>
    </table>
@endsection

{{-- Script --}}
@section('scripts')
@endsection
