<?php 
require_once 'classes/Produtos.php';

$id = $_GET['id'];
$imovel = new Produtos($id);
$imovel->excluir();

header('Location: produtos-listar.php');
?> 