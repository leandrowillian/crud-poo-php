<?php

// Incluindo o arquivo de autload
    require_once 'vendor/autoload.php';

// declarando o uso dos namespaces q serao utilizados
    use App\Model\Produto;
    use App\Model\ProdutoDao;

// Teste autoload
    $produto = new Produto();
    // $produto->setNome("Headset Edfier");
    // $produto->setDesc("Headset Edfier, USB 7.1, Com microfone");

// Instanciando a classe ProdutoDAO
    $produtoDao = new ProdutoDao();


// INSERT -  Chamando o método responsável pro inserir o produto no banco de dados e passando o objeto Produto como parametro
    // $produtoDao->create($produto);


// SELECT - Select nos produtos com o método "read"
    // print_r($produtoDao->read());


// UPDATE - Atualizando um produto
    // Setando os novos dados para o produto de id 7
        // $produto->setNome("Headset Alienware");
        // $produto->setDesc("Headset Alienware, USB 7.1, Com microfone.");
        // $produto->setId(7);
    // Realizando um try/catch para pegar a exception caso dê erro
        // try{
        //     $produtoDao->update($produto);
        // }catch (Exception $e){
        //     echo "Mensagem: ".$e;
        // }


// DELETE - Deletando um produto pelo Id
    try{
        $produtoDao->delete(7);
    }catch (Exception $e){
        echo "Mensagem: " .$e->getMessage();
        echo "<br>";
        echo "Cód Erro: " .$e->getCode();
    }

