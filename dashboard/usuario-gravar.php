<?php
require_once 'classes/usuario.php';

$usuario = new Usuario();

$usuario->nome = $_POST['inputNome'];
$usuario->email = $_POST['inputEmail'];
$usuario->senha = $_POST['inputSenha'];
$usuario->cpf = $_POST['inputCpf'];
$usuario->cidade = $_POST['inputCidade'];
$usuario->celular = $_POST['inputCelular'];

$usuario->inserir();
header('Location: usuario-listar.php');
?>