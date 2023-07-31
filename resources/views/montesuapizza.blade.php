
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
                            id="logo" src="img/logo2.png" alt=""></a>
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
                            src="img/logo2.png" alt=""></a>

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
        <img src="{{ url('img/'.rand(1,10).'.png') }}" alt="">
    </div>
</div>
{{-- /BANNER --}}

<div class="container-fluid content">
    <div class="flex-container">

    </div>


</div>

    </body>

    @section('scripts')
    @endsection
