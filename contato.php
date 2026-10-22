<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/musicbia/style/style.css">
    <title>Contato - Sistema de Músicas</title>
</head>
<body>

    <!-- Cabeçalho e menu -->
    <?php include './includes/header.php'; ?>

    <!-- Conteúdo principal -->
    <main>

    <!-- Formulário de contato -->
    <section>

            <h1>Entre em Contato</h1>

            <article>
         <!-- Imagem de contato -->
        <img
        src="https://i.pinimg.com/736x/b0/9c/6b/b09c6bfe9a330ffca0687d3c3316a1a9.jpg"
        alt="Pessoa escutando musica engraçado">

                <h2>Fale conosco</h2>

                <p>
                    Preencha o formulário abaixo para entrar em contato
                    com a nossa equipe.
                </p>

                <form action="" method="post">

                    <label for="nome">Nome:</label>
                    <br>
                    <input
                        type="text"
                        id="nome"
                        name="nome"
                        placeholder="Digite seu nome"
                        required>

                    <br><br>

                    <label for="email">E-mail:</label>
                    <br>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Digite seu e-mail"
                        required>

                    <br><br>

                    <label for="mensagem">Mensagem:</label>
                    <br>
                    <textarea
                        id="mensagem"
                        name="mensagem"
                        placeholder="Digite sua mensagem"
                        required>
                    </textarea>

                    <br><br>

                    <button type="submit">Enviar</button>
                </form>
            </article>        </section>

        <!-- Informações de contato -->
        <section>

            <h2>Informações</h2>

            <p>
                E-mail: meu@sistemademusicas.com
            </p>

            <p>
                Telefone: (19) 11167-1167
            </p>

            <p>
                Horário de atendimento: segunda a sexta, das 9h às 19h.
            </p>

        </section>

        <!-- Informações adicionais -->
        <aside>

            <h3>Atendimento</h3>

            <p>
                Estamos disponíveis para receber dúvidas,
                sugestões e mensagens sobre o sistema.
            </p>

        </aside>
    </main>

    <!-- Rodapé -->
    <?php include './includes/footer.php'; ?>

</body>
</html>