<?php
	require_once("scripts/conexao.php");
	$conn = conexaoDB();
	$query = "select * from paginas where url = 'home'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$pagina = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<h2><?php echo $pagina['titulo'] ?></h2>

<p><?php echo $pagina['descricao'] ?></p>