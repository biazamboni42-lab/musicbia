<?php
// Importa o arquivo responsável pela conexão com o banco de dados
require_once __DIR__ . '/../database/connect.php';
// Função para cadastrar uma nova música
function cadastrar($conexao, $titulo, $artista, $album, $genero)
{
// Comando SQL para inserir uma música
$sql = "INSERT INTO musicas (titulo, artista, album, genero)
    VALUES (:titulo, :artista, :album, :genero)";

// Prepara o comando SQL
$stmt = $conexao->prepare($sql);
    // Envia os valores para os parâmetros do SQL
    $stmt->bindParam(":titulo", $titulo);
    $stmt->bindParam(":artista", $artista);
    $stmt->bindParam(":album", $album);
    $stmt->bindParam(":genero", $genero);

    // Executa o cadastro
    $stmt->execute();
    // Exibe mensagem de sucesso
    echo "Música cadastrada com sucesso!";
}

// Função para excluir uma música pelo ID
function deletar($conexao, $id)
{
    // Comando SQL para excluir a música
    $sql = "DELETE FROM musicas WHERE id = :id";
    // Prepara o comando SQL
    $stmt = $conexao->prepare($sql);
    // Envia o ID para o parâmetro
    $stmt->bindParam(":id", $id);
    // Executa a exclusão
    $stmt->execute();
    // Exibe mensagem de sucesso
    echo "Música $id deletada.";
}
// Função para listar todas as músicas
function listar($conexao)
{
    // Comando SQL para buscar todas as músicas
    $sql = "SELECT * FROM musicas";
    // Prepara e executa o comando
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    // Armazena os resultados encontrados
    $musicas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Percorre todas as músicas encontradas
    foreach ($musicas as $musica) {
        echo "<hr>";
        echo "ID: {$musica['id']}<br>";
        echo "Título: {$musica['titulo']}<br>";
        echo "Artista: {$musica['artista']}<br>";
        echo "Álbum: {$musica['album']}<br>";
        echo "Gênero: {$musica['genero']}<br>";
    }
}

// Função para consultar uma música pelo ID
function consultar($conexao, $id)
{
    // Comando SQL para buscar uma música específica
    $sql = "SELECT titulo, artista, album, genero
        FROM musicas
        WHERE id = :id";

    // Prepara o comando SQL
    $stmt = $conexao->prepare($sql);
    // Envia o ID para o parâmetro
    $stmt->bindParam(":id", $id);
    // Executa a consulta
    $stmt->execute();
    // Armazena a música encontrada
    $musica = $stmt->fetch(PDO::FETCH_ASSOC);

    // Exibe os dados da música
    echo "Título: {$musica['titulo']}<br>";
    echo "Artista: {$musica['artista']}<br>";
    echo "Álbum: {$musica['album']}<br>";
    echo "Gênero: {$musica['genero']}<br>";
}

// Função para atualizar uma música
function atualizar($conexao, $id, $titulo, $artista, $album, $genero)
{
    // Comando SQL para atualizar os dados da música
    $sql = "UPDATE musicas
            SET titulo = :titulo,
                artista = :artista,
                album = :album,
                genero = :genero
            WHERE id = :id";

    // Prepara o comando SQL
    $stmt = $conexao->prepare($sql);

    // Envia os valores para os parâmetros
    $stmt->bindParam(":titulo", $titulo);
    $stmt->bindParam(":artista", $artista);
    $stmt->bindParam(":album", $album);
    $stmt->bindParam(":genero", $genero);
    $stmt->bindParam(":id", $id);

    // Executa a atualização
    $stmt->execute();

    // Exibe mensagem de sucesso
    echo "Música atualizada com sucesso!";
}

// Função para cadastrar um novo usuário
function cadastrar_user($conexao, $email, $senha)
{
    // Comando SQL para inserir um usuário
    $sql = "INSERT INTO usuarios (email, senha)
        VALUES (:email, :senha)";

    // Prepara o comando SQL
    $stmt = $conexao->prepare($sql);
    // Envia os dados do usuário para os parâmetros
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":senha", $senha);
    // Executa o cadastro
    $stmt->execute();
    // Exibe mensagem de sucesso
    echo "Usuário cadastrado com sucesso!";
}

// Função para consultar um usuário pelo e-mail
function consulta_user($conexao, $email)
{
    // Comando SQL para buscar o usuário
    $sql = "SELECT id, email, senha
        FROM usuarios
        WHERE email = :email";

    // Prepara o comando SQL
    $stmt = $conexao->prepare($sql);
    // Envia o e-mail para o parâmetro
    $stmt->bindParam(":email", $email);
    // Executa a consulta
    $stmt->execute();
    // Armazena os dados do usuário encontrado
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
    // Retorna os dados do usuário
    return $usuario;
}
?>