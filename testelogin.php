<?php 
	session_start();
	require ('funcoes.php');
	$resultado= fazerLogin('isabela','12345');
	if($resultado)
	{
		echo 'Login Realizado!';
	}
	else
		echo 'Login Inválido!';


 ?>