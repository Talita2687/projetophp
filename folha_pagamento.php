<?php 

	$salBruto = 5000;
	

	printf("Salário bruto: R$ %.2f <br/>",$salBruto);
	


	if ($salBruto <= 2428.80) {
		$vDesconto = 0;
	}
	if($salBruto >= 2428.01 && $salBruto <= 2826.65){
		$vDesconto = 7.5;
	}
	if($salBruto >= 2826.66 && $salBruto <= 3751.05){
		$vDesconto = 12.5;
	}
	if($salBruto >= 3751.06 && $salBruto <= 4664.68){
		$vDesconto = 22.5;
	}
	if($salBruto > 4664.68){
		$vDesconto = 27.5;
		$valorDescontado = ($salBruto * $vDesconto /100);
		$salLiquido = $salBruto - $valorDescontado;

	}

	print("<br/>");
	print("Tabela do imposto de renda <br/>");
	print("<br/>");
	print("Porcentagem de desconto: $vDesconto %<br/>");
	printf("Valor do desconto: R$ %.2f <br/>", $valorDescontado);

	printf("Salário líquido: R$ %.2f", $salLiquido);


 ?>