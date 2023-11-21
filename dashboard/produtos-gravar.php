<?php
require_once 'classes/Produtos.php';

$produtos = new Produtos();

$produtos->titulo = $_POST['inputTitulo'];
$produtos->descricao = $_POST['inputDescricao'];
$produtos->preco = $_POST['inputPreco'];

if(isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"] == 0){
    $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
    $nomeImagem = $_FILES['arquivo']['name'];
    $extensao = strrchr($nomeImagem, '.');
    $extensao = strtolower($extensao);
    if(strstr('.jpg;.jpeg;.gif;.png', $extensao)){
        $novoNome = md5(microtime()) .$extensao; ;
        $destino = 'uploads/' . $novoNome; 
        @move_uploaded_file($arquivo_tmp, $destino);
        $produtos->imagem = $novoNome;
    }
}

$produtos->inserir();
header('Location: produtos-listar.php');
?> 