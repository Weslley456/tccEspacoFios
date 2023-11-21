<?php
$user = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuario WHERE email='$user' and senha='" . base64_encode($senha) . "'";
$conexao = new PDO('mysql:host=127.0.0.1;dbname=espacofios', 'root', '');
$resultado = $conexao->query($sql);
$logado = $resultado->fetch();
$user_logado = $logado['nome'];


if ($logado == null) {
	
	header('Location: user-erro.php');
} 
else {
	session_start();
	$_SESSION['user_logado'] = $user_logado;	
    echo "User Logado<br> Session_id: ".$_SESSION['user_logado'];
	header('Location: ../home.php');
}

die();

?>