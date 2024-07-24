<?php
session_start();

$senha_correta = "1234";
$mensagem = "";

if (isset($_POST['senha_aleatoria'])) {
    do {
        $senha = $_POST['senha_aleatoria'];
        if ($senha == $senha_correta) {
            $mensagem = "Senha correta! Acesso permitido.";
        } else {
            $mensagem = "Senha incorreta! T
