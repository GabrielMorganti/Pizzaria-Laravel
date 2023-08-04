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
                                        <li><a class="dropdown-item" href="http://127.0.0.1:8000/produtos/cardapio/4">Pizzas</a>
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
        <img src="{{ url('img/'.rand(1,11).'.png') }}" alt="">
    </div>
</div>
{{-- /BANNER --}}

<!-- CONTEUDO -->
<div class="container-fluid mt-5 ">

    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-arrow-up"></i></button>
    <div class="row mt-5"></div>

    <div class="row mt-5 promocao">
        <h1 class="font2">
                Confira nossas promoções imperdíveis!
        </h1>
        <div class="d-none d-md-block d-xl-block">
            <div class="flex-container">
                <div class="col-md-3 promo"> <a class="d-flex justify-content-center" href=""><img
                            width="360px" class="rounded img-fluid" src="{{ url('img/promocao2.png') }}"
                            alt="Promoção2"></a></div>
                <div class="col-md-3 promo"> <a class="d-flex justify-content-center" href=""><img
                            width="360px" class="rounded img-fluid" src="{{ url('img/promocao.png') }}"
                            alt="Promoção"></a></div>
                <div class="col-md-3 promo"> <a class="d-flex justify-content-center" href=""><img
                            width="360px" class="rounded img-fluid" src="{{ url('img/promocao5.png') }}"
                            alt="Promoção5"></a></div>
                <div class="col-md-3 promo"> <a class="d-flex justify-content-center" href=""><img
                            width="360px" class="rounded img-fluid" src="{{ url('img/promocao4.png') }}"
                            alt="Promoção4"></a></div>
            </div>
        </div>

        <div class="d-block d-md-none">
            <div class="flex-container">
                <div class="col-md-3 me-1 promo"> <a class="d-flex justify-content-center" href=""><img
                            width="360px" class="rounded img-fluid" src="{{ url('img/promocao2.png') }}"
                            alt="Promoção2"></a></div>
                <div class="col-md-3 me-1 promo"> <a class="d-flex justify-content-center" href=""><img
                            width="360px" class="rounded img-fluid" src="{{ url('img/promocao.png') }}"
                            alt="Promoção"></a></div>
            </div>

            <div class="flex-container mt-3">
                <div class="col-md-3 me-1 promo"> <a class="d-flex justify-content-center" href=""><img
                            width="360px" class="rounded img-fluid" src="{{ url('img/promocao5.png') }}"
                            alt="Promoção5"></a></div>
                <div class="col-md-3 me-1 promo"> <a class="d-flex justify-content-center" href=""><img
                            width="360px" class="rounded img-fluid" src="{{ url('img/promocao4.png') }}"
                            alt="Promoção4"></a></div>
            </div>
        </div>

        <span id="tresPontos"></span><span id="mostrarMais">
            <div class="d-none d-md-block d-xl-block mt-3">
                <div class="flex-container">
                    <div class="col-md-3 promo"> <a class="d-flex justify-content-center" href=""><img
                                width="360px" class="rounded img-fluid" src="{{ url('img/promocao1.png') }}"
                                alt="Promoção2"></a></div>
                    <div class="col-md-3 promo"> <a class="d-flex justify-content-center" href=""><img
                                width="360px" class="rounded img-fluid" src="{{ url('img/promocao6.png') }}"
                                alt="Promoção"></a></div>
                    <div class="col-md-3 promo"> <a class="d-flex justify-content-center" href=""><img
                                width="360px" class="rounded img-fluid" src="{{ url('img/promocao3.png') }}"
                                alt="Promoção5"></a></div>
                    <div class="col-md-3 promo"> <a class="d-flex justify-content-center" href=""><img
                                width="360px" class="rounded img-fluid" src="{{ url('img/promocao7.png') }}"
                                alt="Promoção4"></a></div>
                </div>
            </div>

            <div class="d-block d-md-none">
                <div class="flex-container mt-3">
                    <div class="col-md-3 me-1 promo"> <a class="d-flex justify-content-center" href=""><img
                                width="360px" class="rounded img-fluid" src="{{ url('img/promocao1.png') }}"
                                alt="Promoção2"></a></div>
                    <div class="col-md-3 me-1 promo"> <a class="d-flex justify-content-center" href=""><img
                                width="360px" class="rounded img-fluid" src="{{ url('img/promocao6.png') }}"
                                alt="Promoção"></a></div>
                </div>
                <div class="flex-container mt-3">
                    <div class="col-md-3 me-1 promo"> <a class="d-flex justify-content-center" href=""><img
                                width="360px" class="rounded img-fluid" src="{{ url('img/promocao3.png') }}"
                                alt="Promoção5"></a></div>
                    <div class="col-md-3 me-1 promo"> <a class="d-flex justify-content-center" href=""><img
                                width="360px" class="rounded img-fluid" src="{{ url('img/promocao7.png') }}"
                                alt="Promoção4"></a></div>
                </div>
            </div>
        </span>

        <div class="col-md-3">
            <button onclick="leiaMais()" id="btnLeiaMais" class="btn btnLeiaMais mt-4 botao">Ver Mais</button>
        </div>

    </div>


    <div class="row mt-5 promocao">
        <h1 class="font2">
            Confira nosso Cardápio!
        </h1>
        <div class="d-none d-md-block d-xl-block">
            <div class="flex-container">
                <div class="col-md-3 me-2 promo"> <a class="d-flex justify-content-center" href="http://127.0.0.1:8000/produtos/cardapio/3"><img width="360px"
                            class="rounded img-fluid" src="{{ url('img/batata2.png') }}" alt="Promoção2"></a></div>
                <div class="col-md-3 me-2 promo"> <a class="d-flex justify-content-center" href="http://127.0.0.1:8000/produtos/cardapio/4"><img width="360px"
                            class="rounded img-fluid" src="{{ url('img/pastel2.png') }}" alt="Promoção"></a></div>
                <div class="col-md-3 me-2 promo"> <a class="d-flex justify-content-center" href="http://127.0.0.1:8000/produtos/cardapio/5"><img width="360px"
                            class="rounded img-fluid" src="{{ url('img/portuguesa2.png') }}" alt="Promoção5"></a></div>
                <div class="col-md-3 me-2 promo"> <a class="d-flex justify-content-center" href="http://127.0.0.1:8000/produtos/cardapio/11"><img width="360px"
                            class="rounded img-fluid" src="{{ url('img/petit2.png') }}" alt="Promoção4"></a></div>
            </div>
        </div>

        <div class="d-block d-md-none">
            <div class="flex-container">
                <div class="col-md-3 me-2 promo">
                    <a class="" href="http://127.0.0.1:8000/produtos/cardapio/3"><img
                    class="rounded img-fluid" src="{{ url('img/batata2.png') }}" alt="Promoção2"></a>
                </div>
                <div class="col-md-3 me-2 promo">
                    <a class="" href="http://127.0.0.1:8000/produtos/cardapio/4"><img
                    class="rounded img-fluid" src="{{ url('img/pastel2.png') }}" alt="Promoção"></a>
                </div>
            </div>
            <div class="flex-container mt-3">
                <div class="col-md-3 me-2 promo">
                    <a class="" href="http://127.0.0.1:8000/produtos/cardapio/5"><img
                    class="rounded img-fluid" src="{{ url('img/portuguesa2.png') }}" alt="Promoção5"></a>
                </div>

                <div class="col-md-3 me-2 promo">
                    <a class="" href="http://127.0.0.1:8000/produtos/cardapio/11"><img
                    class="rounded img-fluid" src="{{ url('img/petit2.png') }}" alt="Promoção4"></a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <a class="btn mt-4 botao" href="http://127.0.0.1:8000/produtos/cardapio/5">Ver Mais</a>
        </div>
    </div>

    <div class="row mt-5">
        <h1 class="font2">Entrega e Retirada</h1>

        <h3 class="mt-3 font2"><span><i class="bi bi-bicycle"></span></i>Entrega 60 min </h3>
        <h3 class="mt-3 font2"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tools-kitchen" width="30" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M4 3h8l-1 9h-6z" />
            <path d="M7 18h2v3h-2z" />
            <path d="M20 3v12h-5c-.023 -3.681 .184 -7.406 5 -12z" />
            <path d="M20 15v6h-1v-3" />
            <path d="M8 12l0 6" />
          </svg>Retirada 35 Min</h3>
    </div>
