<?php
session_start();
require 'vendor/autoload.php';

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Code\PageProcessor\PagesProcessor;
use Code\Model\User;
use Code\Model\Teacher;
use Slim\App;

//Configuracao Slim
$config = array(
    'settings' => [
        'displayErrorDetails' => true
    ]
);

$app = new App($config);

//Rotas
$app->get('/', function (Request $request, Response $response) {
    
    
    $page = new PagesProcessor();
    $page->render('home', []);
    
})->setName('home');

$app->get('/cadastro/usuario', function (Request $request, Response $response) {
    
    
    $page = new PagesProcessor();
    $page->render('register', []);
    
});

$app->get('/dash', function (Request $request, Response $response) {
    
    User::loginVerify();

    $page = new PagesProcessor();
    $page->render('dashboard', [
        "nome"=>"novo teste"
    ]);
    
})->setName('dash');

$app->get('/lista/professor', function (Request $request, Response $response) {
    
    User::loginVerify();

    $teacher = new Teacher();
    $listTeachers = $teacher->listAllTeachers();

    $page = new PagesProcessor();
    $page->render('students_list', $listTeachers);
    
})->setName('listaprofessores');

$app->get('/cadastrar/professor', function (Request $request, Response $response) {
    
    $page = new PagesProcessor();
    $page->render('register_teacher', []);
    
});

$app->post('/cadastrar/usuario', function (Request $request, Response $response) {

    $dados = $request->getParsedBody();
    
    $user = new User();
    $result = $user->registerUser($dados);

    if ($result) {

        return $response->withRedirect($this->router->pathFor('home'));

    }

});

$app->post('/login', function (Request $request, Response $response) {

    $dados = $request->getParsedBody();
    
    $result = User::login($dados);
    
    if ($result) {

        return $response->withRedirect($this->router->pathFor('dash'));

    }

});

$app->post('/cadastrar/professor', function (Request $request, Response $response) {

    $dados = $request->getParsedBody();

    $teacher = new Teacher();
    $result = $teacher->registerTeacher($dados);
  
    return $response->withRedirect($this->router->pathFor('listaprofessores'));
    
});


$app->run();