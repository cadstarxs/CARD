<?php
session_start();
require_once "conecta.php";

$cpf = $_POST['cpf'] ?? '';
$senha = $_POST['senha'] ?? '';

// 1. Prepara a query
$sql = "SELECT * FROM aluno WHERE cpf = :cpf AND senha = :senha";
$stmt = $conexao->prepare($sql);

// 2. EXECUTA (isso tem que vir antes de checar as linhas!)
$stmt->execute([
    ':cpf' => $cpf,
    ':senha' => $senha
]);

// 3. Agora sim, verifica se achou alguém
if ($stmt->rowCount() > 0) {
    $_SESSION['cpf'] = $cpf;
    header("Location: lista.php");
    exit();
} else {
    header("Location: index.php?erro=1");
    exit();
}