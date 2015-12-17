<?php

	function conexaoDB(){

	try{
		$dbconfig = include("dbconfig.php");
		if (!isset($dbconfig['dbinfo'])){
			throw new \InvalidArgumentException("Configuração de banco de dados não existe!");
			$host = (isset($config['db']['host'])) ? $config['db']['host'] : null;
			$dbname = (isset($config['db']['dbname'])) ? $config['db']['dbname'] : null;
			$user = (isset($config['db']['user'])) ? $config['db']['user'] : null;
			$password = (isset($config['db']['password'])) ? $config['db']['password'] : null;

			return new \PDO("mysql:host={$host};dbname={$dbname}",$user,$password);
		}

	}catch(\PDOException $e) {
			echo "Erro de conexão com o banco de dados! Erro Código: ".$e->getCode()."\n";
			echo "Stack trace do erro:".$e->getTraceAsString()."\n";
	}

	}
 ?>