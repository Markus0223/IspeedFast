<?php 
class Relatorio {
    private $ID;
    private $Titulo;
    private $Descricao;
    private $Data_Criacao;

    public function __construct($id, $titulo, $descricao, $data_criacao) {
        $this->ID = $id;
        $this->Titulo = $titulo;
        $this->Descricao = $descricao;
        $this->Data_Criacao = $data_criacao;
    }

    public function setId($id) {
        $this->ID = $id;
    }

    public function setTitulo($titulo) {
        $this->Titulo = $titulo;
    }

    public function setDescricao($descricao) {
        $this->Descricao = $descricao;
    }

    public function setDataCriacao($data_criacao) {
        $this->Data_Criacao = $data_criacao;
    }

    public function getId() {
        return $this->ID;
    }

    public function getTitulo() {
        return $this->Titulo;
    }

    public function getDescricao() {
        return $this->Descricao;
    }

    public function getDataCriacao() {
        return $this->Data_Criacao;
    }
}

?>