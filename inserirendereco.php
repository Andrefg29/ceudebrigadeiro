<?php
    include("conecta.php");
    // PARA PEGAR O TEXTO DOS INPUTS
    $nome  = $_POST["nomeendereco"];
    $email  = $_POST["emailendereco"];
    $rua  = $_POST["rua"];
    $numcasa  = $_POST["numerocasa"];
    $bairro  = $_POST["bairro"];
    $estado  = $_POST["estado"];
    $cidade  = $_POST["cidade"];
    $cep = $_POST["cep"];

    $comando = $pdo->prepare("INSERT INTO endereco_cliente (nomeendereco, email, cep, num_casa, rua, bairro, cidade, estado) VALUES ('$nome','$email','$cep','$numcasa','$rua','$bairro','$cidade','$estado')");
    
    $resultado = $comando->execute();

    header("Location: estrutura.php");

?>