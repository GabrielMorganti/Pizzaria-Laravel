@extends('layouts.base')

{{-- HEADER --}}
<div class="container-fluid header">
    <div class="row background d-none d-md-block d-xl-block">
        <!-- Telefones -->
        <div class="flex-container d-none d-md-block d-xl-block">
            <div class="row contato-entrega">
                <div class="col-6 d-flex justify-content-start">
                    <p><i class="bi bi-telephone"></i> Contato para entrega: (11)98829-5583 | (11)92548-7734</p>
                </div>

                <div class="col-6 d-flex justify-content-end ">
                    <p><i class="bi bi-whatsapp"></i> WhatsApp: (11)99866-9082</p>
                </div>
            </div>
        </div>
        <!-- /Telefones -->

        <!-- Navbar -->
        <div class="row navbar">
            <div class="col-md-2">
                <div class="flex-container">
                    <a class="d-flex justify-content-md-center" href="http://127.0.0.1:8000"><img class=""
                            id="logo" src="{{ url('img/logo2.png')}}" alt=""></a>
                </div>
            </div>

            <div class="col-md-8 d-flex justify-content-md-center">
                <div class="flex-container">
                    <nav class=" navbar navbar-expand-lg w-100 p-3 h-100 d-inline-block" style="width: 100px">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav d-flex justify-content-end">
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="http://127.0.0.1:8000">Pagina
                                            Inicial <span class="sr-only">(Pagina Atual)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://127.0.0.1:8000/cardapio">Cardápio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://127.0.0.1:8000/montesuapizza">Monte Sua
                                            Pizza</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://127.0.0.1:8000/contato">Contato</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://127.0.0.1:8000/sobrenos">Sobre
                                            Nós</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="col-md-2 redes-sociais" id="sociais">
                <div class="flex-container">
                    <a class="icon rounded-circle border border-secondary d-flex align-items-center"
                        href="https://www.facebook.com" target="_blank">
                        <h4 class=""><i class="bi bi-facebook"></i></h4>
                    </a>
                    <a class="icon rounded-circle border border-secondary" href="https://www.instagram.com"
                        target="_blank">
                        <h4><i class="bi bi-instagram"></i></h4>
                    </a>
                    <a class="icon rounded-circle border border-secondary" href="https://www.twitter.com"
                        target="_blank">
                        <h4><i class="bi bi-whatsapp"></i></h4>
                    </a>
                </div>
            </div>
        </div>
        <!-- Navbar -->
    </div>

    <div class="row background col-sm-12 d-block d-md-none">
        <!-- Navbar -->
        <div class="row navbar-cell">
            <div class="col-md-12">
                <div class="flex-container">
                    <a class="mt-1" href="http://127.0.0.1:8000"><img class="" id="logo"
                            src="{{ url('img/logo2.png')}}" alt=""></a>

                    <a class="icon rounded-circle border border-secondary d-flex align-items-center"
                        href="https://www.facebook.com" target="_blank">
                        <h4 class=""><i class="bi bi-facebook"></i></h4>
                    </a>
                    <a class="icon rounded-circle border border-secondary" href="https://www.instagram.com"
                        target="_blank">
                        <h4><i class="bi bi-instagram"></i></h4>
                    </a>
                    <a class="icon rounded-circle border border-secondary" href="https://www.twitter.com"
                        target="_blank">
                        <h4><i class="bi bi-whatsapp"></i></h4>
                    </a>
                </div>
            </div>

            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand d-block d-md-none" href="#">MENU</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="http://127.0.0.1:8000">
                                        <h2>Pagina Inicial</h2><span class="sr-only">
                                            <h2>(Pagina Atual)</h2>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="http://127.0.0.1:8000/cardapio"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <h2>Cardápio</h2>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="http://127.0.0.1:8000/entradas">Entradas</a>
                                        </li>
                                        <li><a class="dropdown-item" href="http://127.0.0.1:8000/pizzas">Pizzas</a>
                                        </li>
                                        <li><a class="dropdown-item" href="http://127.0.0.1:8000/bebidas">Bebidas</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="http://127.0.0.1:8000/sobremesas">Sobremesas</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://127.0.0.1:8000/montesuapizza">
                                        <h2>Monte Sua Pizza</h2>
                                    </a>
                                </li>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://127.0.0.1:8000/contato">
                                        <h2>Contato</h2>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://127.0.0.1:8000/sobrenos">
                                        <h2>Sobre Nós</h2>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- /Navbar -->
    </div>