</div>


<!-- aaa -->
<div class="container-fluid backgroundimg">

    <div class="row mt-5 ">
        <div class="col-md-6">
            <img src="{{ url('img/pizzaria.png') }}" alt="" class=" img-fluid mt-5 pizzaria">
        </div>

        <div class="col-md-6 mt-3 boasvindas">
            <h1 class="mt-5 p-3 font2"> Bem-vindo à Bella-Pizzaria!</h1>

            <p class=" p-3  font2">
                Somos uma pizzaria apaixonada por oferecer as melhores experiências gastronômicas para os amantes da
                pizza no Brasil.
                Nossas raízes estão profundamente enraizadas na tradição italiana,
                e estamos comprometidos em trazer um toque autêntico e saboroso para cada pizza que sai de nossa
                cozinha.

                Nossa história começou há mais de uma década, com a missão de fornecer às famílias,
                amigos e comunidades uma opção deliciosa para compartilhar momentos especiais. Desde então,
                temos crescido e prosperado, estabelecendo várias lojas em todo o Brasil.
                É com orgulho que nos tornamos uma parte valiosa da cultura culinária local.
                Ganhamos o prêmio de melhor pizza da América Latina.
            </p>

            <p class=" p-3 font2">
                O que nos diferencia são nosso ingredientes frescos e selecionados,
                receitas tradicionais italianas e a diversidade de sabores.
                A experiência do cliente é muito importante para nós, prezamos a qualidade do atendimento e o conforto
                que o cliente tem com o ambiente.
                Nossa pizzaria tambem apoia a sustentabilidade, prezando o bem estar da nossa comunidade, clientes e o
                meio ambiente.
            </p>
        </div>
    </div>

    <div class="row mt-5">

        <div class="col-md-12 premios">
            <h2 class="text-center font2">🍕🏆 Orgulhosamente Premiada pelo Guia Michelin! 🏆🍕</h2>

            <p class="mt-2 text-center font2 premio">É com imensa alegria que anunciamos que a nossa pizzaria foi agraciada com o
                prestigioso Prêmio Michelin não apenas uma vez, mas duas vezes consecutivas! Em 2022 e novamente em
                2023, fomos reconhecidos pelo Guia Michelin como uma das melhores pizzarias do mundo.
                A conquista do cobiçado prêmio é o resultado do incansável trabalho em equipe, da dedicação apaixonada à
                arte da pizza e do compromisso constante em oferecer a você, nosso cliente querido, uma experiência
                gastronômica única e inesquecível.</p>
        </div>

        <div class="col-md-6 d-flex justify-content-center">
            <img width="80%" class="img-fluid mt-2" src="{{ url('img/premio.png') }}" alt="">
        </div>

        <div class="col-md-6 d-flex justify-content-center">
            <img width="80%" class="img-fluid mt-2" src="{{ url('img/premio2.png') }}" alt="">
        </div>

        <div class="row mt-5"></div>
    </div>

