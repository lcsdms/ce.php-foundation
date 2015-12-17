<?php
	require_once("scripts/conexao.php");
	$conn = conexaoDB();
	$query = "select * from servicos";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$servicos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<h2>Serviços</h2>

<?php foreach ($servicos as $servico) {
	echo '<div class="col-md-4">';
		echo "<h3>{$servico['titulo']}</h3>";
		echo "<p>{$servico['descricao']}</p>";
		echo '<p><a class="btn btn-default" href="#" role="button">Ver detalhes »</a></p>';
	echo "</div>";
} ?>
