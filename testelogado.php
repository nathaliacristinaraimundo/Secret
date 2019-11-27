<?php 
	session_start();
	require ('funcoes.php');
	$resultado= usuarioLogado();
	if($resultado==false)
	{
		echo 'Login Inválido!';
	}
	else
		echo 'O usuário logado é: '.  $resultado;
 ?>