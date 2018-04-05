<?php

namespace Code\Model;

use Code\DB\Persistence;

class User
{

    const SESSION = 'User';


    public function registerUser($dados = array()) : bool
    {

        $persistence = new Persistence();
        $results = $persistence->select("CALL cadastrar_usuario_professor(:USU, :SEN, :NPROF, :EMAIL, :TITU)", [
            ":USU"=>$dados['usuario'],
            ":SEN"=>password_hash($dados['senha'], PASSWORD_DEFAULT),
            "NPROF"=>$dados['nome'],
            ":EMAIL"=>$dados['email'],
            ":TITU"=>$dados['titulacao']
        ]);

        if (count($results) === 0) {

            throw new \Exception("Não foi possivel cadastrar usuario entre em contato com administrador.");

        }
        return true;

    }

    
    public static function login(array $dados) : bool
    {

        $persistence = new Persistence();
        $results = $persistence->select("SELECT * FROM tb_usuario WHERE usuario = :USUARIO", [
            ":USUARIO"=>$dados['usuario']            
        ]);

        if (password_verify($dados['senha'], $results[0]['senhausuario']) === true) {

            $_SESSION[User::SESSION] = $results[0];

            return true;

        }
        return false;

    }

    public static function loginVerify()
    {

        if (empty($_SESSION[User::SESSION])) {

            \header("Location: /");
            exit;

        }

    }

}