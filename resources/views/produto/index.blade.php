@extends('layouts.baseadm')
@section('contentadm')

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>


<h1>Produtos</h1>

<div class="row">
<div class="col-9 mt-3">
    <a href="{{route('produto.create')}}" class="btn btn-primary">
        Novo Produto
    </a>
</div>


<div class="col-3 mt-4">

<form action="{{ route('produto.storeTipo') }}" method="post" enctype="multipart/form-data">

     @csrf
        <label for="" class="">

            Criar novo tipo de produto


        <input type="text" class="form-control mb-2" name="tipo" id="tipo">

        </label>
        <input type="submit" class=" btn btn-primary" value="Criar">
        </div>

    </div>

</form>

<table class="table table-striped">
    <thead>
        <tr>
            <th class="col-2">Ações</th>
            <th class="col-1">ID</th>
            <th>Produto</th>
            <th>Observações</th>
            <th>Qtd Tamanhos</th>
            <th>Foto</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produtos->get() as $produto)

        <tr>
            <td>
                <a class="btn btn-success" href="{{ route('produto.edit', ['id'=>$produto->id_produto]) }}" ><i class="bi bi-pencil"  ></i></a>
                {{-- <a class="btn btn-primary" href="{{ route('produto.show', ['id'=>$produto->id_produto]) }}"><i class="bi bi-eye"></i></a> --}}
               <a class="btn btn-primary" href="{{ route('produto.show', ['id'=>$produto->id_produto]) }} " ><i class="bi bi-eye"></i></a>


                <form action="{{route('produto.destroy')}}" method="POST"></form>
               <a class="btn btn-warning" href="{{ route('produto.destroy', ['id'=>$produto->id_produto]) }}" onclick=" return confirm('tem certeza que deseja excluir?')" ><i class="bi bi-trash3"></i></a>


            </td>

            <td>{{$produto->id_produto}}</td>

            <td>{{$produto->nome}}</td>

            <td>{{ nl2br($produto->observacoes)}}</td>
            <td>{!! $produto->tamanhos()->count() !!}</td>

            <td>
                @if ($produto->foto)
                        <br>
                        <img src="{{ url('storage/' . $produto->foto) }}" class="img-thumbnail" width="250">
                        @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>












@endsection
