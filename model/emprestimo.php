<?php 
require_once '../db/conexao.php';

class Emprestimo {
    private $id;
    private $descricao;
    private $dtaemprestimo;
    private $dtadevolucao;
    private $estacom;
    private $telefone;

    function __construct($id,$descricao,$dtaemprestimo,$dtadevolucao,$estacom,$telefone){
        $this->id = $id;
        $this->descricao = $descricao;
        $this->dtaemprestimo = $dtaemprestimo;
        $this->dtadevolucao = $dtadevolucao;
        $this->estacom = $estacom;
        $this->telefone = $telefone;
    }

    public function __get($atributo){
        return $this->$atributo;
    }
    
    //CRUD - Create
    public function incluir(){
        $con = (new Conexao())->getConexao(); // estabelece uma conexao com o banco de dados
        //preparando o comando sql de inclusao
        $sql = "insert into emprestimo (descricao,dtaemprestimo,estacom,telefone) values ( :descricao, :dtaemprestimo, :estacom, :telefone )";

        $st = $con->prepare($sql); // banco de dados prepara a consulta

        //relacionar os valores dos atributos do emprestimo com os parametros da consulta
        $st->bindValue(':descricao',$this->id);
        $st->bindValue(':dtaemprestimo',$this->dtaemprestimo);
        $st->bindValue(':estacom',$this->estacom);
        $st->bindValue(':telefone',$this->telefone);

        try {
           $st->execute(); // executa o comando de inserção com o valores dos parametros
           $this->id = $con->lastInsertId(); // se funcionar me retorna o id do empréstimo inserido
        } catch(PDOException $e) {
            echo $e->getMessage(); // caso der erro imprime a mensagem de erro
            $this->id = 0;
        }
 
    }


   //R- refresh 
    public static function listar(){
        $con = (new Conexao())->getConexao(); // estabelece uma conexao com o banco de dados
        //preparando o comando sql de inclusao
        $sql = "select * from emprestimo order by dtaemprestimo";
        $st = $con->prepare($sql);

        $st->execute();

        $registros = $st->fetchAll();
        $retorno = [];
        foreach($registros as $registro) {
            array_push($retorno,
                new Emprestimo($registro["id"],
                            $registro["descricao"],
                            $registro["dtaemprestimo"],
                            $registro["dtadevolucao"],
                            $registro["estacom"],
                            $registro["telefone"])
            );
             
        };
        return $retorno;
    }


//CRUD - Update
public function alterar(){
    $con = (new Conexao())->getConexao(); // estabelece uma conexao com o banco de dados
    //preparando o comando sql de inclusao
    $sql = "update emprestimo 
        set descricao = :descricao,
        dtaemprestimo = :dtaemprestimo,
        estacom = :estacom,
        telefone = :telefone
        where id = :id ";

    $st = $con->prepare($sql); // banco de dados prepara a consulta

    //relacionar os valores dos atributos do emprestimo com os parametros da consulta
    $st->bindValue(':id',$this->id);
    $st->bindValue(':descricao',$this->id);
    $st->bindValue(':dtaemprestimo',$this->dtaemprestimo);
    $st->bindValue(':estacom',$this->estacom);
    $st->bindValue(':telefone',$this->telefone);

    try {
       $st->execute(); // executa o comando de alteração com o valores dos parametros
    } catch(PDOException $e) {
        echo $e->getMessage(); // caso der erro imprime a mensagem de erro
        $this->id = 0;
    }

}

}