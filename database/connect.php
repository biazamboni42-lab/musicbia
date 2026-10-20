<?php
// Dados de acesso ao banco
$host = "192.168.10.12";
$dbname = "musicas";
$user = "musicas";
$pass = "senha67";

try {
// Realiza a conexão com o PostgreSQL
    $conexao = new PDO(
        "pgsql:host=$host;dbname=$dbname",
        $user,
        $pass
    );

// Retorna a conexão para o sistema
    return $conexao;

} catch (PDOException $e) {

// Exibe uma mensagem caso tenha erro na conexão
echo "Erro: " . $e->getMessage();
}
?>
