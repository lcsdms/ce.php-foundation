<?php
	require_once("conexao.php");

	echo "#### Executando fixture para preenchimento de dados no banco ####<br>";
	$conn = conexaoDB();

	echo "Dropando tabelas <br>";

	$conn->query("DROP TABLE IF EXISTS paginas;
				  DROP TABLE IF EXISTS produtos;
				  DROP TABLE IF EXISTS servicos;
		");
	echo "OK <br>";

	echo "Criando tabela de paginas, produtos e serviços <br>";
	$conn->query("CREATE TABLE paginas (
					id INT NOT NULL AUTO_INCREMENT,
					titulo VARCHAR(45) CHARACTER SET 'utf8' NOT NULL,
					descricao VARCHAR(1000) CHARACTER SET 'utf8' NOT NULL,
					url VARCHAR(45) CHARACTER SET 'utf8' NOT NULL,
					PRIMARY KEY (id)
					);

				 CREATE TABLE produtos(
					id INT NOT NULL AUTO_INCREMENT,
					titulo VARCHAR(45) CHARACTER SET 'utf8' NOT NULL,
					descricao VARCHAR(1000) CHARACTER SET 'utf8' NOT NULL,
					PRIMARY KEY (id)
				 	);

				CREATE TABLE servicos(
					id INT NOT NULL AUTO_INCREMENT,
					titulo VARCHAR(45) CHARACTER SET 'utf8' NOT NULL,
					descricao VARCHAR(1000) CHARACTER SET 'utf8' NOT NULL,
					PRIMARY KEY (id)
				 	);
		");
	echo "OK <br>";

	echo "Inserindo dados na tabela de paginas <br>";
	$conn->query("INSERT INTO paginas (id,titulo,descricao,url) VALUES 
				 	(null,'Home','Bem vindo à página inicial do site','home'),
				 	(null,'Empresa','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>','empresa'),
				 	(null,'Produtos','Seguem os produtos oferecidos pela empresa','produtos'),
				 	(null,'Serviços','Seguem os serviços oferecidos pela empresa','servicos'),
				 	(null,'Contato','Entre em contato conosco preenchendo o formulário abaixo','contato');");
	echo "OK <br>";

	echo "Inserindo dados na tabela de produtos<br>";

	$conn->query("INSERT INTO produtos (id,titulo,descricao) VALUES
		(null,'Produto 1','Produto id elit non mi porta gravida at eget metus. Fusce dapibus.'),
		(null,'Produto 2','Produto id elit non mi porta gravida at eget metus. Fusce dapibus.'),
		(null,'Produto 3','Produto id elit non mi porta gravida at eget metus. Fusce dapibus.');");

	echo "OK <br>";

	echo "Inserindo dados na tabela de Serviços<br>";

	$conn->query("INSERT INTO servicos (id,titulo,descricao) VALUES
		(null,'Serviço 1','Serviço id elit non mi porta gravida at eget metus. Fusce dapibus.'),
		(null,'Serviço 2','Serviços id elit non mi porta gravida at eget metus. Fusce dapibus.'),
		(null,'Serviço 3','Serviço id elit non mi porta gravida at eget metus. Fusce dapibus.');");

	echo "OK <br>";

	echo "Todos os dados foram incluidos com sucesso!";
 ?>