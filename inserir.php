<?php
    include("conecta.php");
    // PARA PEGAR O TEXTO DOS INPUTS
    $email  = $_POST["email"];
    $senha = $_POST["senha"];

    $comando = $pdo->prepare("INSERT INTO cadastro VALUES ('$email','$senha')");
    
    $resultado = $comando->execute();

    //para voltar n o formulário:
    
    //header("Location: estrutura.html");

?>