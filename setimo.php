<?php 

	$salario = 1585;
	$result = 0
	
if ($salario > 0 && $salario <= 1500) {
		$result = $salario - ($salario * 10/100);
		echo "Seu salário bruto é de:  $salario";
		echo "Porcentagem do desconto: 10%";
		echo "Seu salario é igual a:  $result";
	} 
if ($salario >= 1501 && $salario <= 1600) {
		$result = $salario - ($salario * 15/100);
		echo "Seu salário bruto é de:  $salario";
		echo "Porcentagem do desconto: 15%";
		echo "Seu salario é igual a:  $result";
	}
if ($salario >= 1601 && $salario <= 1800) {
		$result = $salario - ($salario * 20/100);
		echo "Seu salário bruto é de:  $salario";
		echo "Porcentagem do desconto: 20%";
		echo "Seu salario é igual a:  $result";
	}
if ($salario >= 1801 && $salario <= 2500) {
		$result = $salario - ($salario * 27.5/100);
		echo "Seu salário bruto é de:  $salario";
		echo "Porcentagem do desconto: 27.5%";
		echo "Seu salario é igual a:  $result";
	}
 ?>