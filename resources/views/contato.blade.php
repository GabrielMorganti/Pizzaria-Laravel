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

<!-- CONTEUDO -->
<div class="container">

    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-arrow-up"></i></button>
    <div class="row mt-5"></div>

    <div class="row salao mt-5">
        <div class="col-md-6">
            <img class="teste img-fluid" src="{{ url('img/salao.png') }}" alt="">
            <h3 class="text-center">🍕🎉 Aluguel do Salão da Nossa Pizzaria para Festas e Casamentos! 🎉🍕</h3>
            <p class="text-center">É com imensa alegria que anunciamos uma novidade especial em nossa pizzaria! Agora
                você pode desfrutar do ambiente acolhedor e saboroso do nosso espaço para celebrar momentos
                inesquecíveis. Estamos disponibilizando o aluguel do nosso lindo salão para festas, casamentos e
                diversos tipos de eventos, com buffet incluso.
                para mais informações utilize o formulário ao lado</p>
        </div>

        <div class="col-md-6">
            <H1><i class="fa-solid fa-address-card mb-5"></i> CONTATO</H1>
            <?php
                        if(isset($_GET['ok'])){
                        ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Mensagem enviada com sucesso.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
                        }//Fecha o if da mensagem de alerta
                    ?>

            <form action="?" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <label for="nome" class="form-label"><strong>Nome</strong></label>
                        <input class="form-control" type="text" name="nome" id="nome"
                            placeholder="Nome Completo" required>
                    </div>
                    <div class="col-md-6">
                        <label for="telefone" class="form-label"><strong>Telefone</strong></label>
                        <input class="form-control" type="tel" name="telefone" id="telefone"
                            placeholder="Ex.: 11 98226-3443" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label mt-2"><strong>E-mail</strong></label>
                        <input class="form-control" type="email" name="email" id="email">
                    </div>
                    <div class="col-md-6">
                        <label for="anexo" class="form-label mt-2"><strong>Anexo</strong></label>
                        <input class="form-control" type="file" name="anexo" id="anexo">
                    </div>
                    <div class="col-12">
                        <label for="conteudo" class="form-label mt-2"><strong>Conteúdo</strong></label>
                        <textarea class="form-control" name="conteudo" id="conteudo"></textarea>
                    </div>
                    <div class="col-md-2 mt-3">
                        <button type="submit" class="btn btn-dark mb-5 mt-1 btn-lg" name="btnEnviar" id="btnEviar"
                            value="Enviar" style="float:left;">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- MAPA -->


    <h1 class="mt-5">NOSSA UNIDADE:</h1>
    <p><strong>Endereço:</strong> Av. Ramiro Colleoni, 110 - Centro, Santo André - SP, 09040-160</p>
    <script src='http://maps.google.com/maps/api/js?key=AIzaSyDv7YRz1WWPhkr6aim8wEm4WDPBdk81z54'></script>
    <div class="col-md-12 mb-5">
        <div style='overflow:hidden;height:380px;width:100%;color: #0095eb'>
            <div id='gmap_canvas' style='height:380px;width:100%;'></div>
            <style>
                #gmap_canvas img {
                    max-width: none !important;
                    background: none !important
                }

                .gm-ui-hover-effect {
                    display: none !important;
                }
            </style>
        </div>

    </div>

    <!-- MAPA -->

    <!-- /CONTEUDO -->

</div>

</body>

@section('scripts3')
@endsection

@section('scripts2')
@endsection

@section('scripts')
@endsection
