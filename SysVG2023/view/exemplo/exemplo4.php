<?php
     include_once("header.php");
?>
<div class="container">
    <h1> Exemplo 4 </h1>
    <?php
//funções
funcao(); //chamar a função
function funcao(){
    echo "<h3>Entrou na Função</h3>";
}
//Passagem de parâmetros
//Passagem por valor
function escolha($curso, $disciplina)
{
    $curso = "computação";
    echo"<br>$curso : disciplina";
}
$curso = "Informática";
escolha("$curso","Programação II");
echo "<br>bloco principal -> $curso";

//Passagem por referência
function escolha1(&$curso,&$disciplina)
{
    $curso = "computação";
    echo "<br>Função-> S$curso : $disciplina";;
}
$curso = "Informática";
$disciplina = "Programação II";
escolha1($curso, $disciplina);
echo "<br>bloco principal -> $curso";
    ?>
</div>