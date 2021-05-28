<?php
require_once PATH."/bd/Conexao.php";

class HomeModel
{
    private function conexao()
    {
        $con = new Conexao;
       return $con->MontarConexao();
    }
    public function user()
    {
        $con=$this->conexao();
        $cmd=$con->query("SELECT * FROM usuario");
        $dados=$cmd->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }

    public function movimentacao()
    {
        $con=$this->conexao();
        $cmd=$con->query("SELECT * FROM movimentacao");
        $dados=$cmd->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }
    
    public function insertMovimentacao($tipo,$dia,$mes,$ano,$forma,$parcelas,$valor,$descricao,$status)
    {
        $con=$this->conexao();
        $cmd=$con->prepare("INSERT INTO movimentacao SET tipo=:tipo,dia=:dia,mes=:mes,ano=:ano,forma=:forma,parcelas=:parcelas
        ,valor=:valor,descricao=:descricao,status=:status");
        $cmd->bindValue(":tipo",$tipo);
        $cmd->bindValue(":dia",$dia);
        $cmd->bindValue(":mes",$mes);
        $cmd->bindValue(":ano",$ano);
        $cmd->bindValue(":forma",$forma);
        $cmd->bindValue(":parcelas",$parcelas);
        $cmd->bindValue(":valor",$valor);
        $cmd->bindValue(":descricao",$descricao);
        $cmd->bindValue(":status",$status);
        $cmd=$cmd->execute();
        if($cmd){
            return true;
        }
        return false;
    }
    
}
?>