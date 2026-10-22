<?php
// Dados de acesso ao banco
$host = "SEU_IP";
$dbname = "SEU_DT";
$user = "SEU_USER";
$pass = "SUA_SENHA";

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
