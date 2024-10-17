<?php 
	$Login = $_POST['login'];
	$Senha = $_POST['senha'];

	if ($Login == 'etecia' && $Senha == 'etecia') {
		echo "Bem vindo ao sistema!!!";
	}else{
		echo "Falha ao acessar";
	}
?>