<?php

$variavel = "String"; // $ sempre vai indicar a abertura de uma variavel.

echo $variavel . ' tambem pode ser concatenada'; // para concatenar, no php pode ser usado o .

?>
<br><br>

<!-- Exemplo variveis -->
<?php

$nome = "Carlinha";
$cidade = "Mongaguá"; // quase 30
$idade = 10; // quase 30
$sexo = 'F';

echo "Olá meu nome é " . $nome . " tenho " . $idade . " e eu moro a 4km de " . $cidade . " cuidado kkkrsrs.";

// exemplo if
if ($sexo == "M") {
    echo "Sou homem";
} else {
    echo "Sou mulher";
};

?>
<br><br>

<!-- exemplo de operadores-->
<?php

echo "Operadores<br>";
$a = 5 + 1; // soma
$b = 15 / 3; // divisão
$c = 9 % 2; // resto da divisão
$d = 1 ** 9; // potência
$idade++; // incremento
echo " 5 + 1 = " . $a . " SOMA<br>";
echo " 15 / 3 = " . $b . " DIVISÃO<br>";
echo " 9 % 2 = " . $c . " RESTO DA DIVISÃO<br>";
echo " 1**9 = " . $d . " POTÊNCIA<br>";
echo " ++Idade = " . $idade . " INCREMENTO<br>";
echo " --Idade = " . $idade . " DECREMENTO";

?>

<!-- exemplo comparativos -->
<?php
    $x = 5;
    $y = 4;
    $r = "Não";

    if(($x > $y)){$r = "Sim";}else{$r = "Não";}
    echo "<br>X maior que Y ? ".$r;
    if(($x < $y)){$r = "Sim";}else{$r = "Não";}
    echo "<br>X menor que Y ? ".$r;
    if(($x >= $y)){$r = "Sim";}else{$r = "Não";}
    echo "<br>X maior=  que Y ? ".$r;
    if(($x <= $y)){$r = "Sim";}else{$r = "Não";}
    echo "<br>X menor= que Y ? ".$r;
    if(($x != $y)){$r = "Sim";}else{$r = "Não";}
    echo "<br>x diferente de y ? ".$r;
    if(($x <> $y)){$r = "Sim";}else{$r = "Não";}
    echo "<br>x diferente de y? ".$r;
    if(($x == $y)){$r = "Sim";}else{$r = "Não";}
    echo "<br>x = y? ".$r;
?>