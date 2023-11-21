<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$sql = "INSERT INTO comentarios (nome, email, mensagem) 
        VALUES ('$nome', '$email', '$mensagem')";


$conexao = new PDO('mysql:host=127.0.0.1;dbname=espacofios', 'root', '');
$conexao->exec($sql);

header('Location: ../login-user/comentario-enviado.html');

?>