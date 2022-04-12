<?php ?>

<section class="about" data-aos="fade-right" data-aos-duration="500">
    <div class="left-content">
        <img class='about-img' src="https://pbs.twimg.com/media/EoZkQN-XcAABnIE.jpg" alt="">
        <p>"Meteu essa?!. Essa aspa é muito forte!"</p>
    </div>
    <main>
        <h2>Sobre nós</h2>
        <div class="box">
            <p><b>Nome:</b> Casimiro Miguel Vieira da Silva Ferreira</p>
            <p><b>Data de nascimento:</b> 20/10/1993</p>
            <p><b>Cargo:</b> Streamer</p>
            <p><b>Biografia:</b> Casimiro Miguel Vieira da Silva Ferreira ou somente Casimiro é um jornalista e streamer. Cazé, como é conhecido por amigos e fãs, é um dos maiores criadores de conteúdo da Twitch, plataforma de vídeo que é focada principalmente no mundo dos gamers.</p>
            <p>Casimiro começou a se destacar dois anos depois, em 2021, após passar a fazer lives diárias na Twitch. Com o seu bordão "meteu essa?" (que se tornou um meme na Internet), tornou-se uma sensação ao fazer suas transmissões de um jeito descontraído, misturando futebol com humor.</p>
        </div>
        <a class="floating" onclick="plusDivs(+1)"><img src="assets/skip.svg" alt=""></a>
        <footer>
            <p>2022 © Miguel B.</p>
        </footer>
    </main>
</section>

<script>
    var slideIndex = 0;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("person");
        if (n > x.length) {
            slideIndex = 0
        }
        if (n < 1) {
            slideIndex = x.length
        };
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex - 1].style.display = "block";
    }
</script>