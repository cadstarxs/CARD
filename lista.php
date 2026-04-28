<?php
session_start();
require_once "conecta.php";

if (!isset($_SESSION['cpf'])) {
    header("Location: index.php");
    exit();
}

$sql = "SELECT * FROM aluno";
$stmt = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Lista</title>
</head>
<body>

<h2>Lista de Alunos</h2>

<?php
while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<p>Nome: " . $linha['nome'] . " | CPF: " . $linha['cpf'] . "</p>";
}
?>

<a href="logout.php">Sair</a>

</body>
</html>