<?php

require_once "conexao.php";

$nome_contato   = $_POST["nome_contato"];
$tele_contato   = $_POST["tele_contato"];
$email_contato  = $_POST["email_contato"];

/*
$sql    = "INSERT INTO lista_contato (nome, telefone, email) VALUES (?, ?, ?);";
$stmt   = $conexao->prepare($sql);
$stmt->execute([$nome_contato, $tele_contato,$email_contato]);
*/

$insert = "INSERT INTO lista_contato (nome, telefone, email) VALUES(:nome, :telefone, :email)";
$data   = [
    'nome'      => $nome_contato,
    'telefone'  => $tele_contato,
    'email'     => $email_contato,
];

$stmt= $conexao->prepare($insert);
$stmt->execute($data);

?>