<?php
session_start();

if (!isset($_SESSION["adm_logado"])) {
    /* Você não tem acesso a esta funcionalidade */
    header('Location: ../login-adm/adm-erro.php');
}