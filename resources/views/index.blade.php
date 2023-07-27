@extends('layouts.base')

 <!-- CONTEUDO -->
 <div class="container-fluid mt-5 ">

    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-arrow-up"></i></button>
                    <div class="row mt-5"></div>

        <div class="row mt-5 promocao d-none d-md-block d-xl-block">
            <h2 class="">
                Confira nossas promoções imperdíveis!
            </h2>
                    <div class="flex-container">
                        <div class="col-md-3 me-2 promo"> <a class="d-flex justify-content-center" href=""><img width="360px" class="rounded img-fluid" src="{{ url ('img/promocao2.png')}}" alt="Promoção2"></a></div>
                        <div class="col-md-3 me-2 promo"> <a class="d-flex justify-content-center" href=""><img width="360px" class="rounded img-fluid" src="{{ url ('img/promocao.png')}}" alt="Promoção"></a></div>
                        <div class="col-md-3 me-2 promo"> <a class="d-flex justify-content-center" href=""><img width="360px" class="rounded img-fluid" src="{{ url ('img/promocao5.png')}}" alt="Promoção5"></a></div>
                        <div class="col-md-3 me-2 promo"> <a class="d-flex justify-content-center" href=""><img width="360px" class="rounded img-fluid" src="{{ url ('img/promocao4.png')}}" alt="Promoção4"></a></div>
                    </div>

                    <span id="tresPontos"></span><span id="mostrarMais">
                    <div class="flex-container mt-4">
                        <div class="col-md-3 me-2 promo"> <a class="d-flex justify-content-center" href=""><img width="360px" class="rounded img-fluid" src="{{ url ('img/promocao1.png')}}" alt="Promoção2"></a></div>
                        <div class="col-md-3 me-2 promo"> <a class="d-flex justify-content-center" href=""><img width="360px" class="rounded img-fluid" src="{{ url ('img/promocao6.png')}}" alt="Promoção"></a></div>
                        <div class="col-md-3 me-2 promo"> <a class="d-flex justify-content-center" href=""><img width="360px" class="rounded img-fluid" src="{{ url ('img/promocao3.png')}}" alt="Promoção5"></a></div>
                        <div class="col-md-3 me-2 promo"> <a class="d-flex justify-content-center" href=""><img width="360px" class="rounded img-fluid" src="{{ url ('img/promocao7.png')}}" alt="Promoção4"></a></div>
                    </div></span>

                    <div class="col-md-3">
                        <button onclick="leiaMais()" id="btnLeiaMais" class="btn btnLeiaMais mt-4 botao">Ver Mais</button>
                    </div>
        </div>

        <div class="row mt-5 promocao d-block d-md-none">
            <h2 class="">
                Confira nossas promoções imperdíveis!
            </h2>
                    <div class="flex-container">
                        <div class="col-md-3 me-2 promo "> <a class="d-flex justify-content-center" href=""><img width="360px" class="rounded img-fluid" src="{{ url ('img/promocao2.png')}}" alt="Promoção2"></a></div>
                        <div class="col-md-3 me-2 promo "> <a class="d-flex justify-content-center" href=""><img width="360px" class="rounded img-fluid" src="{{ url ('img/promocao.png')}}" alt="Promoção"></a></div>
                    </div>

                    <div class="flex-container mt-4">
                        <div class="col-md-3 me-2 promo"> <a class="d-flex justify-content-center" href=""><img width="360px" class="rounded img-fluid" src="{{ url ('img/promocao5.png')}}" alt="Promoção5"></a></div>
                        <div class="col-md-3 me-2 promo"> <a class="d-flex justify-content-center" href=""><img width="360px" class="rounded img-fluid" src="{{ url ('img/promocao4.png')}}" alt="Promoção4"></a></div>
                    </div>

                    <span id="tresPontos2"></span><span id="mostrarMais2">
                    <div class="flex-container mt-4">
                        <div class="col-md-3 me-2 promo "> <a class="d-flex justify-content-center" href=""><img width="360px" class="rounded img-fluid" src="{{ url ('img/promocao1.png')}}" alt="Promoção2"></a></div>
                        <div class="col-md-3 me-2 promo "> <a class="d-flex justify-content-center" href=""><img width="360px" class="rounded img-fluid" src="{{ url ('img/promocao6.png')}}" alt="Promoção"></a></div>
                    </div>

                    <div class="flex-container mt-4">
                        <div class="col-md-3 me-2 promo"> <a class="d-flex justify-content-center" href=""><img width="360px" class="rounded img-fluid" src="{{ url ('img/promocao3.png')}}" alt="Promoção5"></a></div>
                        <div class="col-md-3 me-2 promo"> <a class="d-flex justify-content-center" href=""><img width="360px" class="rounded img-fluid" src="{{ url ('img/promocao7.png')}}" alt="Promoção4"></a></div>
                    </div></span>

                    <div class="col-md-3">
                        <button onclick="leiaMais2()" id="btnLeiaMais2" class="btn btnLeiaMais2 mt-4 botao">Ver Mais</button>
                    </div>
        </div>

        <div class="row mt-5 promocao">
            <h2 class="">
                Confira nosso Cardápio:
            </h2>
                    <div class="flex-container">
                        <div class="col-md-3 me-2 promo"> <a class="" href=""><img class="rounded img-fluid" src="{{ url ('img/batata2.png')}}" alt="Promoção2"></a></div>
                        <div class="col-md-3 me-2 promo"> <a class="" href=""><img class="rounded img-fluid" src="{{ url ('img/pastel2.png')}}" alt="Promoção"></a></div>
                        <div class="col-md-3 me-2 promo"> <a class="" href=""><img class="rounded img-fluid" src="{{ url ('img/portuguesa2.png')}}" alt="Promoção5"></a></div>
                        <div class="col-md-3 me-2 promo"> <a class="" href=""><img class="rounded img-fluid" src="{{ url ('img/petit2.png')}}" alt="Promoção4"></a></div>
                    </div>

                    <div class="col-md-3">
                        <a class="btn mt-4 botao" href="http://localhost/bella-pizzaria/entradas.php">Ver Mais</a>
                    </div>
        </div>
    </div>


