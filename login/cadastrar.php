<?php
// Importa as funções do sistema
require_once __DIR__ . '/../includes/functions.php';?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Arquivo de estilos -->
    <link rel="stylesheet" href="../style/style.css">
    <title>Cadastro de Usuário</title>

</head>
<body>

    <!-- Cabeçalho do sistema -->
    <?php include '../includes/header.php'; ?>

    <main>
        <section>

            <h1>Cadastre-se</h1>

            <article>

                <h2>Cadastro de usuário</h2>

                <p>
                    Preencha os dados abaixo para cadastrar um novo usuário.
                </p>

                <!-- Formulário para cadastrar usuário -->
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
                        Cadastrar
                    </button>

                </form>

                <?php

                // Verifica se o formulário foi enviado
                if ($_SERVER['REQUEST_METHOD'] == "POST") {

                // Envia os dados para cadastro
                cadastrar_user(
                    $conexao,
                    $_POST['email'],
                    $_POST['senha']
                    );

                }
                ?>

            </article>
        </section>
    </main>

    <!-- Rodapé  -->
    <?php include '../includes/footer.php'; ?>

</body>
</html>