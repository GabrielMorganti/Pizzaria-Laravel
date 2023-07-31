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
                    <a class="d-flex justify-content-md-center"
                        href="http://127.0.0.1:8000"><img class="" id="logo"
                            src="img/logo2.png" alt=""></a>
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
                                        <a class="nav-link" aria-current="page"
                                            href="http://127.0.0.1:8000">Pagina Inicial <span
                                                class="sr-only">(Pagina Atual)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="http://127.0.0.1:8000/cardapio">Cardápio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="http://127.0.0.1:8000/montesuapizza">Monte Sua Pizza</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="http://127.0.0.1:8000/contato">Contato</a>
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
                    <a class="mt-1" href="http://127.0.0.1:8000"><img class=""
                            id="logo" src="img/logo2.png" alt=""></a>

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
                                    <a class="nav-link" aria-current="page"
                                        href="http://127.0.0.1:8000">
                                        <h2>Pagina Inicial</h2><span class="sr-only">
                                            <h2>(Pagina Atual)</h2>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="http://127.0.0.1:8000/cardapio" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <h2>Cardápio</h2>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="http://127.0.0.1:8000/entradas">Entradas</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="http://127.0.0.1:8000/pizzas">Pizzas</a></li>
                                        <li><a class="dropdown-item"
                                                href="http://127.0.0.1:8000/bebidas">Bebidas</a></li>
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
                                    <a class="nav-link"
                                        href="http://127.0.0.1:8000/sobrenos">
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

            <div class="col-md-8 mt-2">
                <h4 class="text-center">ENTRADAS</h4>

                <button onclick="topFunction()" id="myBtn" title="Go to top"><i
                        class="bi bi-arrow-up"></i></button>
                <div class="row mt-5"></div>

                <div class="container text-center">
                    <div class="row align-items-start">
                        <div class="col">
                            <img src="./img/batata.png" alt="" width="100%">
                        </div>
                        <div class="col">
                            <h3 class="text-start">Porção de Fritas</h3>
                            <h5 class="text-start">INGREDIENTES:</h5>
                            <p class="text-start">
                                Batata frita, cheddar, bacon, calabresa e catupiry
                            </p>
                        </div>
                        <div class="col">
                            <label class="form-label mt-2" for="id_categoria"><strong>Tamanhos*</strong></label>
                            <br>
                            <select class="form-select" id="selecao">
                                <option value="" selected>Escolha o tamanho</option>
                                <option value="R$ 47.00">G 700g</option>
                                <option value="R$ 25.00">M 500g</option>
                                <option value="R$ 15.00">P 250g</option>
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
                            <img src="./img/nuggets.png" alt="" width="100%">
                        </div>
                        <div class="col">
                            <h3 class="text-start">Porção de Nuggets</h3>
                            <h5 class="text-start">INGREDIENTES:</h5>
                            <p class="text-start">
                                Peito de frango moido com ervas, empanado e frito
                            </p>
                        </div>
                        <div class="col">
                            <label class="form-label mt-2" for="id_categoria"><strong>Tamanhos*</strong></label>
                            <br>
                            <select class="form-select" id="selecao">
                                <option value="" selected>Escolha o tamanho</option>
                                <option value="R$ 47.00">G 700g</option>
                                <option value="R$ 25.00">M 500g</option>
                                <option value="R$ 15.00">P 250g</option>
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
                            <img src="./img/madioca.png" alt="" width="100%">
                        </div>
                        <div class="col">
                            <h3 class="text-start">Porção de Madioca frita</h3>
                            <h5 class="text-start">INGREDIENTES:</h5>
                            <p class="text-start">
                                Madioca frita, com pimenta biquinho
                            </p>
                        </div>
                        <div class="col">

                            <div class="col">
                                <label class="form-label mt-2" for="id_categoria"><strong>Tamanhos*</strong></label>
                                <br>
                                <select class="form-select" id="selecao">
                                    <option value="" selected>Escolha o tamanho</option>
                                    <option value="R$ 47.00">G 500g</option>
                                    <option value="R$ 25.00">M 350g</option>
                                    <option value="R$ 15.00">P 200g</option>
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
                            <img src="./img/polenta1.png" alt="" width="100%">
                        </div>
                        <div class="col">
                            <h3 class="text-start">Porção de Polenta frita</h3>
                            <h5 class="text-start">INGREDIENTES:</h5>
                            <p class="text-start">
                                Polenta frita e ketchup
                            </p>
                        </div>
                        <div class="col">
                            <label class="form-label mt-2" for="id_categoria"><strong>Tamanhos*</strong></label>
                            <br>
                            <select class="form-select" id="selecao">
                                <option value="" selected>Escolha o tamanho</option>
                                <option value="R$ 47.00">G 700g</option>
                                <option value="R$ 25.00">M 500g</option>
                                <option value="R$ 15.00">P 250g</option>
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
                            <img src="./img/frango.png" alt="" width="100%">
                        </div>
                        <div class="col">
                            <h3 class="text-start">Porção Frango à Passarinho</h3>
                            <h5 class="text-start">INGREDIENTES:</h5>
                            <p class="text-start">
                                Frango à passarinho acompanhado de maionese verde
                            </p>
                        </div>
                        <div class="col">
                            <label class="form-label mt-2" for="id_categoria"><strong>Tamanhos*</strong></label>
                            <br>
                            <select class="form-select" id="selecao">
                                <option value="" selected>Escolha o tamanho</option>
                                <option value="R$ 47.00">G 500g</option>
                                <option value="R$ 25.00">M 350g</option>
                                <option value="R$ 15.00">P 200g</option>
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
                            <img src="./img/pastel.png" alt="" width="100%">
                        </div>
                        <div class="col">
                            <h3 class="text-start">Porção mini Pastel</h3>
                            <h5 class="text-start">INGREDIENTES:</h5>
                            <p class="text-start">
                                Mix de mini pastel de queijo, calabresa, frango e camarão
                            </p>
                        </div>
                        <div class="col">
                            <label class="form-label mt-2" for="id_categoria"><strong>Tamanhos*</strong></label>
                            <br>
                            <select class="form-select" id="selecao">
                                <option value="" selected>Escolha o tamanho</option>
                                <option value="R$ 47.00">25 Mini Pasteis</option>
                                <option value="R$ 25.00">15 Mini Pasteis</option>
                                <option value="R$ 15.00">10 Mini Pasteis</option>
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
                            <img src="./img/tortana.png" alt="" width="100%">
                        </div>
                        <div class="col">
                            <h3 class="text-start">Tortano</h3>
                            <h5 class="text-start">INGREDIENTES:</h5>
                            <p class="text-start">
                                Muçarela, calabresa, catupiry e bacon
                            </p>
                        </div>
                        <div class="col">
                            <label class="form-label mt-2" for="id_categoria"><strong>Tamanhos*</strong></label>
                            <br>
                            <select class="form-select" id="selecao">
                                <option value="" selected>Escolha o tamanho</option>
                                <option value="R$ 47.00">Tamanho único</option>
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
                <div class="container text-center">

                    <div class="row align-items-start">
                        <div class="col">
                            <img src="./img/focaccia.png" alt="" width="100%">
                        </div>
                        <div class="col">
                            <h3 class="text-start">Focaccia</h3>
                            <h5 class="text-start">INGREDIENTES:</h5>
                            <p class="text-start">
                                Muçarela, tomate seco, azeitona preta, cebola e ervas
                            </p>
                        </div>
                        <div class="col">
                            <label class="form-label mt-2" for="id_categoria"><strong>Tamanhos*</strong></label>
                            <br>
                            <select class="form-select" id="selecao">
                                <option value="" selected>Escolha o tamanho</option>
                                <option value="R$ 47.00">Tamanho único</option>
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


            </div>
        </div>
    </div>
</div>

</body>

@section('scripts')

@endsection
