<?php
include_once("header.php");
?>
<div class="container">
    <h1>exemplo4</h1>
    <?php
    funcao();
    function funcao()
    {
        echo "<h3>entrou na função<h3>";
    }
    //passagem de valor
    function escolha($curso, $disciplina)
    {
        $curso = "computação";
        echo "<br>$curso : $disciplina";
    }
    $curso = "informatica";
    escolha($curso, "programação II");
    echo "<br>bloco principal -> $curso";

    //passagem por referencia
    function escolha1(&$curso, &$disciplina)
    {
        $curso = "computação";
        echo "<br>$curso : $disciplina";
    }
    $curso = "informatica";
    $disciplina = "programação II";
    escolha1($curso, $disciplina);
    echo "<br>bloco principal -> $curso";
    ?>
</div>