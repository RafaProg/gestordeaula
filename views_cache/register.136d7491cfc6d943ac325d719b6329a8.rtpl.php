<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Aplicação ipotetica desenvolvida para obtenção de nota da disciplina ministrada pelo professor Marcos Eduardo - UNICATOLICA">
    <meta name="keywords" content="Rafael Fernandes, Unicatolica, Gestor de Aulas, Especialização em Desenvolvimento de Sistemas Web">
    <meta name="author" content="Rafael Fernandes Vieira">
    <title>Gestor de Aulas | Home</title>

    <!-- Bootstrap -->
    <link href="../resource/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- ### MENU ### -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">GestorDeAulas.com</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" method="POST" action="/login">
            <div class="form-group">
              <div class="input-group">
                 <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-user"></span></span>
                <input type="text" name="usuario" placeholder="Email" class="form-control">      
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                  <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-lock"></span></span>
                <input type="password" name="senha" placeholder="Senha" class="form-control">
              </div>
            </div>
            <div class=" btn-group" role="group">
                <button type="submit" class="btn btn-success">Entrar</button>
            </div>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col">
        <div class="jumbotron">
            <div class="container">
              <div class="page-header">
                <h1>Cadastro de Usuario.</h1>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form method="post" action="/cadastrar/usuario">
                                <div class="col-xs-12">
                                    <p class="text-primary"><strong>Cadastro</strong></p>
                                </div>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="usuario" placeholder="Nome de usúario">
                                    <br>
                                    <input type="text" class="form-control" name="nome" placeholder="Nome Completo">
                                    <br>
                                    <input type="text" class="form-control" name="email" placeholder="E-mail">
                                    <br>
                                    <input type="text" class="form-control" name="titulacao" placeholder="Titulação do Professor">
                                </div>
                                <div class="col-xs-6">
                                    <input type="password" class="form-control" name="senha" placeholder="Senha">
                                    <br>
                                    <input type="password" class="form-control" name="confirmasenha" placeholder="Confirme a senha">
                                    <br>
                                    <br>
                                    <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                                </form>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      </div>


    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../resource/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>