<?php

// Incluindo o arquivo de autload
require_once 'vendor/autoload.php';

// declarando o uso dos namespaces q serao utilizados
use App\Model\Produto;
use App\Model\ProdutoDao;

// Teste autoload
$produto = new Produto();
$produto->setNome("Headset Edfier");
$produto->setDesc("Headset Edfier, USB 7.1, Com microfone");

// Instanciando a classe ProdutoDAO
$produtoDao = new ProdutoDao();
// Chamando o método responsável pro inserir o produto no banco de dados e passando o objeto Produto como parametro
$produtoDao->create($produto);