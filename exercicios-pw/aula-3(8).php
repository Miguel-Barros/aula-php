<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios PW - Aula 3</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            vertical-align: baseline;
            list-style: none;
            border: 0;
            font-family: sans-serif;
            outline: none;
        }

        body {
            background-color: #FFFAFA;
        }

        h2 {
            margin-top: 15%;
            opacity: .8;
        }

        header {
            width: 100%;
            height: 9vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: radial-gradient(circle, rgba(255, 140, 0, 1) 25%, rgba(255, 163, 37, 1) 47%, rgba(255, 177, 0, 1) 100%);
            box-shadow: 0 0 1em rgba(255, 140, 0, 1);
        }

        .container {
            width: 100%;
            height: 85vh;
            display: flex;
        }

        .sidebar {
            width: 20%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            border-right: 2px solid rgb(255, 165, 0, 0.6);
        }

        .main {
            width: 80%;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .content {
            width: 90%;
            height: 85%;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
        }

        li {
            list-style: none;
            background-color: rgba(255, 140, 0, .5);
            padding: 16px 35px;
            margin: 5px 5px 4px;
            border-radius: 10px;
            transition: all .2s ease-in;
            cursor: pointer;
            text-align: center;
            font-size: 16px;
            color: rgb(0, 0, 0, 0.4);
        }

        li:hover {
            background-color: rgba(255, 140, 0, 1);
            color: rgb(0, 0, 0, 1);
            box-shadow: 0 0 1em rgba(255, 140, 0, 1);
        }

        a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            cursor: pointer;
            margin: 10px;
        }

        footer {
            display: flex;
            align-items: flex-end;
            justify-content: center;
            color: rgb(0, 0, 0, 0.4);
            margin-left: 20%;
        }

        .title {
            width: 90%;
            margin-left: 3%;
            margin-right: 3%;
            border-bottom: 1.5px solid rgb(255, 165, 0, 0.6);
            padding: 1.3rem;
        }

        input {
            text-align: center;
            width: 245px;
            height: 30px;
            border: 1px solid rgb(255, 165, 0, 1);
            border-radius: 16px;
            font-size: 15px;
            padding: .5rem;
            margin: 1%;
            transition: all .2s;
        }

        input:focus {
            box-shadow: 0 0 1em rgba(255, 140, 0, 1);
        }

        .btn {
            width: 200px;
            height: 45px;
            background: rgba(255, 140, 0, 0.5);
            border-radius: 8px;
            font-weight: 600;
            transition: all .3s;
            cursor: pointer;
        }

        .btn:hover {
            background: rgba(255, 140, 0, 1);
            box-shadow: 0 0 1em rgba(255, 140, 0, 1);
        }

        p {
            opacity: .5;
            margin: .5%;
        }

        .circle {
            width: 175px;
            height: 175px;
            justify-content: center;
            align-items: center;
            border: 2px solid #daa520;
            box-sizing: border-box;
            border-radius: 100%;
            margin: 3% 43%;
        }

        .circle img {
            height: 100%;
            width: 100%;
            border-radius: 100%;
        }

        .raio img {
            height: 20%;
            width: 20%;
            padding: 1%;
            border-radius: 100%;
            opacity: .5;
        }

        .hipotenusa img {
            height: 30%;
            width: 30%;
            padding: 1%;
            border-radius: 100%;
            opacity: .5;
        }

        .imc img {
            position: absolute;
            height: 40%;
            width: 20%;
            left: 35%;
            margin-top: 3%;
            border-radius: 100%;
            opacity: .9;
        }

        .g-color {
            background: linear-gradient(105deg, #ffab00, #ffbf3c, #ff8e0b, #ffa000);
            background-size: 800% 800%;

            -webkit-animation: B-Color 26s ease infinite;
            -moz-animation: B-Color 26s ease infinite;
            animation: B-Color 26s ease infinite;
        }

        .feedback img {
            height: 30%;
            width: 30%;
            padding: .5%;
            opacity: .5;
        }

        @-webkit-keyframes B-Color {
            0% {
                background-position: 0% 15%
            }

            50% {
                background-position: 100% 86%
            }

            100% {
                background-position: 0% 15%
            }
        }

        @-moz-keyframes B-Color {
            0% {
                background-position: 0% 15%
            }

            50% {
                background-position: 100% 86%
            }

            100% {
                background-position: 0% 15%
            }
        }

        @keyframes B-Color {
            0% {
                background-position: 0% 15%
            }

            50% {
                background-position: 100% 86%
            }

            100% {
                background-position: 0% 15%
            }
        }
    </style>
</head>

<body>
    <header class="g-color">
        <p style="display: none;">.</p>
    </header>
    <div class="container">
        <div class="sidebar">
            <div class="content">
                <ul>
                    <a href="aula-3.php?task=SingIn">
                        <li>Cadastro de Usu??rio</li>
                    </a>
                    <a href="aula-3.php?task=School">
                        <li>Sistema de m??dia</li>
                    </a>
                    <a href="aula-3.php?task=CircleArea">
                        <li>Ar??a de um circulo</li>
                    </a>
                    <a href="aula-3.php?task=Hypotenuse">
                        <li>Calculo de hipotenusa</li>
                    </a>
                    <a href="aula-3.php?task=Vowel">
                        <li>Vogal e consoante</li>
                    </a>
                    <a href="aula-3.php?task=CalcofThree">
                        <li>Calculo tres notas</li>
                    </a>
                    <a href="aula-3.php?task=Ordener">
                        <li>Crescente e decrescente</li>
                    </a>
                    <a href="aula-3.php?task=IMC">
                        <li>Calculo de IMC</li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="main">
        <?php 
    $imc = number_format(floatval($_POST['peso']) / (floatval($_POST['altura']) ** 2), 2, '.', '');
    if($imc <= 18.4){
        //abaixo
        echo "<h2>Seu IMC ?? $imc, voc?? esta abaixo do peso.</h2>";
    }elseif($imc >= 18.5 and $imc <= 24.9){
        //peso normal
        echo "<h2>Seu IMC ?? $imc, voc?? esta com o peso ideal.</h2>";
    }elseif($imc >= 25.0 and $imc <= 29.9){
        // sobrepeso
        echo "<h2>Seu IMC ?? $imc, voc?? esta com sobrepeso.</h2>";
    }elseif($imc >= 30.0 and $imc <= 34.9){
        //Obesidade grau 1
        echo "<h2>Seu IMC ?? $imc, voc?? esta com obesidade grau 1.</h2>";
    }elseif($imc >= 35.0 and $imc <= 39.9){
        //obesidade grau 2
        echo "<h2>Seu IMC ?? $imc, voc?? esta com obesidade grau 2.</h2>";
    }elseif($imc >= 40.0){
        //obesidade grau 3
        echo "<h2>Seu IMC ?? $imc, voc?? esta com obesidade grau 3.</h2>";
    }
?>
        <div class="feedback"><img src="https://images.tcdn.com.br/img/img_prod/1028449/botao_de_plastico_halloween_abobora_branca_ref_353_715_1_dad4a03171ce6dd2a0c15ff735fc0f87.jpg"></div>
        </div>
    </div>
    <footer>
        <p>2022 ?? Miguel B.</p>
    </footer>
</body>

</html>

