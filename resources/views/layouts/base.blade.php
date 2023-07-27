<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    {{-- /Bootstrap --}}

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/estilo_receita.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/botao.css')}}" type="text/css">
    {{-- /CSS --}}

    {{-- JS --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    {{-- /JS --}}

    {{-- Icones --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    {{-- /Icones --}}
</head>

<body>
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
                            href="http://localhost/bella-pizzaria/index.php"><img class="" id="logo"
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
                                                href="http://localhost/bella-pizzaria/index.php">Pagina Inicial <span
                                                    class="sr-only">(Pagina Atual)</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="http://localhost/bella-pizzaria/entradas.php">Cardápio</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="http://localhost/bella-pizzaria/promocoes.php">Monte Sua Pizza</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="http://localhost/bella-pizzaria/contato.php">Contato</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://localhost/bella-pizzaria/contato.php">Sobre
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
                        <a class="mt-1" href="http://localhost/bella-pizzaria/index.php"><img class=""
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
                                            href="http://localhost/bella-pizzaria/index.php">
                                            <h2>Pagina Inicial</h2><span class="sr-only">
                                                <h2>(Pagina Atual)</h2>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <h2>Cardápio</h2>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="http://localhost/bella-pizzaria/entradas.php">Entradas</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="http://localhost/bella-pizzaria/pizzas.php">Pizzas</a></li>
                                            <li><a class="dropdown-item"
                                                    href="http://localhost/bella-pizzaria/bebidas.php">Bebidas</a></li>
                                            <li><a class="dropdown-item"
                                                    href="http://localhost/bella-pizzaria/sobremesas.php">Sobremesas</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://localhost/bella-pizzaria/promocoes.php">
                                            <h2>Monte Sua Pizza</h2>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://localhost/bella-pizzaria/promocoes.php">
                                            <h2>Promoções</h2>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://localhost/bella-pizzaria/contato.php">
                                            <h2>Contato</h2>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="http://localhost/bella-pizzaria/acompanharpedido.php">
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

    <div class="container">
        @yield('content')
    </div>
    <footer class="container-fluid my-3">
        &copy; todos os direitos reservados - Bella-pizzaria
    </footer>

</body>
@yield('scripts')

</html>
