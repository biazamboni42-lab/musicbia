<?php
// Importa as funções do sistema
require_once __DIR__ . '/../includes/functions.php';
// Verifica se o usuário está logado
require_once __DIR__ . '/../login/verifica_user.php'?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Arquivo de estilos -->
    <link rel="stylesheet" href="../style/style.css">
    <title>Atualizar Música</title>

</head>
<body>

    <!-- Cabeçalho do sistema -->
    <?php include '../includes/header.php'; ?>

    <main>
        <section>

            <h1>Atualizar Música</h1>

            <article>

                <h2>Atualizar uma música</h2>

                <p>
                    Preencha os campos abaixo para atualizar as informações da música.
                </p>

                <!-- Formulário para atualizar uma música -->
                <form action="" method="post">

                    <label for="id">ID:</label>
                    <br>

                    <input
                        type="number"
                        name="id"
                        id="id"
                        placeholder="Digite o ID da música"
                        required>

                    <br><br>

                    <label for="titulo">Título:</label>
                    <br>

                    <input
                        type="text"
                        name="titulo"
                        id="titulo"
                        placeholder="Digite o título da música"
                        required>

                    <br><br>

                    <label for="artista">Artista:</label>
                    <br>

                    <input
                        type="text"
                        name="artista"
                        id="artista"
                        placeholder="Digite o nome do artista"
                        required>

                    <br><br>

                    <label for="album">Álbum:</label>
                    <br>

                    <input
                        type="text"
                        name="album"
                        id="album"
                        placeholder="Digite o nome do álbum"
                        required>

                    <br><br>

                    <label for="genero">Gênero:</label>
                    <br>

                    <input
                        type="text"
                        name="genero"
                        id="genero"
                        placeholder="Digite o gênero musical"
                        required>

                    <br><br>

                    <!-- Botões do formulário -->
                    <input type="reset" value="Limpar">

                    <button type="submit">
                        Atualizar
                    </button>

                </form>

                <?php

                // Verifica se o formulário foi enviado
                if ($_SERVER['REQUEST_METHOD'] == "POST") {

                // Envia os dados para a função de atualização
                atualizar(
                    $conexao,
                    $_POST['id'],
                    $_POST['titulo'],
                    $_POST['artista'],
                    $_POST['album'],
                    $_POST['genero']
                    );

                }
                ?>

            </article>
        </section>
    </main>

    <!-- Rodapé do sistema -->
    <?php include '../includes/footer.php'; ?>

</body>
</html>