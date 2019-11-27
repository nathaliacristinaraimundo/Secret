<?php
	require ('funcoes.php');
	//$segredos = publicarSegredo('Uma vez fingi que desmaiei', 'black', 'white', 'isabela');
	$segredos = buscarFeed('dbconrado');	
	$pessoas = fazerLogin('isabela', '12345');
	//$comentarios = publicarComentario('todicara','isabela',10);
	//$comentarios = excluirComentario(28);
	$comentarios = buscarComentarios(10); 
	//$pessoas = criarConta('thiago', 'abc123');
	$pessoas = excluirConta('thiago','abc123');
	$pessoas = buscarPessoas('thiago');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php foreach ($segredos as $s ): ?>
		<p>
			<?=$s['texto']?>
		</p>
		
	<?php endforeach; ?>	 

	<?php foreach ($comentarios as $c ): ?>
		<p>
			<?=$c['texto']?>
		</p>
	<?php endforeach; ?>	
	<?php foreach ($pessoas as $p ): ?>
		<p>
			<?=$p['username']?>
		</p>
	<?php endforeach; ?>
	

</body>
</html>