<?php
$host = "sql101.infinityfree.com";
$banco = "if0_41558092_card";
$usuario = "if0_41558092";
$senha = "WymwiVXkKgm";

try {
    $conexao = new PDO(
        "mysql:host=$host;dbname=$banco;charset=utf8mb4",
        $usuario,
        $senha
    );
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar: " . $e->getMessage());
}