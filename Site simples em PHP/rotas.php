<?php
/* Função para verificação de rotas com built-in server */
function verificaRotas(){
    session_start();
    require_once("scripts/funcoes-layout.php");
    if($_SESSION["logado"] == 1){
        setLogado(true);
    }else{
        setLogado(false);
    }
    /* Verificação de rotas */
  /*Pega as informações da URL*/
 $rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
 /* Passa o path da URL para validação, removendo a primeira barra */
 $path = preg_replace("/^\/{1}/","",$rota['path']);

 if ($path == ""){
   $path = "home.php";
 }else{
	    $path .= ".php";
         $rotasCpanel= ["cpanel.php","login.php","edit-paginas.php"];
         if(in_array($path,$rotasCpanel) && $_SESSION["logado"] != 1){
             $path = "acesso-negado.php";
         }
	    if(!file_exists($path)){
	          http_response_code(404);
	          $path = "404.php";
	    }
	}
 return $path;
}
 ?>