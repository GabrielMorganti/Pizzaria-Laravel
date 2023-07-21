@extends('layouts.base')
@section('content')

<h1>Editar Produto</h1>

<form action="{{ route('cargo.update', ['id'=>$produto->id_produto]) }}" method="post" enctype="multipart/form-data">
    @csrf

    <label for="cargo">Cargo</label>
    <input class="form-control" type="text" name="cargo" id="cargo" value="{{ $produto && $produto->nome != '' ? $cargo->cargo : old(cargo)}}">

    <br>
    <input class="btn btn-primary" type="submit" value="Atualizar">
</form>

@endsection

{{-- Script --}}
@section('scripts')

@endsection
