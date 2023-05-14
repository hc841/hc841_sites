<?php
include_once("header.php");
?>
<div class="container">
    <h1>exemplo3</h1>
    <?php
    //vetores - arreys
    $vetor = array(1, 2, 3, 4, 5, 6);
    $palavras = array("oi", "tudo", "na", "paz");
    $vetorX = array("oi", 4, 5, 6, "texto");
    $vetor1 = array(1 => 0, 100 => 1, 5 => "calvo");
    $vetor2 = array("maça" => 100, "b" => "texto");

    //impressão de vetores
    var_dump($vetor1);
    echo "<br>";
    print_r($vetor1);
    echo "<br>";
    foreach ($vetor as $chave => $valor) {
        echo "$valor";
    }

    echo "<br>";

    foreach ($vetor as $chave => $valor) {
        echo "$valor";
        if($chave == 2){
            break; //encerra a repetição
        }
    }
    echo "<br>";
    //unir vetores
    $vetor3 = $vetor+$vetor2;
    print_r($vetor3);

    echo "<br>";

    $b = $vetor1 == $vetor2;
    echo "vetor 1 é igual a vetor 2: $b";

    echo "<br>";

    //remove item do vetor
    unset($vetor[2]);
    print_r($vetor2);

    //apagar vetor
    unset ($vetor1);
    ?>
</div>