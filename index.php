<!DOCTYPE html>
<html lang="ptBr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>&lt;Miguel&gt; - Home</title>
    <link rel="stylesheet" href="./css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="./assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="./assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <section id="home" class='home'>
        <header>
            <div class="container w-50">
                <nav class="d-flex justify-content-center py-3">
                    <ul class="nav nav-pills">
                        <li class="nav-item me-5"><a href="#explore" class="nav-link ">Explore</a></li>
                        <li class="nav-item me-5"><a href="#" class="nav-link ">Sobre</a></li>
                        <li class="nav-item me-5"><a href="#home" class="nav-link"><img style="background-color: #808080;" class="logo" src="./assets/logo.svg" alt=""></a></li>
                        <li class="nav-item me-5"><a href="#" class="nav-link">Suporte</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Search</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <h2>Welcome Children</h2>
            <p>Aqui você ira ver um pouco dos meus<br> projetos diferenciados</p>
        </main>
    </section>

    <section id="#explore" class='explore'>
        <header style="visibility: hidden;">. </header>
        <main data-aos="fade-up" data-aos-duration="2000">
            <div class="container">
                <h2>Aprecie algumas atividades</h2>
                <div class="card-group">
                    <div class="card">
                        <a href="./exercicios-pw/aula-1.php">
                            <img src="./assets/imgs/pre-1.PNG" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Atividade 1</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui harum quas modi omnis libero vitae dolore aliquid similique unde temporibus autem nostrum, fuga vero sapiente quae possimus fugit asperiores tempora?</p>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="./exercicios-pw/aula-3.php">
                            <img src="./assets/imgs/pre-2.PNG" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Atividade 2</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est consequatur sunt rerum odit alias incidunt expedita deserunt aut minima repudiandae at sed, facilis autem, quis natus exercitationem praesentium repellendus esse!</p>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="./exercicios-pw/aula-4.php">
                            <img src="./assets/imgs/pre-3.PNG" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Atividade 3</h5>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci sit at molestias qui et eius eveniet nihil, ut delectus dignissimos, eos sed repudiandae sequi. Non cum cupiditate ipsum et soluta!</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </section>

    <section class="about">
        <header style="visibility: hidden;">.</header>
        <main>
            <div class="container" data-aos="fade-left" data-aos-duration="1500">
                <div class="row row-cols-2">
                    <div class="col">
                        <p>Cria da Pavuna na Zona Norte do RJ e em 2019 conseguiu colocar uns sons para rodar incluindo “Five Black”, “C. Walk” e “Range Rover”, mas foi “Ak do Flamengo” que colocou NGC Borges no radar de todos e está indicando um 2020 recheado de sons e participações.</p>
                    </div>
                    <div class="col">
                        <div class="box" data-aos="fade-left" data-aos-duration="2000">
                            <img src="https://cdns-images.dzcdn.net/images/artist/f72dbd690abe4f176bdac81375d8189f/500x500.jpg" />
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>

    <section class="copy">
        <footer>
            <p data-aos="zoom-in" data-aos-duration="2000">2022 © Barros, Miguel</p>
        </footer>
    </section>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>