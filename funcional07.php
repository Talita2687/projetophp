<?php 

function somaValor(){
	echo "Somando...";
 
}
//criando uma funcção em php com parâmetros

function imprimirNome($nome){

	echo "<br/>Olá $nome";

}

function somar($nome1,$nome2){
   return ($nome1 + $nome2);
}


somaValor();
imprimirNome("Talita Linda");
echo ("<br>");
$resultado = somar(10.50,20.0);
echo ("O resultado da soma $resultado");
echo "<br>O resultado direto chamando a função:". somar(30.50,10) + somar(10.50,20.35);

?>
