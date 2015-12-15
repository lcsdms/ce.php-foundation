<?php if (isset($_POST['submitForm'])) {
	$nome = $_POST['inputNome'];
	$email = $_POST['inputEmail'];
	$assunto = $_POST['inputAssunto'];
	$mensagem = $_POST['inputMensagem'];

	require_once("confirmacao-mensagem.php");

} ?>

<div class="container form-contato">
	<form class="form-signin" method="post" >
        <h2 class="form-signin-heading">Preencha o Formulário de Contato</h2>

        <label for="inputNome" class="sr-only">Nome</label>
        <input type="text" name="inputNome" class="form-control" placeholder="Nome" required="true" autofocus="">

        <label for="inputEmail" class="sr-only">E-mail</label>
        <input type="email" name="inputEmail" class="form-control" placeholder="Email" required="true">

		<label for="inputAssunto" class="sr-only">Assunto</label>
        <input type="text" name="inputAssunto" class="form-control" placeholder="Assunto" required="true">

		<label for="inputMensagem" class="sr-only">Mensagem</label>
        <textarea class="form-control"> </textarea>
        <button class="btn btn-lg btn-primary btn-block" name="submitForm" type="submit">Enviar Mensagem</button>
  	</form>
</div>