<?php

// Definindo o namespace
namespace App\Model;

class Produto {

    // campos da tabela
    private $id, $nome, $descricao;

    // getters e setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }


    public function getDesc() {
        return $this->descricao;
    }

    public function setDesc($desc) {
        $this->descricao = $desc;
    }

}