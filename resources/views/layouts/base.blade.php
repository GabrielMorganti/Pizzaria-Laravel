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
    <link rel="stylesheet" href="{{ asset('css/estilo_receita.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/botao.css') }}" type="text/css">
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

    <!-- fonte teste -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=News+Cycle:wght@400;700&display=swap" rel="stylesheet">
    <!-- /fonte teste  -->
</head>

<body>
    <footer class="container-fluid my-3">
        <div class="row ">
            <div class="container-fluid rodape">
                <div class="row contact-1">
                    <div class="col-md-4 mt-5 logo-footer">
                        <div class="footer-img mb-4">
                            <a class="" href="http://127.0.0.1:8000"><img class="footer-img"
                                    src="{{ url('img/logo2.png')}}" alt="">
                            </a>
                            <p>A Bella-Pizzaria tem a melhor pizza da América Latina
                                <br>venha ter uma expêriencia única
                            </p>
                        </div>

                        <div class="mt-5"></div>


                        <div class="mt-5 flex-container">
                            <a class="icon rounded-circle border border-secondary" href="https://www.facebook.com"
                                target="_blank">
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

                        <div class="mt-3"></div>
                    </div>

                    <div class="col-md-1">

                    </div>

                    <div class="col-md-3 mt-5 categorias-footer">
                        <div class="flex-container">
                            <ul>
                                <a href="http://127.0.0.1:8000">
                                    <li>Pagina inicial</li>
                                </a>
                                <a href="http://127.0.0.1:8000/cardapio">
                                    <li>Cardápio</li>
                                </a>
                                <a href="http://127.0.0.1:8000/montesuapizza">
                                    <li>Monte Sua Pizza</li>
                                </a>
                                <a href="http://127.0.0.1:8000/contato">
                                    <li>Contato</li>
                                </a>
                                <a href="http://127.0.0.1:8000/sobrenos">
                                    <li>Sobre Nós</li>
                                </a>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 mt-5 links-footer">
                        <div class="flex-container">
                            <ul>
                                <a href="">
                                    <li>Sobre nós</li>
                                </a>
                                <a href="">
                                    <li>Autores</li>
                                </a>
                                <a href="/wordpress/?page_id=84">
                                    <li>Contato</li>
                                </a>
                                <a href="">
                                    <li>Políticas de Privacidade</li>
                                </a>
                                <a href="">
                                    <li>Termos de Uso</li>
                                </a>
                            </ul>
                        </div>
                    </div>
                    <hr>

                    <div class="col-md-12 copy-footer patrocinio">
                        <div class="flex-container">
                            <p class="">Design: Bella-Pizzaria</p>
                            <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade"
                                data-ride="carousel">
                                <div class="carousel-inner d-none d-md-block d-xl-block">
                                    <div class="carousel-item active">
                                        <img class="img-fluid" src="{{ url('img/patrocinio-ifood.png')}}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid" src="{{ url('img/patrocinio-rappi.png')}}" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid" src="{{ url('img/patrocinio-seu-menu.png')}}" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid" src="{{ url('img/patrocinio-uber-eats.png')}}" alt="Third slide">
                                    </div>
                                </div>
                            </div>
                            <p class="">Copyright (c) 2023 Bella-Pizzaria. Todos os direitos reservados</p>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12 d-block d-md-none patrocinio2">
                        <div class="flex-container">
                            <div id="carouselExampleSlidesOnly " class="carousel slide carousel-fade"
                                data-ride="carousel">
                                <div class="carousel-inner ">
                                    <div class="carousel-item active ">
                                        <img class="img-fluid" src="{{ url('img/patrocinio-ifood.png')}}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid" src="{{ url('img/patrocinio-rappi.png')}}" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid" src="{{ url('img/patrocinio-seu-menu.png')}}" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid" src="{{ url('img/patrocinio-uber-eats.png')}}" alt="Third slide">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

<script type='text/javascript'>
@yield('scripts3')
    <!-- Alterar apenas Aqui -->
            function init_map() {
                var myOptions = {
                    zoom: 16,
                    center: new google.maps.LatLng(-23.661267, -46.530082),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                marker = new google.maps.Marker({
                    map: map,
                    position: new google.maps.LatLng(-23.661267, -46.530082)
                });
                infowindow = new google.maps.InfoWindow({
                    content: '<strong> Bella-Pizzaria </strong><br>  &nbsp &nbsp &nbsp &nbsp T94'
                });
                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(map, marker);
                });
                infowindow.open(map, marker);
            }
            google.maps.event.addDomListener(window, 'load', init_map);
</script>

<script>
    @yield('scripts2')
        function pizzas() {
    const tresPontos = document.getElementById('tresPontos');
    const mostrarMais = document.getElementById('mostrarMais');
    const btnpizzas = document.getElementById('btnpizzas');


    if (tresPontos.style.display == 'none') {
        tresPontos.style.display = 'inline';
        mostrarMais.style.display = 'none';
    } else {
        tresPontos.style.display = 'none';
        mostrarMais.style.display = 'inline';
    }
}
</script>

<script>
    @yield('scripts3')
        function leiaMais() {
    const tresPontos = document.getElementById('tresPontos');
    const mostrarMais = document.getElementById('mostrarMais');
    const btnLeiaMais = document.getElementById('btnLeiaMais');


    if (tresPontos.style.display == 'none') {
        tresPontos.style.display = 'inline';
        mostrarMais.style.display = 'none';
        btnLeiaMais.innerHTML = 'Ver Mais';
    } else {
        tresPontos.style.display = 'none';
        mostrarMais.style.display = 'inline';
        btnLeiaMais.innerHTML = 'Ver Menos';
    }
}
</script>

@yield('scripts')
<script>

     // Get the button
     let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 550 || document.documentElement.scrollTop > 550) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>



</html>
