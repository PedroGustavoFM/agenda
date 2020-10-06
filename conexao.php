<?php

$conexao;
$username   = "root";
$password   = "";


try {
    $conexao = new PDO("mysql:host=localhost;dbname=agenda", $username, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $erro) {
    echo "Erro: ".$erro->getMessage();
}




?>