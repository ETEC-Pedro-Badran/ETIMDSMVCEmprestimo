<?php 

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
    

}