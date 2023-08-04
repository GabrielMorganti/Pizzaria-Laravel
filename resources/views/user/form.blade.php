@extends('layouts.baseadm')
@section('contentadm')

@include('layouts.partials.menu')

    <h1>
        <i class="fa-solid fa-pizza-slice"></i>

        @if ($user)
            Atualizar usuário
        @else
            Novo usuário
        @endif
    </h1>
    <form method="post"
        action="{{ $user ? route('user.update', ['id' => $user->id]) : route('user.store') }}"
        id="user-form" enctype="multipart/form-data" class="mt-6">
        @csrf

        {{-- Dados do user --}}
        <div class="card-deck">
            <div class="card border-dark mt-1">
                <div class="card-header">
                    <h5>
                        Dados do Usuário
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="id_cargo" class="form-label">Cargo*</label>
                            <select class="form-select" name="id_cargo" id="id_cargo" required>
                                <option value="">Selecione</option>
                                @foreach ($user::orderBy('id_cargo')->get() as $item)
                    <option class="" value="{{ $user->id_cargo }}"
                        @selected(
                            ($user && $user->id_cargo == $cargo->id_cargo)? true
                            :
                            false
                        )
                        >
                        {{$item->cargo}}
                    </option>
                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="nome" class="form-label">Nome*</label>
                            <input type="text" class="form-control" name="nome" id="nome"
                                value="{!! $user ? $user->nome : old('nome') !!}" placeholder="Ex.: José de Almeida" required>
                        </div>


                        <div class="col-md-6">
                            <label for="email">Email*</label>
                            <input class="form-control" type="text" name="email" id="email" value="{!! $user ? $user->email : old('email') !!}" placeholder="Ex.: Exemplo@exemplo.com" required>
                        </div>

                        {{-- <div class="col-12 mt-2">
                            <label for="observacoes" class="form-label">Observações</label>
                            <textarea name="observacoes" id="observacoes" class="form-control">{!! $user != null ? $user->observacoes : old('observacoes') !!}</textarea>
                        </div> --}}
                    </div>
                    <button class="btn btn-success mt-3 col-md-3 offset-md-9" type="submit"
                        data-loading-text="Salvando...">
                        <i class="fa fa-save"></i>
                        @if ($user)
                            Atualizar Usuário
                        @else
                            Cadastrar Usuário
                        @endif
                    </button>
                </div>
            </div>
        </div>
    </form>

@endsection

{{-- Script --}}
@section('scripts')

@endsection
