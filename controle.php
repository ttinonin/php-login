<?php
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    if($senha != "daniel"){
        header('Location: erro.php');
    } else {
        echo "<h1>Hello $nome your password is: $senha</h1>";
    }
    
?>

