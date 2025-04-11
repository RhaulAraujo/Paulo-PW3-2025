<?php

function Multiplicar($a,$b){
    return $a*$b;
}

function Divisao($a,$b){
    if ($b== 0){
        echo "Não é possível dividir por 0";
    }
    return $a/$b;
}

function Soma($a,$b){
    return $a+$b;
}

function subtracao($a,$b){
    return $a-$b;
}

$resul1 = 20;

$resumulti = Multiplicar(4, 5);
$resudiv = Divisao(20, 1);
$resusoma = Soma(15, 5);
$resusub = subtracao(25, 5);

if ($resumulti == $resul1){
    echo "Multiplicação: Certo ".$resumulti."<br>";
}else{
    echo "Multiplicação: erro ".$resumulti."<br>";
}


if ($resudiv == $resul1){
    echo "Divisão: Certo ".$resudiv."<br>";
}else{
    echo "Divisão: erro".$resudiv."<br>";
}


if ($resusoma == $resul1){
    echo "Soma: Certo ".$resusoma."<br>";
}else{
    echo "Soma: erro".$resusoma."<br>";
}


if ($resusub == $resul1){
    echo "Subtração: Certo ".$resusub."<br>";
}else{
    echo "Subtração: erro".$resusub."<br>";
}
?>