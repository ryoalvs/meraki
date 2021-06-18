<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meraki | Página Inicial</title>
    <link rel="icon" type="image/svg+xml" href="_img/_svg/icons/favicon.svg">
    <link rel="stylesheet" href="_css/standart-header-footer.css">
    <link rel="stylesheet" href="_css/homepage.css">
    <link rel="stylesheet" href="_css/highlights-slider.css">
    <link rel="stylesheet" href="_css/products-carousel.css">
</head>
<body>
    <header class="bg-dark-blue color-white">

        <section class="header">
            <div class="container">
                <div class="align-itens-center d-flex ">
                    <div class="logoArea">
                        <div class="header-logo">
                            <a href="#" class="svg">
                                <object data="_img/_svg/icons/logo.svg" type="image/svg+xml" class="hLogo"></object>
                            </a>
                        </div>
                    </div>
                    
                    <div class="srcArea">
                        <fieldset class="busca">
                            <!-- <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                buscar por
                                ::after
                            </button>
                            <div class="dropdown-menu">
                            </div> -->
                            <input type="text" name="srcField" id="src">
                            <input type="submit" value="Buscar" class="btn-buscar">
                        </fieldset>
                    </div>

                    <div class="iconsArea">
                        <div class="align-itens-center d-flex">
                            <div class="txt">
                                <p>Olá, seja bem vinde!</p>
                                <p id="login-logout-text">faça <a href="login.php">login</a> ou <a href="cadastro.php">cadastre-se</a></p>
                            </div>
                            <a href="#" class="svg">
                                <object data="_img/_svg/icons/user.svg" type="image/svg+xml" class="hIcon"></object>
                            </a>
                            <a href="#" class="svg">
                                <object data="_img/_svg/icons/pack.svg" type="image/svg+xml" class="hIcon"></object>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="nav">
                <nav class="navBar align-itens-center d-flex">
                    <div class="container">
                        <div class="topics">
                            <div class="d-flex">
                                <a href="#" class="navBarCat svg topic">
                                    <span>
                                        <object data="_img/_svg/icons/menuHamburger.svg" type="image/svg+xml"></object>
                                        Categorias
                                    </span>
                                </a>
                                <a href="#" class="topic">livros</a>
                                <a href="#" class="topic">geek</a>
                                <a href="#" class="topic">eBooks</a>
                                <a href="#" class="topic">ofertas</a>
                                <a href="#" class="topic">populares</a>
                                <a href="#" class="topic">sobre nós</a>
                            </div> 
                        </div>
                    </div>
                </nav>
        </section>
    </header>

    <main>

        <section class="highlights">

            <div class="slider">
                <div class="slides">
                    <!-- radio buttons start -->
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <!-- radio buttons start -->
                    <!-- slide images start -->
                    <?php @include_once '_php/slide-imagens.php';?>
                    <!-- slide images end -->
                    <!-- automatic navigation start -->
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>
                    <!-- automatic navigation end -->
                    <!-- manual navigation start -->
                    <div class="navigation-manual">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                        <label for="radio3" class="manual-btn"></label>
                        <label for="radio4" class="manual-btn"></label>
                    </div>
                    <!-- manual navigation start -->
                </div>
            </div>

            <script src="_js/auto-slider.js"></script>

        </section>

        <section class="main-content">

            <div class="news">
                <div class="container">
                    <div class="main-content-headers">
                        <h2>Últimas novidades!!</h2>
                        <p>olha só o que acabou de chegar no catálogo da loja! corre logo antes que acabe <img src="_img/_svg/emojis/emoji1.png">
                        </p>
                    </div>

                    <div class="main-content-products">
                        <?php @include '_php/products-carousel.php';?>
                    </div>
                </div>
            </div>

            <div class="offers">
                <div class="container">
                    <div class="main-content-headers">
                        <h2>Ofertas!!</h2>
                        <p>sente o cheirinho... aaah... sentiu? são as promoções que eu acabei de adicionar no meu site, vem ver!!<img src="_img/_svg/emojis/emoji2.png">
                        </p>
                    </div>

                    <div class="main-content-products">
                        <?php @include '_php/products-carousel.php';?>
                    </div>
                </div>
            </div>

            <div class="month-theme">
                <div class="container">
                    <div class="main-content-headers">
                        <sub>TEMA DO MÊS:</sub>
                        <h2>O amor está no ar...</h2>
                        <p>pega o lencinho e se prepara pro choro porque os romances estão com tudo por aqui no Mês do Romance na Meraki!! <img src="_img/_svg/emojis/emoji3.png">
                        </p>
                        <sup>Todos os livros de romance com até 35% de desconto!!!</sup>
                    </div>

                    <div class="main-content-products">
                        <?php @include '_php/month-products-carousel.php';?>
                    </div>
                </div>
            </div>
            
        </section>

    </main>

    <footer class="bg-dark-blue color-white">
        <section class="footer">
            <div class="container">
                <div class="align-itens-center d-flex">
                    <div class="footer-text">
                        <p>Livraria Meraki.
                            <br>Todos os direitos reservados. &copy;
                        </p>
                    </div>
                    <div class="medias d-flex">
                        <a href="#" class="svg">
                            <object data="_img/_svg/icons/facebook.svg" type="image/svg+xml" class="social-media"></object>
                        </a>
                        <a href="#" class="svg">
                            <object data="_img/_svg/icons/instagram.svg" type="image/svg+xml" class="social-media"></object>
                        </a>
                        <a href="#" class="svg">
                            <object data="_img/_svg/icons/twitter.svg" type="image/svg+xml" class="social-media"></object>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </footer>
</body>
</html>