<?php 

	$op = 4;

	echo "Escolha:<br/>";
	echo "1 - Banana <br/>";
	echo "2 - Laranja <br/>";
	echo "3 - Abacaxi<br/>";
	echo "4 - Sair <br/><br/>";
	
	switch ($op) {
		case 1:
			echo "Você escolheu banana";
			break;
		
		case 2:
			echo "Você escolheu laranja";
			break;

		case 3:
			echo "Você escolheu abacaxi";
			break;

		case 4:
			echo "Você escolheu sair";
			break;

		default:
			echo "Não sei qual escolher";
			break;
	}

 ?>