</div>
<div class="container-fluid">

    <div class="row mt-5 promocao mb-5">
        <h2 class="">
            Avaliação dos Clientes:
        </h2>
        <div class="d-none d-md-block d-xl-block">
            <div class="flex-container">
                <div class="col-md-3 me-2 promo"> <a class="d-flex justify-content-center" href="http://127.0.0.1:8000/entradas"><img width="360px"
                            class="rounded img-fluid" src="{{ url('img/avaliacao1.png') }}" alt="Promoção2"></a></div>
                <div class="col-md-3 me-2 promo"> <a class="d-flex justify-content-center" href="http://127.0.0.1:8000/pizzas"><img width="360px"
                            class="rounded img-fluid" src="{{ url('img/avaliacao2.png') }}" alt="Promoção"></a></div>
                <div class="col-md-3 me-2 promo"> <a class="d-flex justify-content-center" href="http://127.0.0.1:8000/pizzas"><img width="360px"
                            class="rounded img-fluid" src="{{ url('img/avaliacao3.png') }}" alt="Promoção5"></a></div>
                <div class="col-md-3 me-2 promo"> <a class="d-flex justify-content-center" href="http://127.0.0.1:8000/sobremesas"><img width="360px"
                            class="rounded img-fluid" src="{{ url('img/avaliacao4.png') }}" alt="Promoção4"></a></div>
            </div>
        </div>

        <div class="d-block d-md-none">
            <div class="flex-container">
                <div class="col-md-3 me-2 promo">
                    <a class="" href="http://127.0.0.1:8000/entradas"><img
                    class="rounded img-fluid" src="{{ url('img/avaliacao1.png') }}" alt="Promoção2"></a>
                </div>
                <div class="col-md-3 me-2 promo">
                    <a class="" href="http://127.0.0.1:8000/pizzas"><img
                    class="rounded img-fluid" src="{{ url('img/avaliacao2.png') }}" alt="Promoção"></a>
                </div>
            </div>
            <div class="flex-container mt-3">
                <div class="col-md-3 me-2 promo">
                    <a class="" href="http://127.0.0.1:8000/pizzas"><img
                    class="rounded img-fluid" src="{{ url('img/avaliacao3.png') }}" alt="Promoção5"></a>
                </div>

                <div class="col-md-3 me-2 promo">
                    <a class="" href="http://127.0.0.1:8000/sobremesas"><img
                    class="rounded img-fluid" src="{{ url('img/avaliacao4.png') }}" alt="Promoção4"></a>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!-- /CONTEUDO -->

</body>

@section('scripts2')
@endsection

@section('scripts')
@endsection
