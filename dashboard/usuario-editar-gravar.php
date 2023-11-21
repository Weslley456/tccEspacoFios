<?php
require_once 'classes/usuario.php';

$id = $_POST['inputId'];
$usuario = new Usuario();

$usuario->nome = $_POST['inputNome'];
$usuario->email = $_POST['inputEmail'];
$usuario->celular = $_POST['inputCelular'];
$usuario->cpf = $_POST['inputCpf'];
$usuario->cidade = $_POST['inputCidade'];

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

$usuario->atualizar();
header('Location: usuario-listar.php');
?>