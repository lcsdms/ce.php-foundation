<?php
/* Hashing de senha */
/* Utilizar criptografia é bom mas nao é 100% seguro */
$senha = sha1("123456");
echo "senha hash sem salt: ".$senha."\n";

/* O ideal seria a utilização de um salt junto:*/
$salt = "frase exemplo salt";
$senha = sha1("123456".$salt);
echo "senha hash com salt: ".$senha."\n";


/* Porem mesmo usando nao é 100% seguro, por isso foi criado uma API para auxiliar na criação da senha*/
/* o parâmetro PASSWORD_DEFAULT utiliza bcrypt */
$senha = password_hash("123456", PASSWORD_DEFAULT);
echo "senha utlizando a API: ".$senha."\n";

if(password_verify(123456, $senha)){
    echo "senha validada com sucesso";
}else{
    echo "senha incorreta";
}
