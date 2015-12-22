<?php
require_once("scripts/conexao.php");
/* Consulta para exibição das páginas a serem editadas */
$conn = conexaoDB();
$query = "select * from paginas";
$stmt = $conn->prepare($query);
$stmt->execute();

$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<h2>Painel de controle</h2>

<p>Bem vindo ao painel de controle, que página gostaria de alterar ?</p>

<?php
    if (sizeof($resultado) >= 1) {
        foreach ($resultado as $pagina) {
            echo '<div class="col-md-4">';
            echo "<h3>{$pagina['titulo']}</h3>";
            echo '<p><a class="btn btn-default" href="edit-pagina?id='.$pagina["id"].'" role="button">Editar Página »</a></p>';
            echo "</div>";
        }
    }else{
        echo "<h3> Não existem páginas cadastradas para alteração no sistema.</h3>";
    }
?>

