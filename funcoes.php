<?php
	function criarConexao()
	{
		$banco = "secret";
		$usuario = "misterio";
		$senha = "senha123";
		$conexao = new PDO("mysql:host=localhost;dbname=${banco}",
			$usuario, $senha,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")) ;
		return $conexao;
	}

	function criarConta($username, $senha)
	{
		$conexao = criarConexao();
		$sql = "INSERT INTO `secret`.`usuario`(`username`,`senha`)VALUES (?, ?)";
		$comando = $conexao->prepare($sql);
		return $comando->execute(
				[
					$username,
					$senha
				]
			);
		 
	}
	function excluirConta($username, $senha)
	{
		$conexao = criarConexao();
		$sql = "DELETE FROM usuario WHERE username =? and senha= ?";
		$comando = $conexao->prepare($sql);
		return $comando->execute(
				[
					$username,
					$senha
				]
			);
	}
	function fazerLogin($username, $senha)
	{
		$conexao = criarConexao();
		$sql = "SELECT username from usuario where username=? and senha=?";
		
		$comando = $conexao->prepare($sql);
		$comando->execute(
				[
					$username,
					$senha
				]
			);
		if($comando->rowCount()==0)
		{
			return false;
		}
		else
		{
			$_SESSION['username']=$username;
			return true;
		}
	}

	function usuarioLogado()
	{
		if(empty($_SESSION['username']))
			return false;
		else 
			return $_SESSION['username'];
	}

	function buscarFeed($username)
	{
		$conexao = criarConexao();
		$sql = "SELECT distinct texto,id from secret S inner join seguidor SS on S.username=SS.seguindo where SS.username=?";
		$comando = $conexao->prepare($sql);
		$comando->execute(
				[
					$username
				]
			);
		return $comando->fetchAll();
	}
	function buscarComentarios($id)
	{
		$conexao = criarConexao();
		$sql = "SELECT texto,datahora from comentario where secret_id=?";
		$comando = $conexao->prepare($sql);
		$comando->execute(
				[
					$id
				]
			);
		return $comando->fetchAll();
	}
	function buscarPessoas($username)
	{
		$conexao = criarConexao();
		$sql = "SELECT username from usuario where username like ?";
		$comando = $conexao->prepare($sql);
		$comando->execute(
				[
					$username.'%'
				]
			);
		return $comando->fetchAll();
	}
	function publicarSegredo($texto, $cor_fundo ,$cor_texto, $username)
	{
		$conexao = criarConexao();
		$sql = "INSERT INTO `secret`.`secret`(`id`,`texto`,`cor_fundo`,`cor_texto`,`username`) VALUES(NULL, ?, ?, ?, ?)";
		$comando = $conexao->prepare($sql);
		return $comando->execute(
				[
					$texto,
					$cor_fundo,
					$cor_texto, 
					$username
				]
			);
	}
	function publicarComentario($texto, $username, $secret_id)
	{
		$conexao = criarConexao();
		$sql = "INSERT INTO `secret`.`comentario`(`id`,`texto`,`datahora`,`username`,`secret_id`) VALUES(NULL, ?, NULL, ?, ?)";
		$comando = $conexao->prepare($sql);
		return $comando->execute(
				[
					$texto,
					$username,
					$secret_id
					
				]
			);
	}

	function excluirComentario($id)
		{
			$conexao = criarConexao();
			$sql = "DELETE FROM comentario WHERE id = ?";
			$comando = $conexao->prepare($sql);
			return $comando->execute(
					[
						$id	
					]
				);
	}


?>