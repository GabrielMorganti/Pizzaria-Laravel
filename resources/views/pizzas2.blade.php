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
                            <td><a href="http://127.0.0.1:8000/entradas">
                                    <h1> <img src="img/fritas.png" width="7%"> ENTRADAS</h1>
                                </a></td>
                        </tr>
                        <tr>
                    </tbody>
                    </thead>
                </table>

                <table class="table table-hover text-center">
                    <thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td><a href="http://127.0.0.1:8000/pizzas">
                                    <h1 class="white"><img src="img/icons8-pizza-80.png" width="10%"> PIZZAS</h1>
                                </a></td>
                        </tr>
                    </tbody>
                    </thead>
                </table>

                <table class="table table-hover text-center">
                    <thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td><a href="http://127.0.0.1:8000/bebidas">
                                    <h1><i class="bi bi-cup-straw fotinha"></i>BEBIDAS</h1>
                                </a></td>
                        </tr>
                    </tbody>
                    </thead>
                </table>

                <table class="table table-hover text-center">
                    <thead>
                    <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td><a href="http://127.0.0.1:8000/sobremesas">
                                    <h1> <img src="img/icons8-taça-de-sorvete-50.png" width="8%"> SOBREMESAS</h1>
                                </a></td>
                        </tr>
                    </tbody>
                    </thead>
                </table>
            </div>

            <div class="col-md-8 text-center mt-3">
                <h4>OUTRAS PIZZAS</h4>

                <button onclick="topFunction()" id="myBtn" title="Go to top"><i
                        class="bi bi-arrow-up"></i></button>
                <div class="row mt-5"></div>

                <div class="container text-center">
                    <div class="row align-items-start">
                        <div class="col">
                            <img src="./img/portuguesa.jpg" alt="" width="80%">
                        </div>
                        <div class="col">
                            <h3 class="text-start">Pizza Portuguesa</h3>
                            <h5 class="text-start">INGREDIENTES:</h5>
                            <p class="text-start">
                                Molho de tomate, Milho, ervilha, calabresa moida, ovo e queijo muçarela
                            </p>
                            <button class="btn btn-success align-items-start" type="submit">
                                ADICIONAR AO CARRINHO
                            </button>
                        </div>
                        <div class="col">
                            <label class="form-label mt-2" for="id_categoria"><strong>Tamanhos*</strong></label>
                            <br>
                            <select class="form-select" id="selecao">
                                <option value="" selected>Escolha o tamanho</option>
                                <option value="R$ 47.00"> GRANDE</option>
                                <option value="R$ 25.00">MÉDIO</option>
                                <option value="R$ 15.00">BROTINHO</option>
                            </select>
                            <br>
                            <strong> Preço </strong><input disabled class="text-center border border-start-0"
                                id="caixa1" style="width: 70px;" type="text" />
                            <div id="div_personalizar" style="visibility: hidden;"></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="mt-3"></div>
                <hr>

                <div class="container text-center">

                    <div class="row align-items-start">
                        <div class="col">
                            <img src="./img/marguerita.jpg" alt="" width="80%">
                        </div>
                        <div class="col">
                            <h3 class="text-start">Pizza Marguerita</h3>
                            <h5 class="text-start">INGREDIENTES:</h5>
                            <p class="text-start">
                                Molho de tomate, muçarela, tomate, manjericão e orégano
                            </p>
                            <button class="btn btn-success align-items-start" type="submit">
                                ADICIONAR AO CARRINHO
                            </button>
                        </div>
                        <div class="col">

                            <div class="col">
                                <label class="form-label mt-2" for="id_categoria"><strong>Tamanhos*</strong></label>
                                <br>
                                <select class="form-select" id="selecao">
                                    <option value="" selected>Escolha o tamanho</option>
                                    <option value="R$ 47.00"> GRANDE</option>
                                    <option value="R$ 25.00">MÉDIO</option>
                                    <option value="R$ 15.00">BROTINHO</option>
                                </select>
                                <br>
                                <strong> Preço </strong><input disabled class="text-center border border-start-0"
                                    id="caixa1" style="width: 70px;" type="text" />
                                <div id="div_personalizar" style="visibility: hidden;"></div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3"></div>
                <hr>

                <div class="container text-center">

                    <div class="row align-items-start">
                        <div class="col">
                            <img src="./img/escarola.webp" alt="" width="80%">
                        </div>
                        <div class="col">
                            <h3 class="text-start">Pizza de Escarola com queijo vegano</h3>
                            <h5 class="text-start">INGREDIENTES:</h5>
                            <p class="text-start">
                                Molho de tomate, Escarola e quejo vegano
                            </p>
                            <button class="btn btn-success align-items-start" type="submit">
                                ADICIONAR AO CARRINHO
                            </button>
                        </div>
                        <div class="col">
                            <label class="form-label mt-2" for="id_categoria"><strong>Tamanhos*</strong></label>
                            <br>
                            <select class="form-select" id="selecao">
                                <option value="" selected>Escolha o tamanho</option>
                                <option value="R$ 47.00"> GRANDE</option>
                                <option value="R$ 25.00">MÉDIO</option>
                                <option value="R$ 15.00">BROTINHO</option>
                            </select>
                            <br>
                            <strong> Preço </strong><input disabled class="text-center border border-start-0"
                                id="caixa1" style="width: 70px;" type="text" />
                            <div id="div_personalizar" style="visibility: hidden;"></div>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="mt-3"></div>
                <hr>

                <div class="container text-center">

                    <div class="row align-items-start">
                        <div class="col">
                            <img src="./img/pizza-brocolis-caboclo.webp" alt="" width="80%">
                        </div>
                        <div class="col">
                            <h3 class="text-start">Pizza de Brocolis</h3>
                            <h5 class="text-start">INGREDIENTES:</h5>
                            <p class="text-start">
                                Molho de tomate, Brocolis, queijo muçarela e azeitona preta
                            </p>
                            <button class="btn btn-success align-items-start" type="submit">
                                ADICIONAR AO CARRINHO
                            </button>
                        </div>
                        <div class="col">
                            <label class="form-label mt-2" for="id_categoria"><strong>Tamanhos*</strong></label>
                            <br>
                            <select class="form-select" id="selecao">
                                <option value="" selected>Escolha o tamanho</option>
                                <option value="R$ 47.00"> GRANDE</option>
                                <option value="R$ 25.00">MÉDIO</option>
                                <option value="R$ 15.00">BROTINHO</option>
                            </select>
                            <br>
                            <strong> Preço </strong><input disabled class="text-center border border-start-0"
                                id="caixa1" style="width: 70px;" type="text" />
                            <div id="div_personalizar" style="visibility: hidden;"></div>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="mt-3"></div>
                <hr>

                <div class="container text-center">

                    <div class="row align-items-start">
                        <div class="col">
                            <img src="./img/lombinho.webp" alt="" width="80%">
                        </div>
                        <div class="col">
                            <h3 class="text-start">Pizza de Lombo canadense com Catupiry</h3>
                            <h5 class="text-start">INGREDIENTES:</h5>
                            <p class="text-start">
                                Molho de tomate, Lombo canadense em fatias e catupiry
                            </p>
                            <button class="btn btn-success align-items-start" type="submit">
                                ADICIONAR AO CARRINHO
                            </button>
                        </div>
                        <div class="col">
                            <label class="form-label mt-2" for="id_categoria"><strong>Tamanhos*</strong></label>
                            <br>
                            <select class="form-select" id="selecao">
                                <option value="" selected>Escolha o tamanho</option>
                                <option value="R$ 47.00"> GRANDE</option>
                                <option value="R$ 25.00">MÉDIO</option>
                                <option value="R$ 15.00">BROTINHO</option>
                            </select>
                            <br>
                            <strong> Preço </strong><input disabled class="text-center border border-start-0"
                                id="caixa1" style="width: 70px;" type="text" />
                            <div id="div_personalizar" style="visibility: hidden;"></div>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="mt-3"></div>
                <hr>

                <div class="container text-center">

                    <div class="row align-items-start">
                        <div class="col">
                            <img src="./img/rucula.jpg" alt="" width="80%">
                        </div>
                        <div class="col">
                            <h3 class="text-start">Pizza de Rucula com tomate seco</h3>
                            <h5 class="text-start">INGREDIENTES:</h5>
                            <p class="text-start">
                                Molho de tomate, Muçarela, rucula e tomante seco
                            </p>
                            <button class="btn btn-success align-items-start" type="submit">
                                ADICIONAR AO CARRINHO
                            </button>
                        </div>
                        <div class="col">
                            <label class="form-label mt-2" for="id_categoria"><strong>Tamanhos*</strong></label>
                            <br>
                            <select class="form-select" id="selecao">
                                <option value="" selected>Escolha o tamanho</option>
                                <option value="R$ 47.00"> GRANDE</option>
                                <option value="R$ 25.00">MÉDIO</option>
                                <option value="R$ 15.00">BROTINHO</option>
                            </select>
                            <br>
                            <strong> Preço </strong><input disabled class="text-center border border-start-0"
                                id="caixa1" style="width: 70px;" type="text" />
                            <div id="div_personalizar" style="visibility: hidden;"></div>
                            <br>
                        </div>
                    </div>
                </div>
                <hr>
                <br>

                <h4>PIZZAS DOCES</h4>

                <div class="row mt-5"></div>

                <div class="container text-center">
                    <div class="row align-items-start">
                        <div class="col">
                            <img src="./img/pizza-doce4.png" alt="" width="80%">
                        </div>
                        <div class="col">
                            <h3 class="text-start">Pizza Romeu e Julieta</h3>
                            <h5 class="text-start">INGREDIENTES:</h5>
                            <p class="text-start">
                                Queijo muçarela e Goiabada
                            </p>
                            <button class="btn btn-success align-items-start" type="submit">
                                ADICIONAR AO CARRINHO
                            </button>
                        </div>
                        <div class="col">
                            <label class="form-label mt-2" for="id_categoria"><strong>Tamanhos*</strong></label>
                            <br>
                            <select class="form-select" id="selecao">
                                <option value="" selected>Escolha o tamanho</option>
                                <option value="R$ 47.00"> GRANDE</option>
                                <option value="R$ 25.00">MÉDIO</option>
                                <option value="R$ 15.00">BROTINHO</option>
                            </select>
                            <br>
                            <strong> Preço </strong><input disabled class="text-center border border-start-0"
                                id="caixa1" style="width: 70px;" type="text" />
                            <div id="div_personalizar" style="visibility: hidden;"></div>
                            <br>
                        </div>
                    </div>
                </div>

                <div class="mt-3"></div>
                <hr>

                <div class="container text-center">

                    <div class="row align-items-start">
                        <div class="col">
                            <img src="./img/pizza-doce5.png" alt="" width="80%">
                        </div>
                        <div class="col">
                            <h3 class="text-start">Pizza de Brigadeiro com morgango</h3>
                            <h5 class="text-start">INGREDIENTES:</h5>
                            <p class="text-start">
                                Brigadeiro, Pedaços de morango e granulado
                            </p>
                            <button class="btn btn-success align-items-start" type="submit">
                                ADICIONAR AO CARRINHO
                            </button>
                        </div>
                        <div class="col">

                            <div class="col">
                                <label class="form-label mt-2" for="id_categoria"><strong>Tamanhos*</strong></label>
                                <br>
                                <select class="form-select" id="selecao">
                                    <option value="" selected>Escolha o tamanho</option>
                                    <option value="R$ 47.00"> GRANDE</option>
                                    <option value="R$ 25.00">MÉDIO</option>
                                    <option value="R$ 15.00">BROTINHO</option>
                                </select>
                                <br>
                                <strong> Preço </strong><input disabled class="text-center border border-start-0"
                                    id="caixa1" style="width: 70px;" type="text" />
                                <div id="div_personalizar" style="visibility: hidden;"></div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3"></div>
                <hr>

                <div class="container text-center">

                    <div class="row align-items-start">
                        <div class="col">
                            <img src="./img/pizza-doce3.png" alt="" width="80%">
                        </div>
                        <div class="col">
                            <h3 class="text-start">Pizza de Brigadeiro com m&m</h3>
                            <h5 class="text-start">INGREDIENTES:</h5>
                            <p class="text-start">
                                Brigadeiro e m&m
                            </p>
                            <button class="btn btn-success align-items-start" type="submit">
                                ADICIONAR AO CARRINHO
                            </button>
                        </div>
                        <div class="col">
                            <label class="form-label mt-2" for="id_categoria"><strong>Tamanhos*</strong></label>
                            <br>
                            <select class="form-select" id="selecao">
                                <option value="" selected>Escolha o tamanho</option>
                                <option value="R$ 47.00"> GRANDE</option>
                                <option value="R$ 25.00">MÉDIO</option>
                                <option value="R$ 15.00">BROTINHO</option>
                            </select>
                            <br>
                            <strong> Preço </strong><input disabled class="text-center border border-start-0"
                                id="caixa1" style="width: 70px;" type="text" />
                            <div id="div_personalizar" style="visibility: hidden;"></div>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="mt-3"></div>
                <hr>

                <div class="container text-center">

                    <div class="row align-items-start">
                        <div class="col">
                            <img src="./img/pizza-doce6.png" alt="" width="80%">
                        </div>
                        <div class="col">
                            <h3 class="text-start">Pizza de Chocolate ao leite e Chocolate branco</h3>
                            <h5 class="text-start">INGREDIENTES:</h5>
                            <p class="text-start">
                                Chocolate ao leite e Chocolate branco
                            </p>
                            <button class="btn btn-success align-items-start" type="submit">
                                ADICIONAR AO CARRINHO
                            </button>
                        </div>
                        <div class="col">
                            <label class="form-label mt-2" for="id_categoria"><strong>Tamanhos*</strong></label>
                            <br>
                            <select class="form-select" id="selecao">
                                <option value="" selected>Escolha o tamanho</option>
                                <option value="R$ 47.00"> GRANDE</option>
                                <option value="R$ 25.00">MÉDIO</option>
                                <option value="R$ 15.00">BROTINHO</option>
                            </select>
                            <br>
                            <strong> Preço </strong><input disabled class="text-center border border-start-0"
                                id="caixa1" style="width: 70px;" type="text" />
                            <div id="div_personalizar" style="visibility: hidden;"></div>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="mt-3"></div>
                <hr>

                <div class="container text-center">

                    <div class="row align-items-start">
                        <div class="col">
                            <img src="./img/pizza-doce1.png" alt="" width="80%">
                        </div>
                        <div class="col">
                            <h3 class="text-start">Pizza de Churros</h3>
                            <h5 class="text-start">INGREDIENTES:</h5>
                            <p class="text-start">
                                Doce de leite, açucar e canela em pó
                            </p>
                            <button class="btn btn-success align-items-start" type="submit">
                                ADICIONAR AO CARRINHO
                            </button>
                        </div>
                        <div class="col">
                            <label class="form-label mt-2" for="id_categoria"><strong>Tamanhos*</strong></label>
                            <br>
                            <select class="form-select" id="selecao">
                                <option value="" selected>Escolha o tamanho</option>
                                <option value="R$ 47.00"> GRANDE</option>
                                <option value="R$ 25.00">MÉDIO</option>
                                <option value="R$ 15.00">BROTINHO</option>
                            </select>
                            <br>
                            <strong> Preço </strong><input disabled class="text-center border border-start-0"
                                id="caixa1" style="width: 70px;" type="text" />
                            <div id="div_personalizar" style="visibility: hidden;"></div>
                            <br>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="mt-5"></div>

                <h4>
                    <a href="http://127.0.0.1:8000/pizzas"><i class="bi bi-arrow-left"></i></a>
                    <a href="http://127.0.0.1:8000/pizzas">1</a>
                </h4>

            </div>
        </div>

        <div class="row mt-5"></div>

        <!-- /CONTEUDO -->

    </div>

    </body>

    @section('scripts')
    @endsection
