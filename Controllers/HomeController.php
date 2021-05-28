<?php
// require_once "../Models/HomeModel.php";

class HomeController extends Controller{
    private $homeModel;

    public function __construct(){
        $this->homeModel=new HomeModel();
    }

    public function index()
    {
       
        $this->dados=$this->homeModel->user();
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
        $this->mostrarIndex('cadconta',$this->dados,'cadconta');
    }

    public function inserirMov()
    {
        $tipo=@$_POST[''];
        $dia=@$_POST[''];
        $mes=@$_POST[''];
        $ano=@$_POST[''];
        $forma=@$_POST[''];
        $parcelas=@$_POST[''];
        $valor=@$_POST[''];
        $descricao=@$_POST[''];
        $status=@$_POST[''];
       $inserirdados=$this->homeModel->insertMovimentacao($tipo,$dia,$mes,$ano,$forma,$parcelas,$valor,$descricao,$status);
    }
    
}
?>