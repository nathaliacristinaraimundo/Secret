<?php
	require ('funcoes.php');
	$segredos = buscarFeed('isabela');	
	$comentarios = buscarComentarios(10); 
	$pessoas = buscarPessoas('liv'); 
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