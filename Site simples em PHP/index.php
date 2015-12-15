<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Site Simples</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilo alterado da pagina -->
    <link href="css/estilo.css" rel="stylesheet">

  </head>
  <body>

      <?php require_once("menu.php") ?>

    <h1>Pagina Inicial</h1>

    <div class="row">

      <?php

        /*Verifica se a página é uma página válida*/
        $pagina  = $_GET['arquivo'];
          switch ($pagina) {
            case 'home.php':
              PaginaDinamica();
              break;

            case 'empresa.php':
              PaginaDinamica();
              break;

            case 'produtos.php':
              PaginaDinamica();
              break;

            case 'servicos.php':
              PaginaDinamica();
              break;

            case 'contato.php':
              PaginaDinamica();
              break;

            default:
              require_once("404.php");
              break;
          }
          /* Redirecionamento da página conforme validação*/
          function PaginaDinamica(){
            require_once($_GET['arquivo']);
          }

        ?>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <?php require_once("rodape.php") ?>
  </body>
</html>