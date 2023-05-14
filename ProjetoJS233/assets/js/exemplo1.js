//alert("Hello world")

//html no javascript
document.write("<h3> meu site em JS</h3>");

//vairaveis
var x = 4;
var y = 'p';
var nome = 'henrique';

//extrutura de seleção
if(x >= 10){
    document.write("<br> X >= 10");
}
else{
    document.write("<br> X < 10");
}

//operadores relacionais
// > maior que
// < menor que
// >= maior igual
// <= menor igual
// = atribuição
// == igualdade
// === igualdade do mesmo tipo
// != diferente

var a = 1;
var b = "1";

if(a===b){
    document.write("<br><br> a é igual a 1");
}
else{
    document.write("<br><br> a é diferente de b");
}
var soma = a + b;
document.write("<br><br>soma: "+soma);

//operadores lógicos
//&& e lógico
// || ou lógico
// ! não lógico

var z = 10;

if(z>=10 && (z>20 || z==45)){
    document.write("<br></br> z>=10 && z<20");
}