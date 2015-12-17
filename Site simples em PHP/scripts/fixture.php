<?php
	require_once("conexao.php");

	echo "#### Executando fixture para preenchimento de dados no banco ####<br>";
	$conn = conexaoDB();

	echo "Dropando tabela existente de clientes <br>";

	$conn->query("DROP TABLE IF EXISTS clientes;");
	echo "OK <br>";

	echo "Criando tabela de clientes <br>";
	$conn->query("CREATE TABLE clientes (
					id INT NOT NULL AUTO_INCREMENT,
					nome VARCHAR(45) CHARACTER SET 'utf8' NULL,
					email VARCHAR(45) CHARACTER SET 'utf8' NULL,
					PRIMARY KEY (id)
					);
		");
	echo "OK <br>";

	echo "Inserindo dados na tabela";
	$conn->query("INSERT INTO `clientes` VALUES
		(1,'Lucas Dimas Cavalcante Lopes','lucasdcavalcante@gmail.com'),
		(2,'Fulano 1','fulano 1@gmail.com'),
		(3,'Fulano 2','fulano 2@gmail.com'),
		(4,'Fulano 3','fulano 3@gmail.com'),
		(5,'Fulano 4','fulano4@gmail.com');");

	echo "Inserção efetuada com sucesso!<br>";

 ?>