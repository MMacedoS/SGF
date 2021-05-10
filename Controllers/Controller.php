<?php

class Controller
{
    public $dados;

    public function mostrarIndex($nome,$dados,$collapse)
    {
        $this->dados=$dados;
        require_once('Views/'.$nome.'.php');
    }
}
?>