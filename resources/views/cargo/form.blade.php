@extends('layouts.baseadm')
@section('contentadm')

<h1>Editar Cargo</h1>

<form action="{{ route('cargo.update', ['id'=>$cargo->id_cargo]) }}" method="post" enctype="multipart/form-data">
    @csrf

    <label for="cargo">Cargo</label>
    <input class="form-control" type="text" name="cargo" id="cargo" value="{{ $cargo && $cargo->cargo != '' ? $cargo->cargo : old(cargo)}}">

    <br>
    <input class="btn btn-primary" type="submit" value="Atualizar">
</form>

@endsection

{{-- Script --}}
@section('scripts')

@endsection
