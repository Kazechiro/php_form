<?php

session_start();
include("conexao.php");
include("valida_usuario.php");

$select = "SELECT matricula, nome, cpf, funcao FROM cadastro";
$query = mysqli_query($conexao, $select);

while ($dado = mysqli_fetch_array($query)) {
    $matricula = $dado['matricula'];
    $nome = $dado['nome'];
    $cpf = $dado['cpf'];
    $funcao = $dado['funcao'];

    $incluir = "INSERT INTO cadastro (matricula, nome, cpf, funcao) 
    VALUES ('$matricula', '$nome', '$cpf', $funcao)";
    $resultado = pg_exec($conexao2, $incluir);



}
?>