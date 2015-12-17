<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Site Simples em PHP</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home">Home</a></li>
        <li><a href="empresa">Empresa</a></li>
        <li><a href="produtos">Produtos</a></li>
        <li><a href="servicos">Serviços</a></li>
        <li><a href="contato">Contato</a></li>

      </ul>

    <form class="navbar-form navbar-right form-busca" method="post" action="/busca" accept-charset="utf-8">
          <div class="form-group">
            <input type="text" name="busca" placeholder="Digite sua busca" class="form-control">
          </div>
          <button type="submit" name="submit_busca" class="btn btn-success">Buscar</button>
    </form>
    </div>
  </div>
</nav>
