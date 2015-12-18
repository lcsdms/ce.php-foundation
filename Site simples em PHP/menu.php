<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
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
                <li class="link-cpanel <?php exibeElementosLogado(); ?>"><a href="cpanel"><span class="glyphicon glyphicon-wrench"></span> Configuração do site</a></li>

            </ul>

            <form class="navbar-form navbar-left form-busca" method="post" action="/busca" accept-charset="utf-8">
                <div class="form-group">
                    <input type="text" name="busca" placeholder="Digite sua busca" class="form-control">
                </div>
                <button type="submit" name="submit_busca" class="btn btn-success">Buscar</button>
            </form>


            <button type="button" class="btn btn-primary navbar-btn navbar-right <?php exibeBotaoLogin(); ?>" data-toggle="modal"
                    data-target="#modal-login">
                Administração
            </button>

            <div id="modal-login" class="modal fade" tabindex="-1" role="dialog"
                 aria-labelledby="mySmallModalLabel">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form class="form-login" method="post" action="login.php" accept-charset="utf-8">
                            <div class="modal-header">
                                <h5>Insira suas credenciais para acessar a área administrativa</h5>
                            </div>
                            <div class="modal-body">

                                <div class="form-group">
                                    <label for="login" class="control-label">Login: </label>
                                    <input type="text" name="login" placeholder="Login" class="form-control">

                                </div>
                                <div class="form-group">
                                    <label for="password" class="control-label">Senha: </label>
                                    <input type="password" name="senha" placeholder="Senha" class="form-control">
                                </div>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                <button type="submit" name="submit_login" class="btn btn-success">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
</nav>
