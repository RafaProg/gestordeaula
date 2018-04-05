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
                <a type="button" class="btn btn-warning" href="/cadastro/usuario">Cadastre-se</a>
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
                <h1>Bem vindo!</h1>
              </div>
              <p>O GestorDeAulas.com é uma ferramenta online, gratuita, de gestão de aulas que possibilita 
                 integrar professores e alunos, facilitando a troca de material, conteúdo e envio de e-mail 
                 de forma ágil e prática.
              </p>
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