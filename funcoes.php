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
	function buscarFeed($username)
	{
		$conexao = criarConexao();
		$sql = "SELECT texto,id from secret S inner join seguidor SS on S.username=SS.seguindo where SS.username=?";
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

?>