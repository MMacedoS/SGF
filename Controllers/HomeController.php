<?php

class HomeController extends Controller{

    public function index()
    {
        $this->mostrarIndex('index',$this->dados,'');
    }

    public function cartoes()
    {
        $this->mostrarIndex('cartoes',$this->dados,'painelcartao');
    }
    public function cadcartoes(){
        $this->mostrarIndex('cadcartao',$this->dados,'cadcartao');
    }

    public function conta()
    {
        $this->mostrarIndex('conta',$this->dados,'painelconta');
    }
    public function cadconta(){
        $this->mostrarIndex('cadcartao',$this->dados,'cadconta');
    }
    
}
?>