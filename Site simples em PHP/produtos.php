<?php
	require_once("scripts/conexao.php");
	$conn = conexaoDB();
	$query = "select * from produtos";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<h2>Produtos</h2>

<?php foreach ($produtos as $produto) {
	echo '<div class="col-md-4">';
		echo "<h3>{$produto['titulo']}</h3>";
		echo "<p>{$produto['descricao']}</p>";
		echo '<p><a class="btn btn-default" href="#" role="button">Ver detalhes »</a></p>';
	echo "</div>";
} ?>

