<?php
require_once("scripts/conexao.php");
$conn = conexaoDB();
if ((isset($_GET['id'])) && !isset($_POST['submit_update_pagina'])) {
    $idpagina = ($_GET['id']);
    $resultadoPagina = buscaDadosPagina($idpagina,$conn);
}else if(isset($_POST['submit_update_pagina']) && isset($_GET['id'])){
        $idpagina = $_GET['id'];
        $tituloPagina = $_POST['inputTituloPagina'];
        $descricaoPagina = $_POST['inputDescricaoPagina'];
        $query = "update paginas set titulo = :titulo, descricao = :descricao where id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(":titulo",$tituloPagina);
        $stmt->bindValue(":descricao",$descricaoPagina);
        $stmt->bindValue(":id",$idpagina);
        $stmt->execute();
        $mensagem = "A página foi atualizada com sucesso!";
        $resultadoPagina = buscaDadosPagina($idpagina,$conn);
}

function buscaDadosPagina($idPagina,$conn){
    $query = "select * from paginas where id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindValue(":id", $idPagina);
    $stmt->execute();
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    return $resultado;
}

function exibeMensagem($mensagem){
    if($mensagem != null){
        echo "<div class='alert alert-success'>{$mensagem}</div>";
    }
}
?>
<script src="js/ckeditor/ckeditor.js"></script>



<form action="" method="post" class="form-update-pagina">

    <h3>Edição de Páginas</h3>
    <?php exibeMensagem($mensagem); ?>
    <label for="inputTitulo">Titulo da Página</label>
    <input type="text" name="inputTituloPagina" placeholder="Título da página" value="<?php echo $resultadoPagina['titulo']; ?>" class="form-control" required autofocus>
    <input type="hidden" name="id" value="<?php echo $resultadoPagina['id']; ?>">
    <label for="inputDescricaoPagina">Descrição da página</label>
    <textarea name="inputDescricaoPagina" id="editor1" cols="20"
              rows="10"><?php echo $resultadoPagina['descricao']; ?></textarea>

    <button type="submit" name="submit_update_pagina" class="btn btn-success">Atualizar Página</button>

</form>
<script>
    CKEDITOR.replace('editor1');
</script>
