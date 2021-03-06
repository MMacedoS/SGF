<?php

define("SERVIDOR","localhost");
define("BANCO","sgf");
define("USUARIO","root");
define("SENHA","");

class Conexao{
    private $conexaoSql;
    private $charset;
    public $pdo;
    private $conexao;

    public function MontarConexao()
    {
        if(!isset($this->pdo))
        {
            try {
                $this->charset=array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8');
                $this->pdo=new PDO("mysql:host=".SERVIDOR.";dbname=".BANCO.";",USUARIO,SENHA,$this->charset);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $th) {
                //throw $th;
                die("ERRO: #".$th->getCode()."<br>Mensagem:".$th->getMessage()."<br>No arquivo:".$th->getFile()."<br>Na linha".$th->getLine()
                         );
            }
            return $this->pdo;

        }
    }

}