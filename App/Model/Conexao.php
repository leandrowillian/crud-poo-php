<?php

// Utilizando padrão singleton, q é criar apenas uma instancia de conexão no nosso projeto

class Conexao {

    private static $instance;

    // Função para verificar se há uma instancia de conexão e se nao existir, criará uma instancia, caso contrário, retornaremos a instancia que já está criada
    public static function getConn() {

        // Condicional
        if(!isset(self::$instance)) {
            // CRIANDO A CONEXÃO COM O BANCO ATRAVÉS DO PDO, POIS A CONEXÃO AINDA NAO FOI INSTACIADA
            self::$instance = new PDO('mysql:host=localhost;dbname=crud-poo-php;charset=utf8','root','');
        }else{
            // RETORNANDO A CONEXÃO POIS JÁ EXISTE UMA INSTANCIA DA MESMA
            return self::$instance;
        }
    }
}