<!-- aaa -->
    <div class="container-fluid backgroundimg">

            <div class="row mt-5 ">
                    <div class="col-md-6">
                        <img src="./img/pizzaria.png" alt="" class=" img-fluid m-5 p-3">
                    </div>

                    <div class="col-md-6 mt-3 boasvindas">
                        <p class="m-5 p-3 font2"> Bem-vindo à Bella-Pizzaria!</p>

                        <p class="m-5 p-3  font2">
                            Somos uma pizzaria apaixonada por oferecer as melhores experiências gastronômicas para os amantes da pizza no Brasil.
                            Nossas raízes estão profundamente enraizadas na tradição italiana,
                            e estamos comprometidos em trazer um toque autêntico e saboroso para cada pizza que sai de nossa cozinha.

                            Nossa história começou há mais de uma década, com a missão de fornecer às famílias,
                            amigos e comunidades uma opção deliciosa para compartilhar momentos especiais. Desde então,
                            temos crescido e prosperado, estabelecendo várias lojas em todo o Brasil.
                            É com orgulho que nos tornamos uma parte valiosa da cultura culinária local.
                            Ganhamos o prêmio de melhor pizza da América Latina.
                        </p>

                        <p class="m-5 p-3 font2">
                                O que nos diferencia são nosso ingredientes frescos e selecionados,
                            receitas tradicionais italianas e a diversidade de sabores.
                            A experiência do cliente é muito importante para nós, prezamos a qualidade do atendimento e o conforto que o cliente tem com o ambiente.
                            Nossa pizzaria tambem apoia a sustentabilidade, prezando o bem estar da nossa comunidade, clientes e o meio ambiente.
                        </p>
                </div>
            </div>

            <div class="row mt-5">

                <div class="col-md-12 premios">
                    <h2 class="text-center">🍕🏆 Orgulhosamente Premiada pelo Guia Michelin! 🏆🍕</h2>

                    <h4 class="mt-2 text-center">É com imensa alegria que anunciamos que a nossa pizzaria foi agraciada com o prestigioso Prêmio Michelin não apenas uma vez, mas duas vezes consecutivas! Em 2022 e novamente em 2023, fomos reconhecidos pelo Guia Michelin como uma das melhores pizzarias do mundo.
                        A conquista do cobiçado prêmio é o resultado do incansável trabalho em equipe, da dedicação apaixonada à arte da pizza e do compromisso constante em oferecer a você, nosso cliente querido, uma experiência gastronômica única e inesquecível.</h4>
                </div>

                <div class="col-md-6 d-flex justify-content-center">
                    <img width="80%" class="img-fluid mt-2" src="./img/premio.png" alt="">
                </div>

                <div class="col-md-6 d-flex justify-content-center">
                    <img width="80%" class="img-fluid mt-2" src="./img/premio2.png" alt="">
                </div>



            </div>

        <!-- /CONTEUDO -->
    </div>

    <script>
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

        function leiaMais2() {
    const tresPontos2 = document.getElementById('tresPontos2');
    const mostrarMais2 = document.getElementById('mostrarMais2');
    const btnLeiaMais2 = document.getElementById('btnLeiaMais2');


    if (tresPontos2.style.display == 'none') {
        tresPontos2.style.display = 'inline';
        mostrarMais2.style.display = 'none';
        btnLeiaMais2.innerHTML = 'Ver Mais';
    } else {
        tresPontos2.style.display = 'none';
        mostrarMais2.style.display = 'inline';
        btnLeiaMais2.innerHTML = 'Ver Menos';
    }
}

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

