<?php
// Importa as funções do sistema
require_once __DIR__ . "/../includes/functions.php";
// Verifica se o usuário está logado
require_once __DIR__ . '/../login/verifica_user.php';?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Arquivo de estilos -->
    <link rel="stylesheet" href="../style/style.css">
    <title>Excluir Música</title>

</head>
<body>

    <!-- Cabeçalho do sistema -->
    <?php include '../includes/header.php'; ?>

    <main>
        <section>
            <h1>Excluir Música</h1>

            <article>

                <h2>Excluir uma música</h2>

                <p>
                    Informe o ID da música que deseja excluir.
                </p>

                <!-- Formulário para excluir uma música pelo ID -->
                <form action="" method="post">

                    <label for="id">ID da música:</label>
                    <br>

                    <input
                        type="number"
                        name="id"
                        id="id"
                        placeholder="Digite o ID da música"
                        required>

                    <br><br>

                    <button type="submit">
                        Apagar
                    </button>

                </form>

                <?php

                // Verifica se o formulário foi enviado
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                // Exclui a música pelo ID informado
                deletar($conexao, $_POST['id']);

                }
                ?>

            </article>
        </section>

        <aside>

            <h3>Consulta</h3>

            <p>
                Para verificar os IDs das músicas cadastradas:
            </p>

            <a href="select.php">
                Consultar músicas
            </a>

        </aside>
    </main>

    <!-- Rodapé do sistema -->
    <?php include '../includes/footer.php'; ?>

</body>
</html>
