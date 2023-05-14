<?php
     include_once("header.php");
?>
<div class="container">
    <h1> Exemplo 3 </h1>
    <?php
    $vetor = array(1,2,3,4,5,6);
    $palavras = array("OI","TUDO","BEM");
    $vetorX = array("Oi",4,5,6,"Texto");
    $vetor1 = array(1=>3,100=>1,5=>"Maça");
    $vetor2 = array("maça" => 100,"b"=>"texto");
    
    var_dump($vetor1);
    echo "<br>";
    print_r($vetor1);
    
    echo "<br><br>";
    foreach($vetor as $chave => $valor)
    {
        echo " $valor ";
    }

    echo "<br><br>";
    foreach($vetor as $chave => $valor)
    {
        echo " $valor ";
        if($chave==2)
        {
            break;
        }
    }

    echo "<br><br>";
    $vetor3 = $vetor+$vetor2;
    print_r($vetor3);

    $b = $vetor1 == $vetor2;
    echo "<br><br>";
    echo"Vetor1 é igual ao Vetor2: $b";  
    
    unset($vetor[2]);
    echo "<br><br>";
    print_r($vetor);

    unset($vetor1);
    ?>
</div>