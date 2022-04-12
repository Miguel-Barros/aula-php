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
            height: 15%;
            width: 15%;
            padding: 1%;
            opacity: .5;
            border-radius: 50%;
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
                        <li>Cadastro de Usuário</li>
                    </a>
                    <a href="aula-3.php?task=School">
                        <li>Sistema de média</li>
                    </a>
                    <a href="aula-3.php?task=CircleArea">
                        <li>Aréa de um circulo</li>
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
            $notas = [1 => $_POST['n-1'], 2 => $_POST['n-2'], 3 => $_POST['n-3']];
            $media = number_format((($notas[1] + $notas[2] + $notas[3]) / 3), 2, '.', '');
            if ($media == 10) {
                echo "<h2>Parabéns pela média de ($media), você foi aprovado com distinção!!</h2>";
                echo '<div class="feedback"><img style="opacity: .8;" src="data:image/jpeg;base64,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"></div>';
            } elseif ($media >= 7) {
                echo "<h2>Muito bem pela média de ($media), você foi aprovado.</h2>";
                echo '<div class="feedback"><img style="opacity: .8;" src="data:image/jpeg;base64,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"></div>';
            } else {
                echo "<h2>Sua média foi de ($media), você foi reprovado.</h2>";
                echo '<div class="feedback"><img style="opacity: .8;" src="data:image/jpeg;base64,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"></div>';
            }
            ?>

        </div>
    </div>
    <footer>
        <p>2022 © Miguel B.</p>
    </footer>
</body>

</html>