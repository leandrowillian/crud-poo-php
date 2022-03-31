<?php

// Definindo namespace
namespace App\Model;

// DAO (Data Access Object). 
// Nesse tipo de classe o objetivo é isolar a funcionalidade de persistir dados manipular o banco de dados. 
// Outro detalhe importante é que esse tipo de técnica é usada quando não estamos utilizamos nenhum mapeador objeto-relacional (Ex. Hibernate no Java ou PHP doctrine).

class ProdutoDao {

    // Utilizando uma outra classe como parametro de uma função
    public function create(Produto $p) {

        // QUERY PARA INSERÇÃO DE NOVO PRODUTO NO BANCO DE DADOS
        $sql  = "INSERT INTO produtos (nome, descricao) VALUES (:n, :d)";
        // Instanciando a classe de conexao 
        $conn = Conexao::getConn();
        // Preparando a query com a função prepare do PDO
        $stmt = $conn->prepare($sql);
        // Tratando os bindValues
        $stmt->bindValue(":n", $p->getNome());
        $stmt->bindValue(":d", $p->getDesc());
        // Método execute para mandarmos a query para o banco de dados
        $stmt->execute();


    }

    public function read() {

    }

    public function update(Produto $p) {

    }

    public function delete($id) {

    }

}