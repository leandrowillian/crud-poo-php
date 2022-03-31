<?php

class Produto {

    // campos da tabela
    private $nome, $descricao;

    // getters e setters
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