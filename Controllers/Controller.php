<?php

class Controller
{
    public $dados;

    public function mostrarIndex($nome)
    {
        $this->dados=$nome;
        require_once('Views/index.php');
    }
}
?>