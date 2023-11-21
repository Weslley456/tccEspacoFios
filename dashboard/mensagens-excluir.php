<?php 
require_once 'classes/Mensagem.php';

$id = $_GET['id'];
$mensagem = new Mensagem($id);
$mensagem->excluir();

header('Location: menssagens-listar.php');
?> 