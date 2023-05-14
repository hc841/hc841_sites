<?php
include_once("header.php");
?>
<div class="container">
    <h1>exemplo1</h1>
    <?php
    echo "<h2>Escreve na tela</h2>";
    $var = 12345; //inteiro
    $nome = "Henrique"; //string
    $var = 52.6; //fracional float double

    static $param = "01";//varianel estatica
    define("SESSAO","1:00");
    const EXEMPLO = "texto";

    //conversão de operações
    $y = "10";
    $x = $y+20;
    echo "<br> X = $x";

    //apresentação de tela
    echo "<br> nome: $nome!!!";
    echo "<br> nome:" .$nome."!!!";//concatenar
    print("<br> nome: $nome!!!");// imprimir com print
    print("<br> nome:" .$nome."!!!");
    echo '<br> nome:" $nome"!!!';//somente o texto sem a variavel

    $a = 1; $b="001";
    $c = ($a == $b);
    echo "<br> resultado = [ $c ]";
    $c = ($a === $b);
    echo "<br> resultado = [ $c ]";

    $le = TRUE and FALSE;
    $le = TRUE && false;

    $lo = TRUE or FALSE;
    $lo = TRUE or false;

    if(true and true || false){
        echo "<br><br>entrou 1";
    }
    else{
        echo "<br><br>entrou 2";
    }

    $lingua = 1;
    switch($lingua){
        case 1: echo "<br>ingles"; break;
        case 2: echo "<br>portugues"; break;
        case 3: echo "<br>espanhol"; break;
        default: echo "<br>valor invalido"; break;
    }
    ?>
</div>