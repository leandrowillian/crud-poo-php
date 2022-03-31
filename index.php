<?php

// Incluindo o arquivo de autload
require_once 'vendor/autoload.php';

// declarando o namespace a ser usado
use App\Model\Produto;

// Teste autoload
$produto = new Produto();
$produto->setId(1);
echo $produto->getId();