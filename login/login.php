<?php
// Importa as funções do sistema
require_once __DIR__ . '/../includes/functions.php';
// Inicia a sessão
session_start();?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Arquivo de estilos -->
    <link rel="stylesheet" href="../style/style.css">
    <title>Login</title>

</head>
<body>

    <!-- Cabeçalho do sistema -->
    <?php include '../includes/header.php'; ?>

    <main>
        <section>
        <h1>Faça Login</h1>

            <article>

                <h2>Entrar no sistema</h2>

                <p>
                    Preencha seus dados para acessar o sistema de músicas.
                </p>

                <!-- Formulário de login -->
                <form action="" method="post">

                    <label for="email">E-mail:</label>
                    <br>

                    <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="Digite seu e-mail"
                        required>

                    <br><br>

                    <label for="senha">Senha:</label>
                    <br>

                    <input
                        type="password"
                        name="senha"
                        id="senha"
                        placeholder="Digite sua senha"
                        required>

                    <br><br>

                    <button type="submit">
                        Entrar
                    </button>

                </form>

                <?php

                // Verifica se o formulário foi enviado
                if ($_SERVER['REQUEST_METHOD'] == "POST") {

                    // Consulta o usuário pelo e-mail
                    $usuario = consulta_user($conexao, $_POST['email']);

                    // Verifica se o usuário existe e se a senha está correta
                    if (
                        $usuario &&
                        $_POST['email'] == $usuario['email'] &&
                        $_POST['senha'] == $usuario['senha']
                    ) {

                    // Guarda o ID do usuário na sessão
                    $_SESSION['id'] = $usuario['id'];

                    // Redireciona para a página inicial
                    header("Location: ../index.php");
                    exit();
                    } else {

                    // Exibe mensagem caso os dados estejam incorretos
                    echo "Usuário ou senha inválidos";

                    }

                }
                ?>

            </article>
        </section>
    </main>

    <!-- Rodapé do sistema -->
    <?php include '../includes/footer.php'; ?>

</body>
</html>