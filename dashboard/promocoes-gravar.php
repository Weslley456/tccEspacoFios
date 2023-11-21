<?php
require_once 'classes/Promocoes.php';

$promocoes = new Promocoes();

$promocoes->nomeCliente = $_POST['inputNomeCliente'];
$promocoes->senha = $_POST['inputSenha'];
$promocoes->produto = $_POST['inputProduto'];
$promocoes->preco = $_POST['inputPreco'];
$promocoes->qtdeProdutos = $_POST['inputQtdeProdutos'];
$promocoes->observacoes = $_POST['inputObservacoes'];
$promocoes->titulo = $_POST['inputTitulo'];

$promocoes->inserir();
header('Location: promocoes-listar.php');
?> 