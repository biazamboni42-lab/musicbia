<?php
// Importa as funções do sistema
require_once __DIR__ . '/../includes/functions.php';
// Verifica se o usuário está logado
require_once __DIR__ . '/../login/verifica_user.php';?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Arquivo de estilos -->
    <link rel="stylesheet" href="../style/style.css">
    <title>Relatório de Músicas</title>

</head>
<body>

    <!-- Cabeçalho do sistema -->
    <?php include '../includes/header.php'; ?>

    <main>

        <section>

            <h1>Relatório de Músicas</h1>

            <article>

                <h2>Lista completa de músicas</h2>

                <p>
                    Confira abaixo as músicas cadastradas no sistema.
                </p>
       
                <?php

                // Exibe todas as músicas cadastradas
                listar($conexao);?>

            </article>
        </section>
        <aside>

            <h3>Informação</h3>

            <p>
                Nesta página são exibidas todas as músicas cadastradas.
            </p>

        </aside>
    </main>

    <!-- Rodapé do sistema -->
    <?php include '../includes/footer.php'; ?>

</body>
</html>