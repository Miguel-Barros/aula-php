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

        .ghost img {
            height: 30%;
            width: 30%;
            padding: 1%;
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
            $page = $_GET['task'];
            if ($page == "SingIn") {
                echo '<div class="title"><h1>Cadastro de usuario</h1></div>
                <div class="circle"><img src="https://cea.vtexassets.com/arquivos/ids/50541168/Camiseta-Infantil-de-Algodao-Abobora-Halloween-Manga-Curta-Laranja-1001592-Laranja_2.jpg?v=637656983594670000" alt="Abroba"></div>
        <form action="aula-3(1).php" method="post">
        <input type="text" id="nome" name="nome" placeholder="Insira seu nome"><br>
        <input type="number" id="idade" name="idade" placeholder="Insira sua idade"><br>
        <input type="submit" class="btn" value="Cadastrar">
    </form>';
            } elseif ($page == "School") {
                echo '<div class="title"><h1>Sistema de média</h1></div>
        <form action="aula-3(2).php" method="post">
        <p>Sistema de calculo de média de aluno, com base nas informações passadas.</p>
        <input type="number" id="notas" name="nota-1" placeholder="Primeira nota"><br>
        <input type="number" id="notas" name="nota-2" placeholder="Segunda nota"><br>
        <input type="number" id="notas" name="nota-3" placeholder="Terceira nota"><br>
        <input type="number" id="notas" name="nota-4" placeholder="Quarta nota"><br>
        <input type="number" id="notas" name="nota-5" placeholder="Quinta nota"><br>
        <input type="submit" class="btn" value="Calcular">
    </form>';
            } elseif ($page == "CircleArea") {
                echo '<div class="title"><h1>Area de um circulo</h1></div>
        <form action="aula-3(3).php" method="post">
        <p>Sistema para descobrir a área de um cirulo, com base nas informações passadas.</p>
        <div class="raio"><img src="https://escolaeducacao.com.br/wp-content/uploads/2020/05/circunferencia-3.png"></div>
        <input type="number" id="valor-r" name="valor-r" placeholder="Insira o Raio"><br>
        <input type="submit" class="btn" value="Calcular">
    </form>';
            } elseif ($page == "Hypotenuse") {
                echo '<div class="title"><h1>Calculo de hipotenusa</h1></div>
        <form action="aula-3(4).php" method="post">
        <p>Sistema para calcular a hipotenusa de triangulo retângulo, com base nas informações passadas.</p>
        <div class="hipotenusa"><img src="https://escolaeducacao.com.br/wp-content/uploads/2020/01/hipotenusa-catetos-teorema-pitagoras.png"></div>
        <input type="number" id="valor-x" name="valor-x" placeholder="Insira o valor B"><br>
        <input type="number" id="valor-y" name="valor-y" placeholder="Insira o valor C"><br>
        <input type="submit" class="btn" value="Calcular">
    </form>';
            } elseif ($page == "Vowel") {
                echo '<div class="title"><h1>Vogal ou consoante</h1></div>
        <form action="aula-3(5).php" method="post">
        <p>Sistema para verificar se uma letra é vogal ou consoante.</p>
        <input type="text" id="letra" name="letra" placeholder="Insira uma letra"><br>
        <input type="submit" class="btn" value="Verificar">
    </form>
    ';
            } elseif ($page == "CalcofThree") {
                echo '<div class="title"><h1>Calculo de tres</h1></div>
        <form action="aula-3(6).php" method="post">
        <p>Sistema para determinar a aprovação do aluno, de acordo com as informações passadas.</p>
        <input type="number" id="n-1" name="n-1" placeholder="Primeira nota"><br>
        <input type="number" id="n-2" name="n-2" placeholder="Segunda nota"><br>
        <input type="number" id="n-3" name="n-3" placeholder="Terceira nota"><br>
        <input type="submit" class="btn" value="Calcular média">
    </form>
    ';
            } elseif ($page == "Ordener") {
                echo '<div class="title"><h1>Crescente e decrescente</h1></div>
        <form action="aula-3(7).php" method="post">
        <p>Sistema para ordenar sequência de numeros passados.</p>
        <input type="number" id="number" name="number-1" placeholder="Primeiro numero"><br>
        <input type="number" id="number" name="number-2" placeholder="Segundo numero"><br>
        <input type="number" id="number" name="number-3" placeholder="Terceiro numero"><br>
        <input type="submit" class="btn" value="Ordenar">
    </form>';
            } elseif ($page == "IMC") {
                echo '<div class="title"><h1>Calculo de IMC</h1></div>
        <form action="aula-3(8).php" method="post">
        <p>Sistema para calcular o IMC ideal de uma pessoa, com base nas informações passadas</p>
        <div class="imc"><img src="https://cdn-icons-png.flaticon.com/512/76/76905.png"></div>
        <input type="text" id="peso" name="peso" placeholder="Insira o peso"><br>
        <input type="text" id="altura" name="altura" placeholder="Insira o a altura"><br>
        <input type="submit" class="btn" value="Calcular IMC">
    </form>';
            } else {
                // error page
                echo "
                <h1 style='
                font-align: center;
                margin-top: 15%;
                opacity: .5;
                '>Page not found (Error - 404)</h1>
                <div class='ghost'><img src='https://www.kindpng.com/picc/m/149-1494200_transparent-cute-ghost-png-middle-finger-cute-png.png'></div>
                ";
            }
            ?>

        </div>
    </div>
    <footer>
        <p>2022 © Miguel B.</p>
    </footer>
</body>

</html>