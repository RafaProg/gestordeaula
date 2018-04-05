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
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">GestorDeAulas</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <li><a href="/dash">HOME</a></li>
              <li><a href="#">MINHAS AULAS</a></li>
              <li><a href="#">BANCO DE QUESTÕES</a></li>
              <li><a href="/lista/professor">CRUD</a></li>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EXEMPLOS<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                        <li><a href="#">Outro Exemplo</a></li>
                        <li><a href="#">Outro Exemplo</a></li>
                        <li><a href="#">Outro Exemplo</a></li>
                  </ul>
              </li>
              <li>      
                    <button type="button" class="btn btn-warning navbar-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            #Nome do Usuario <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu">
                            <li><a href="#" class="btn btn-info">Configurações</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#" class="btn btn-danger">Sair</a></li>
                          </ul>
                <!--<a href="#" class="btn btn-warning">SAIR</a>-->
              </li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>