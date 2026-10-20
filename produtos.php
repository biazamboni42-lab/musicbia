<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Arquivo de estilos -->
      <link rel="stylesheet" href="../style/style.css">
      <title>Produtos - Sistema de Músicas</title>

</head>
<body>

    <!-- Cabeçalho e menu -->
    <?php include './includes/header.php'; ?>

    <!-- Conteúdo principal -->
    <main>

        <!-- Apresentação dos serviços -->
        <section>

            <h1>Produtos e Serviços</h1>

            <article>

                <h2>O que o sistema oferece</h2>

                <p>
                    O Sistema de Músicas possui diferentes funções
                    para ajudar no gerenciamento das músicas cadastradas.
                </p>

                <!-- Imagem sobre cadastro de músicas -->
                <img
                    src="https://i.pinimg.com/736x/b0/9c/6b/b09c6bfe9a330ffca0687d3c3316a1a9.jpg"
                    alt="Pessoa cantando">

            </article>

        </section>

        <!-- Tabela de serviços -->
        <section>

            <h2>Funções disponíveis</h2>

            <table border="1" style="margin: 0 auto; text-align: center;">

                <tr>
                    <th>Serviço</th>
                    <th>Descrição</th>
                    <th>Categoria</th>
                    <th>Preço</th>
                </tr>

                <tr>
                    <td>Cadastrar música</td>
                    <td>Adiciona uma nova música ao sistema.</td>
                    <td>Cadastro</td>
                    <td>Gratuito</td>
                </tr>

                <tr>
                    <td>Consultar música</td>
                    <td>Permite encontrar informações de uma música.</td>
                    <td>Consulta</td>
                    <td>Gratuito</td>
                </tr>

                <tr>
                    <td>Atualizar música</td>
                    <td>Altera as informações de uma música cadastrada.</td>
                    <td>Atualização</td>
                    <td>Gratuito</td>
                </tr>

                <tr>
                    <td>Excluir música</td>
                    <td>Remove uma música do sistema.</td>
                    <td>Exclusão</td>
                    <td>Gratuito</td>
                </tr>
            </table>
        </section>

        <!-- Informações adicionais -->
        <aside>

            <h3>Praticidade</h3>

            <p>
                Todas as funções ficam disponíveis no menu de navegação,
                facilitando o acesso às ferramentas do sistema.
            </p>

        </aside>
    </main>

    <!-- Rodapé -->
    <?php include './includes/footer.php'; ?>

</body>
</html>