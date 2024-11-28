<?php
require 'conexao.php';
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $sql = "INSERT INTO tb_cliente (nm_cliente, nm_senha) VALUES ('$nome', '$senha')";
    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso! <a href='login.html'>Faça login</a>";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>
