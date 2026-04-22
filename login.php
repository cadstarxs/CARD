<?php
//Incluindo o arquivo o arquivo de conexão nesse arquivo
include "conecta.php";

// Recebendo os dados do formulário
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

// Consulta SQL insegura
$sql = "SELECT * FROM aluno WHERE cpf = '$cpf' AND senha = '$senha'";

try {
    // Executando a consulta
    $resultado = $conexao->query($sql);

    if ( $linha = $resultado->fetch() ) { // fetch() retorna false se não tiver linhas
        echo "Login bem-sucedido!";
    } else {
        echo "CPF ou senha incorretos.";
    }
} catch (PDOException $e) {
    echo "Erro ao executar consulta: " . $e->getMessage();
}
?>
