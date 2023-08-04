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
                                        <a class="nav-link" href="http://127.0.0.1:8000/produtos/cardapio/3">Cardápio</a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a class="nav-link" href="http://127.0.0.1:8000/montesuapizza">Monte Sua
                                            Pizza</a>
                                    </li> --}}
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
                                    <a class="nav-link dropdown-toggle" href=""
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <h2>Cardápio</h2>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="http://127.0.0.1:8000/produtos/cardapio/3">Entradas</a>
                                        </li>
                                        <li><a class="dropdown-item" href="http://127.0.0.1:8000/produtos/cardapio/5">Pizzas</a>
                                        </li>
                                        <li><a class="dropdown-item" href="http://127.0.0.1:8000/produtos/cardapio/7">Bebidas</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="http://127.0.0.1:8000/produtos/cardapio/11">Sobremesas</a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="http://127.0.0.1:8000/montesuapizza">
                                        <h2>Monte Sua Pizza</h2>
                                    </a>
                                </li> --}}
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
        <img src="{{ url('img/'.rand(1,7).'.png') }}" alt="">
    </div>
</div>
{{-- /BANNER --}}

<!-- CONTEUDO -->
<div class="container-fluid mt-5 ">

    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-arrow-up"></i></button>
    <div class="row mt-5"></div>

    <div class="row">
        <div class="col-md-1">

        </div>
        <div class="col-md-5">
            <h2 class="text-center font2">Nossa História</h2>
            <p class="text-center">✻</p>
            <p class="font2 premio">Nossa história começou em uma simples rodinha de amigos, um grupo diversificado de amantes
                de pizza que acreditavam que a felicidade está em uma fatia quentinha e saborosa.
                Tudo começou em uma noite agradável, quando estávamos reunidos em torno de uma mesa,
                compartilhando risadas e histórias enquanto saboreávamos algumas das melhores pizzas da cidade.
                Foi nesse momento que surgiu a ideia de abrir nossa própria pizzaria, um espaço onde pudéssemos
                oferecer aos outros a mesma experiência deliciosa que tínhamos entre amigos.
                Movidos pela nossa devoção à gastronomia e pela crença de que boas amizades
                são a essência da vida, decidimos tornar esse sonho uma realidade.</p>
        </div>

        <div class="col-md-3 text-end mt-5 d-none d-md-block d-xl-block">
            <img class="img-fluid" src="{{ url('img/sobrenos.png')}}" alt="">
        </div>

        <div class="col-md-3 text-start mt-5 d-none d-md-block d-xl-block">
            <img class="img-fluid" src="{{ url('img/sobrenos2.png')}}" alt="">
        </div>

        <div class="col-md-3 text-center mt-5 d-block d-md-none">
            <img class="img-fluid" src="{{ url('img/sobrenos7.png')}}" alt="">
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-3 text-end mt-5 d-none d-md-block d-xl-block">
            <img class="img-fluid" src="{{ url('img/sobrenos3.png')}}" alt="">
        </div>

        <div class="col-md-3 text-start mt-5 d-none d-md-block d-xl-block">
            <img class="img-fluid" src="{{ url('img/sobrenos4.png')}}" alt="">
        </div>

        <div class="col-md-5">
            <h2 class="text-center font2">Nossa Gastronomia</h2>
            <p class="text-center">✻</p>
            <p class="font2 premio">Cada um de nós contribuiu com seus talentos únicos: alguns com habilidades culinárias
                excepcionais, outros com uma visão inovadora de negócios e, é claro, todos com um paladar apurado.
                Assim, nasceu a Bella-Pizzaria, uma casa de tradição familiar e receitas secretas que conquistam
                paladares há gerações. Nossos ingredientes são selecionados cuidadosamente, priorizando a qualidade
                e o sabor genuíno. Nossas massas são preparadas com o carinho e a técnica que apenas uma verdadeira
                pizzaria artesanal pode oferecer. Junte-se a nós nessa jornada saborosa e venha experimentar o
                amor e a dedicação que colocamos em cada fatia da Bella-Pizzaria. Estamos ansiosos para recebê-lo
                 e criar momentos inesquecíveis em torno da melhor pizza da cidade!"</p>
        </div>

        <div class="col-md-3 text-center mt-5 d-block d-md-none">
            <img class="img-fluid" src="{{ url('img/sobrenos8.png')}}" alt="">
        </div>

    </div>

    <div class="row mt-5">
        <div class="col-md-1">

        </div>
        <div class="col-md-5">
            <h2 class="text-center font2">Nossa Casa</h2>
            <p class="text-center">✻</p>
            <p class="font2 premio">Mas, mais do que apenas um lugar para comer pizza, a Bella-Pizzaria é um espaço acolhedor
                e alegre, onde cada cliente é recebido com um sorriso caloroso e tratado como um amigo de longa
                data. Nossa equipe é apaixonada pelo que faz e está sempre pronta para ajudá-lo a encontrar a
                pizza perfeita para cada ocasião. Na Bella-Pizzaria, acreditamos que cada pizza conta uma
                história, e estamos ansiosos para sermos parte das suas melhores lembranças. Seja para uma
                reunião em família, uma celebração especial ou apenas uma noite descontraída entre amigos,
                nossas pizzas estão prontas para levar até você a magia de sabores autênticos e aconchegantes.</p>
        </div>

        <div class="col-md-3 text-end mt-5 d-none d-md-block d-xl-block">
            <img class="img-fluid" src="{{ url('img/sobrenos10.png')}}" alt="">
        </div>

        <div class="col-md-3 text-start mt-5 d-none d-md-block d-xl-block">
            <img class="img-fluid" src="{{ url('img/sobrenos11.png')}}" alt="">
        </div>

        <div class="col-md-3 text-center mt-5 d-block d-md-none">
            <img class="img-fluid" src="{{ url('img/sobrenos12.png')}}" alt="">
        </div>
    </div>




</div>
<!-- /CONTEUDO -->

</body>

@section('scripts2')
@endsection

@section('scripts')
@endsection