</div>

<div class="borda"></div>
{{-- /HEADER --}}

{{-- BANNER --}}
<div class="container-fluid banner ">
    <div class="row">
        <img src="{{ url('img/' . rand(1, 11) . '.png') }}" alt="">
    </div>
</div>
{{-- /BANNER --}}

<div class="container-fluid content">
    <div class="flex-container">
        <div class="row mt-5">
            <div class="col-md-4 text-center menufixo">
                <table class="table text-center">
                    <thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td>
                                <h1> <img src="img/icons8-rolling-pin-50.png" alt=""> CONHEÇA NOSSO CARDÁPIO
                                </h1>
                            </td>
                        </tr>
                        <tr>
                    </tbody>
                    </thead>
                </table>

                <div class="row mt-3"></div>

                <table class="table table-hover text-center">
                    <thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td><a href="http://127.0.0.1:8000/produtos/cardapio/3">
                                    <h1> <img src="{{ url('img/fritas.png') }}" width="7%"> ENTRADAS</h1>
                                </a>
                            </td>
                        </tr>
                        <tr>
                    </tbody>
                    </thead>
                </table>
                        <tr>
                            <div class="table-aguardo">
                                <input id="aguardando" type="checkbox">
                                <label for="aguardando" class="header"><h1 class="white"><img src="{{ url('img/icons8-pizza-80.png') }}" width="10%"> PIZZAS</h1></td></label>
                                 <table cellspacing="0">
                                    <tr>
                                       <td><a href="http://127.0.0.1:8000/produtos/cardapio/4"><h3 class="white">PIZZAS PREMIUM</h3></a></td>
                                    </tr>
                                    <tr>
                                       <td><a href="http://127.0.0.1:8000/produtos/cardapio/5"><h3 class="white"> PIZZAS TRADICIONAIS</h3></a></td>
                                    </tr>
                                    <tr>
                                       <td><a href="http://127.0.0.1:8000/produtos/cardapio/2"><h3 class="white"> PIZZAS DOCES</h3></a></td>
                                    </tr>
                                    <tr>
                                 </table>
                              </div>
                              <hr>
                        </tr>



                <table class="table table-hover text-center">
                    <thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td><a href="http://127.0.0.1:8000/bebidas">
                                    <h1><i class="bi bi-cup-straw fotinha"></i>BEBIDAS</h1>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    </thead>
                </table>

                <table class="table table-hover text-center">
                    <thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td><a href="http://127.0.0.1:8000/produtos/cardapio/11">
                                    <h1> <img src="{{ url('img/icons8-taça-de-sorvete-50.png') }}" width="8%"> SOBREMESAS</h1>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    </thead>
                </table>
            </div>

            <div class="col-md-8 mt-2">
                <h4 class="text-center">{{ $tiposProdutos->tipo }}</h4>
                @foreach ($produtos->get() as $produto)
                    <button onclick="topFunction()" id="myBtn" title="Go to top"><i
                            class="bi bi-arrow-up"></i></button>
                    <div class="row mt-5"></div>
                    <div class="container text-center">

                        <div class="row align-items-start">
                            <div class="col">
                                <img src="{{ url('storage/fotos/' . $produto->foto) }}" alt=""
                                    width="100%">
                            </div>
                            <div class="col">
                                <h3 class="text-start">{{$produto->nome}}</h3>
                                <h5 class="text-start">INGREDIENTES:</h5>
                                <p class="text-start">
                                    {{$produto->descricao}}
                                </p>
                            </div>
                            <div class="col">
                                <label class="form-label mt-2" for="id_categoria"><strong>Tamanhos*</strong></label>
                                <br>
                                <select class="form-select" id="id_tamanho" name="id_tamanho">
                                    <option value="" selected>Escolha o tamanho</option>
                                    @foreach ($produtosTamanho::orderBy('id_produto')->get() as $item)

                                    <option value="">{{$item->tamanho->tamanho}}</option>
                                    {{-- <option value="R$ 47.00">{{$produto->tamanhos->tamanho->tamanho}}</option> --}}
                                    @endforeach
                                </select>
                                <br>
                                <strong> Preço </strong><input disabled class="text-center border border-start-0"
                                    id="caixa1" style="width: 70px;" type="text" />
                                <div id="div_personalizar" style="visibility: hidden;"></div>
                                <br>
                            </div>
                        </div>
                        <hr>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

</body>


@section('scripts')
@endsection

@section('scripts3')
@endsection
