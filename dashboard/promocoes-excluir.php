<?php 
require_once 'classes/Promocoes.php';

$id = $_GET['id'];
$promocoes = new Promocoes($id);
$promocoes->excluir();

header('Location: promocoes-listar.php');
?> 