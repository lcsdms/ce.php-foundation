<?php
require_once("scripts/conexao.php");
if (isset($_POST['submit_busca'])) {
	$busca = $_POST['busca'];
	$querybusca = "%".$busca."%";
	$conn = conexaoDB();
	$query = "select * from paginas where titulo like :busca or descricao like :busca";
	$stmt = $conn->prepare($query);
	$stmt->bindValue("busca",$querybusca);
	$stmt->execute();

	$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
	if (sizeof($resultado) >= 1) {
		$msgResultado = "Foi encontrado ".sizeof($resultado)." resultado(s) com a palavra chave: <b>".$busca."</b>";
	}else{
		$msgResultado = "Não foram encontrados resultados com a palavra chave: <b>".$busca."</b>";
	}
}

 echo $msgResultado."<br>";

 if(sizeof(resultado)>= 1){
 	foreach ($resultado as $pagina) {
 		echo '<div class="col-md-4">';
		echo "<h3>Página: {$pagina['titulo']}</h3>";
		echo "<p>{$pagina['descricao']}</p>";
		echo '<p><a class="btn btn-default" href="'.$pagina['url'].'" role="button">Visitar Página »</a></p>';
	echo "</div>";
 	}
 }
 ?>

