<?php
$logado;

function setLogado($boolean){
   global $logado;
    $logado = $boolean;
}

function exibeBotaoLogin(){
    global $logado;
    if($logado){
        echo "no-display";
    }else{
        echo "yes-display";
    }
}
function exibeElementosLogado(){
    global $logado;
    if($logado){
        echo "yes-display";
    }else{
        echo "no-display";
    }

}