<?php

namespace Code\PageProcessor;

use Rain\Tpl;

class PagesProcessor
{

    public function render(string $namePage, array $dados)
    {

        $config = array(
            "tpl_dir"   => $_SERVER['DOCUMENT_ROOT'] . "/views/",
            "cache_dir" => $_SERVER['DOCUMENT_ROOT'] . "/views_cache/",
            "debug"     => false
        );

        Tpl::configure( $config );

        $t = new Tpl;
        $this->fillsInData($t, $dados);
                
        $this->toDraw($t, $namePage);

    }

    public function fillsInData($tpl, array $dados)
    {

        if (!empty($dados)) {

            $tpl->assign('dados', $dados);

        }

    }

    public function toDraw($tpl, string $namePage)
    {

        $tpl->draw($namePage);

    }

}