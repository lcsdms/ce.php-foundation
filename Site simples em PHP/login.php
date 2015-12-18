<?php
session_start();
if ($_SESSION['logado'] != 1 && isset($_POST['submit_login'])) {
    if (isset($_POST['login']) && isset($_POST['senha'])) {
        require_once("scripts/conexao.php");
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $conn = conexaoDB();
        $consulta = "select * from usuarios where login = :login";
        $stmt = $conn->prepare($consulta);
        $stmt->bindValue(":login", $login);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        if (sizeof($usuario == 1)) {
            if ($usuario['login'] == $login && password_verify($senha, $usuario['senha']) == true) {
                $_SESSION["logado"] = 1;
                header('Location: cpanel');
            } else {
                header("Location: erro?code=1");
            }
        } else {

            header("Location: erro?code=1");

        }
    } else {
        header('Location: acesso-negado');
    }
}elseif ($_SESSION['logado'] == 1){
    header('Location: cpanel');
}else{
    header('Location: acesso-negado');
}

function errorRedirect($msg){
    $_POST['msgErro'] = $msg;
    header("erro.php");

}