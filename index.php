<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/fav/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/fav/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/fav/favicon-16x16.png" />
    <link rel="manifest" href="assets/fav/site.webmanifest" />
    <link rel="mask-icon" href="assets/fav/safari-pinned-tab.svg" color="#5bbad5" />
    <meta name="theme-color" content="#000" />

    <!-- SEO Tags -->
    <meta name="description"
        content="Ação de Branding realizada pelo Estúdio LaBomba de Design especializados em Branding, Ilustração e Desenvolvimento de Embalagens." />
    <meta name="keywords" content="Cerveja, La Maldicion, Madre, La Bomba, Breja, Estúdio LaBomba" />

    <title>La Maldición</title>

    <!-- FullPage.js -->
    <link rel="stylesheet" type="text/css" href="./assets/css/fullpage.min.css" />

    <!-- Styles -->
    <link rel="stylesheet" href="assets/css/maldicion.min.css" />

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/7ca1ebb48c.js"></script>

    <!--[if IE]>
      <script type="text/javascript">
        var console = { log: function() {} };
      </script>
    <![endif]-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129826334-2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "UA-129826334-2");
    </script>
</head>

<body>
    <!-- Sound -->
    <div id="sound">
        <audio id="music" autoplay>
            <source src="./assets/sounds/madre_de_la_bomba.mp3" type="audio/mpeg" />
        </audio>
        <a href="javascript:void(0)" class="btn btn-default pause" title="Play/Pause" onclick="aud_play_pause()">
            <i id="stateicon" class="fa fa-pause"></i>
        </a>
    </div>

    <div id="fullpage">
        <!-- Introdução -->
        <div class="section">
            <div class="intro">
                <main>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="text-center d-block d-md-none">
                                    <a href="https://estudiolabomba.com" target="blank">
                                        <img src="assets/img/labomba.svg" alt="Estúdio LaBomba" class="img-fluid"
                                            width="200px" id="logo" />
                                    </a>
                                </div>
                                <img src="assets/img/madre_de_labomba.png" alt="Madre de LaBomba" id="madre"
                                    class="img-fluid" />
                            </div>
                            <div class="col-md-6 col-12" id="introducao">
                                <div class="text-right d-none d-md-block">
                                    <a href="https://estudiolabomba.com" target="blank">
                                        <img src="assets/img/labomba.svg" alt="Estúdio LaBomba" class="img-fluid"
                                            width="200px" id="logo" />
                                    </a>
                                </div>
                                <div id="infos">
                                    <h1 class="d-none d-md-block">
                                        La <br />
                                        Maldición
                                    </h1>
                                    <h1 class="d-block d-md-none">
                                        La Maldición
                                    </h1>
                                    <p>
                                        Reza a lenda de quem receber uma maldição da Madre De
                                        La.Bomba, irá sofrer as piores consequências em vida.
                                        <br />
                                        Você terá que saborear até a última gota, com prazer e
                                        devoção ou o pior estará te esperando.
                                    </p>
                                </div>
                                <div id="antidote">
                                    <a href="#cervejas">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 84.76 100.57" width="100">
                                            <defs>
                                                <style>
                                                .cls-1 {
                                                    fill: #fff;
                                                }
                                                </style>
                                            </defs>
                                            <title>Antidoto</title>
                                            <g id="Layer_2" data-name="Layer 2">
                                                <g id="_1200" data-name="1200">
                                                    <polygon class="cls-1"
                                                        points="27.8 32.18 27.8 32.18 27.8 32.18 27.8 32.18" />
                                                    <path class="cls-1"
                                                        d="M37,26.41,28,24a2.59,2.59,0,0,0-.68-.09,2.68,2.68,0,0,0-1.64.55,2.05,2.05,0,0,0-.82,1.42l0,.09-1,3.82a2.13,2.13,0,0,0,0,1.68,2.56,2.56,0,0,0,.3.53l.23.31-.17.34c-.94,2-2,4.42-3.17,7.14-1,2.44-2.05,5-3.05,7.63l-.12.3-.31.09c-3.26.88-7.54,4.73-8.8,9.42l-8.58,32a4.93,4.93,0,0,0,.63,3.92,5.83,5.83,0,0,0,3.44,2.5l17.56,4.7a5.87,5.87,0,0,0,4.15-.4,4.88,4.88,0,0,0,2.58-3.12l1.16-4.32v-.18l.07-.07L37.1,64.83c1.26-4.69-.53-10.17-2.91-12.56L34,52l.05-.32c.63-4,1.17-7.89,1.55-11.31.19-1.7.34-3.25.44-4.63l0-.36.33-.16a2.62,2.62,0,0,0,1.36-1.66l1.09-4.07A2.54,2.54,0,0,0,37,26.41ZM27.64,90.6,4,84.28,10.8,59.06l23.6,6.32ZM35.34,33l-.75,0-.12,0-.4.23-.1.1-.13.17-.06.09-.09.24a.36.36,0,0,0,0,.11.5.5,0,0,0,0,.15c-.07,1.24-.19,2.68-.36,4.3l0,.57H24l.39-.89c1-2.27,1.88-4.2,2.66-5.74l0-.09,0-.16,0-.09,0-.11v-.24l0-.13,0-.12-.08-.2L27,31.18l-.07-.1-.09-.1-.08-.07-.1-.08-.5-.29.15-.46,1-3.72,9.16,2.46Z" />
                                                    <path class="cls-1"
                                                        d="M80.53,95.66a5.82,5.82,0,0,0,3.39-2.43,4.9,4.9,0,0,0,.68-4L76,57.23c-1.26-4.69-5.54-8.54-8.8-9.42l-.31-.09-.11-.3c-1-2.65-2-5.22-3.06-7.62l0,0c-1.15-2.76-2.21-5.14-3.15-7.09l-.17-.35.23-.31a2.17,2.17,0,0,0,.3-.53,2.13,2.13,0,0,0,0-1.68l0-.09-1-3.82a2.05,2.05,0,0,0-.82-1.42,2.68,2.68,0,0,0-1.64-.55,2.59,2.59,0,0,0-.68.09l-9,2.41a2.54,2.54,0,0,0-1.55,1.19,2.51,2.51,0,0,0-.25,1.93L47,33.6a2.62,2.62,0,0,0,1.36,1.66l.33.16,0,.36c.1,1.37.25,2.92.44,4.6.38,3.43.92,7.34,1.55,11.34l0,.32-.22.23c-2.38,2.39-4.17,7.87-2.91,12.56l8.58,32A4.91,4.91,0,0,0,58.82,100a5.86,5.86,0,0,0,4.15.4ZM50.71,33.33l-.08-.07-.09-.06-.07,0-.1,0a1.09,1.09,0,0,0-.24-.07l-.06,0h-.13l-.46,0-.18-.44-1-3.72,9.16-2.46,1.12,4.17L58,31l-.09.1-.24.41,0,.12,0,.25,0,.33,0,.1a1.51,1.51,0,0,0,.06.15c.78,1.54,1.67,3.46,2.66,5.74l.39.89H51.52l-.05-.57c-.17-1.62-.29-3.07-.35-4.29,0,0,0-.08,0-.12a.78.78,0,0,0,0-.14l0-.1,0-.11-.2-.29A.73.73,0,0,0,50.71,33.33ZM57.12,90.6,50.36,65.38,74,59.06l6.76,25.22Z" />
                                                    <path class="cls-1"
                                                        d="M71.55,73.12a6.4,6.4,0,0,0-4.13-3.84L66.9,68c-.07-.29-.89-.34-2-.16,0-.17.14-.24.27-.28l1.24-.25c2.43-.49,1.61-2.4,1.08-2.2-2.3.89-3,.37-4,1.3a2.21,2.21,0,0,0-.66,2c-1.15.4-1.92.87-1.84,1.17l.11,1.26a6.42,6.42,0,1,0,10.46,2.32Z" />
                                                    <path class="cls-1"
                                                        d="M25.24,76.39A6.41,6.41,0,0,0,23.58,71l.19-1.35c.07-.29-.61-.74-1.66-1.14a.32.32,0,0,1,.37-.11l1.2.41c2.35.78,2.59-1.29,2-1.37-2.43-.38-2.76-1.17-4.11-.88A2.27,2.27,0,0,0,20,67.92c-1.19-.22-2.09-.2-2.17.1l-.53,1.14a6.42,6.42,0,1,0,7.9,7.23Z" />
                                                    <circle id="circle-md" class="cls-1" cx="47.78" cy="14.96" r="3" />
                                                    <circle id="circle-sm" class="cls-1" cx="38.91" cy="19.43"
                                                        r="2.12" />
                                                    <circle id="circle-lg" class="cls-1" cx="36.46" cy="5.3" r="5.3" />
                                                </g>
                                            </g>
                                        </svg>
                                        <h4>
                                            conheça <br />
                                            os antídotos
                                        </h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <!-- Teaser de Apresentação -->
        <div class="section">
            <section id="la-maldicion-teaser">
                <div class="container">
                    <div class="d-block d-md-none">
                        <h3>Veja o Teaser da Maldição!</h3>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9">
                        <video controls="true" class="embed-responsive-item"
                            poster="../assets/img/thumb.jpg">
                            <source src="./assets/videos/la-maldicion-teaser.mp4" type="video/mp4" />
                        </video>
                    </div>
                </div>
            </section>
        </div>

        <!-- Cervejas -->
        <div class="section">
            <!-- Cervejas -->
            <section id="cervejas">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h3>clique nas cervejas e descubra</h3>
                        </div>
                        <div class="col-6 col-lg-3 cerveja" id="hellcat">
                            <h2><span>HellCat</span><br />IPA</h2>
                            <a href="cervejas/hellcat">
                                <img src="./assets/img/cervejas/hellcat-ipa-la-maldicion.png" alt="Cerveja HellCat IPA"
                                    class="img-fluid" />
                            </a>
                        </div>
                        <div class="col-6 col-lg-3 cerveja" id="lulupulus">
                            <h2><span>Lulupulus</span><br />RedAle</h2>
                            <a href="cervejas/lulupulus">
                                <img src="./assets/img/cervejas/lulupulus-red-ale-la-maldicion.png"
                                    alt="Cerveja Lulupulus Red Ale" class="img-fluid" />
                            </a>
                        </div>
                        <div class="col-6 col-lg-3 cerveja" id="mclovin">
                            <h2><span>McLovin</span><br />ESB</h2>
                            <a href="cervejas/mclovin">
                                <img src="./assets/img/cervejas/mclovin-esb-la-maldicion.png" alt="Cerveja McLovin ESB"
                                    class="img-fluid" />
                            </a>
                        </div>
                        <div class="col-6 col-lg-3 cerveja" id="psico">
                            <h2>
                                <span>Psico</span><br />
                                Weizen
                            </h2>
                            <a href="cervejas/psico">
                                <img src="./assets/img/cervejas/psico-weizen-la-maldicion.png"
                                    alt="Cerveja Psico Weizen" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Rodapé -->
        <div class="section">
            <div class="container" id="footer">
                <!-- Vamos baterum papo? -->
                <div class="row">
                    <div class="col-12 text-center" id="conversa">
                        <a href="https://api.whatsapp.com/send?phone=551128965199&text=Est%C3%BAdio%20La.Bomba%2C%20com%20muita%20cevada%2C%20me%20livre%20desta%20cilada." class="d-block d-md-none">
                            <img src="./assets/img/mclovin_bater_um_papo.svg" alt="Vamos bater um papo ?"
                                class="img-fluid" width="165" />
                            <h2>
                                vamos bater <br />
                                um papo?
                            </h2>
                        </a>
                        <a data-toggle="modal" data-target="#exampleModalCenter" class="d-none d-md-block">
                            <img src="./assets/img/mclovin_bater_um_papo.svg" alt="Vamos bater um papo ?"
                                class="img-fluid" width="165" />
                            <h2>
                                vamos bater <br />
                                um papo?
                            </h2>
                        </a>
                    </div>
                </div>

                <!-- Estúdio LaBomba -->
                <footer>
                    <div class="home">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-4" id="logo">
                                    <a href="https://estudiolabomba.com" target="blank">
                                        <img src="./assets/img/labomba_completa.svg" alt="Estúdio LaBomba"
                                            class="img-fluid" width="230" />
                                    </a>
                                </div>
                                <div class="col-12 col-md-8">
                                    <p>
                                        Somos um Estúdio de Design. Há 6 anos, elevamos o
                                        potencial e resultados dos nossos clientes gerando ligação
                                        emocional dos consumidores com as marcas, através da
                                        ousadia, arte e design.
                                    </p>
                                </div>
                                <div class="col-12 py-4 d-none d-md-block">
                                    <img src="./assets/img/equipe_labomba.svg" alt="Equipe do Estúdio LaBomba"
                                        class="img-fluid" />
                                </div>
                                <div class="col-12">
                                    <ul id="infos">
                                        <li>
                                            <span>Onde?</span>Avenida Itamarati, 878 - Santo André /
                                            SP
                                        </li>
                                        <li>
                                            <a href="https://estudiolabomba.com">estudiolabomba.com</a>
                                        </li>
                                        <li>+55 11 2896 5199</li>
                                        <ul id="social">
                                            <li>
                                                <a href="https://www.instagram.com/estudio.labomba/" target="blank">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.behance.net/estudiolabomba" target="blank">
                                                    <i class="fab fa-behance"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.facebook.com/estudiolabomba" target="blank">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.linkedin.com/company/est%C3%BAdio-la-bomba/about/"
                                                    target="blank">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://vimeo.com/user34771087" target="blank">
                                                    <i class="fab fa-vimeo-v"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </ul>
                                </div>
                                <div class="col-12 text-center" id="creditos">
                                    &#x24B8; 2013 - 2019 La.Bomba <br />
                                    <a href="https://estudiolabomba.com/">Estúdio La.Bomba</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-3 offset-2 text-right">
                                <a href="https://api.whatsapp.com/send?phone=551128965199&text=Est%C3%BAdio%20La.Bomba%2C%20com%20muita%20cevada%2C%20me%20livre%20desta%20cilada."
                                    target="blank" id="zap">
                                    <img src="./assets/img/chama_zap.svg" alt="Chama no zap do Estúdio LaBomba"
                                        class="img-fluid" />
                                </a>
                            </div>
                            <div class="col-7">
                                <h3>vamos bater um papo?</h3>
                                <p>
                                    Curtiu? Vamos bater um papo por WhatsApp ou nos mande um
                                    e-mail através do formulário abaixo:
                                </p>
                                <form action="enviar.php" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="nome completo"
                                            name="nome" />
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="celular" name="telefone" />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="e-mail" name="email" />
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="5" placeholder="mensagem"
                                            name="mensagem"></textarea>
                                    </div>
                                    <button type="submit">
                                        enviar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bibliotecas -->
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script type="text/javascript" src="./assets/js/fullpage.min.js"></script>

    <!-- Configs -->
    <script type="text/javascript">
    // FullPage
    var myFullpage = new fullpage("#fullpage", {
        controlArrows: true,
        navigation: true
    });

    // Reveal
    AOS.init();

    // Play/Pause
    function aud_play_pause() {
        var myAudio = document.getElementById("music");
        if (myAudio.paused) {
            $("#stateicon").removeClass("fa fa-play");
            $("#stateicon").addClass("fa fa-pause");
            myAudio.play();
        } else {
            $("#stateicon").removeClass("fa fa-pause");
            $("#stateicon").addClass("fa fa-play");
            myAudio.pause();
        }
    }
    </script>
</body>

</html>