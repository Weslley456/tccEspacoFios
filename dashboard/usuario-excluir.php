<?php 
require_once 'classes/Usuario.php';

$id = $_GET['id'];
$usuario = new Usuario($id);
$usuario->excluir();

header('Location: usuario-listar.php');
?> 