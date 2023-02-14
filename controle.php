<?php
    $connection = mysqli_connect("localhost", "root", "", "studentdb");

    function handleLogin($connection, $nome, $senha) {
        if(!$connection){
            die("Could not connect".mysqli_connect_error());
        } 
        
        $query = "SELECT * FROM students";
        $stmt = mysqli_query($connection, $query);

        while($row = mysqli_fetch_array($stmt, MYSQLI_ASSOC)){
            if(($nome != $row['Nome']) && ($senha != $row['Senha'])){
                header('Location: erro.php');
            } else {
                header('Location: home.php');
            }
        }
    }

    function handleCad($connection, $nome, $senha) {
        $insertion = "INSERT INTO students (Nome, Senha) VALUES ('$nome', '$senha')";
    
        mysqli_query($connection, $insertion);

        header('Location: index.php');
    }

    $nome = $_POST["nome"];
    $senha = $_POST["senha"];
    $op = $_POST['op'];

    if($op == 'cad'){
        handleCad($connection, $nome, $senha);
    } else {
        handleLogin($connection, $nome, $senha);
    }
?>

