<?php

// Definindo namespace
namespace App\Model;

// DAO (Data Access Object). 
// Nesse tipo de classe o objetivo é isolar a funcionalidade de persistir dados manipular o banco de dados. 
// Outro detalhe importante é que esse tipo de técnica é usada quando não estamos utilizamos nenhum mapeador objeto-relacional (Ex. Hibernate no Java ou PHP doctrine).

class ProdutoDao {

    // Utilizando uma outra classe como parametro de uma função
    public function create(Produto $p) {

    }

    public function read() {

    }

    public function update(Produto $p) {

    }

    public function delete($id) {

    }

}