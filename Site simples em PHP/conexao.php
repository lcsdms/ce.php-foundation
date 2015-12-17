<?php
	try{
		$conexao = new \PDO("mysql:host=localhost;dbname=pdo","root","root");
	}catch(\PDOException $e) {
		die("Erro de conexão com o banco de dados! Erro Código: ".$e->getCode().": ".$e->getMessage());
	}

 ?>