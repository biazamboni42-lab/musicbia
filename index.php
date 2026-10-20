<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Sistema de Músicas</title>
</head>
<body>

    <!-- Cabeçalho do sistema -->
    <?php include __DIR__ . '/includes/header.php'; ?>

    <!-- Conteúdo principal -->
    <main>

        <section>
            <h1>Cadastro de músicas 🎶</h1>

            <p>
                Seja bem-vindo ao nosso sistema de cadastro de músicas!
            </p>

            <article>
                <h2>Sobre o sistema</h2>

                <p>
                    Organize suas músicas de forma simples e prática,
                    cadastrando, consultando, atualizando e excluindo
                    informações como título, artista, álbum e gênero musical.
                </p>
            </article>
        </section>

        <section>
            <h2>Comece por aqui</h2>

            <p>Escolha uma opção para começar:</p>

            <p>
                <a href="./app/create.php">Adicionar uma música</a>
            </p>

            <p>
                <a href="./app/select.php">Ver músicas cadastradas</a>
            </p>

            <p>
                <a href="./app/select_w.php">Procurar uma música</a>
            </p>
        </section>

        <!-- Imagem do sistema -->
        <img
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUMpkB_i00IElXlO4Tff_E0Toi3Y9YxRZgO5JCnD1GRe95HANk5GKUaslE&s=10"
            alt="Tyler, the Creator escutando música"
        >

        <aside>
            <h3>Destaques</h3>

            <ul>
                <li>Cadastro de músicas</li>
                <li>Consulta de músicas</li>
                <li>Atualização de informações</li>
                <li>Exclusão de músicas</li>
            </ul>
        </aside>

    </main>

    <!-- Rodapé do sistema -->
    <?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>