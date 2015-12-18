<?php
$erros = [
    "1" , "Usuário ou senha incorretos. Verifique suas informações e tente novamente"
];

if(isset($_GET['code'])){
    $coderro = $_GET['code'];
    if(in_array($coderro,$erros)) {
        $mensagem = $erros[$coderro];
    }else{
        $mensagem = "Ocorreu um erro não identificado. Por gentileza entrar em contato com o administrador do sistema.";
    }

}else{
    $mensagem = "Ocorreu um erro não identificado. Por gentileza entrar em contato com o administrador do sistema.";
}

?>

<div class="alert alert-danger" role="alert">
   <h3> Ocorreu um erro ao processar sua requisição!</h3>
    <p><?php echo $mensagem ?></p>
</div>
