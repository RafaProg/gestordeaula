<?php

namespace Code\Model;

use Code\DB\Persistence;


class Teacher
{

    public function listAllTeachers() : array
    {

        $persistence = new Persistence();
        $listTeaches = $persistence->select("SELECT * FROM tb_professor");
        
        return $listTeaches;

    }

    public function registerTeacher($dados)
    {

        $persistence = new Persistence();
        $persistence->runQuery("INSERT INTO tb_professor(:nome, :email, :titulacao)", [
            ":nome"=>$dados['nome'],
            ":email"=>$dados['email'],
            ":titulacao"=>$dados['titulacao']
        ]);

    }

}