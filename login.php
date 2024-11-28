<?php
require 'conexao.php';
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
 
    $sql = "SELECT nm_senha FROM tb_cliente WHERE nm_cliente = '$nome'";
    $result = $conn->query($sql);
 
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($senha == $row['nm_senha']) {
            header("Location: bem-vindo.html");
            exit();
        } else {
            echo "Senha incorreta. <a href='login.html'>Tente novamente</a>";
        }
    } else {
        echo "Usuário não encontrado. <a href='index.html'>Cadastre-se</a>";
    }
    $conn->close();

?>