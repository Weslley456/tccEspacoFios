<?php
session_start();

if (!isset($_SESSION["user_logado"])) {
    /* Você não tem acesso a esta funcionalidade */
    header('Location: login-user/user-erro.php');
}