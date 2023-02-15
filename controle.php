<?php
    $connection = mysqli_connect("localhost", "root", "", "studentdb");

    function handleLogin($connection, $nome, $senha) {
        session_start();

        $_SESSION['nome'] = $nome;

        if(!$connection){
            die("Could not connect".mysqli_connect_error());
        } 
        
        $query = "SELECT * FROM students WHERE Nome = '$nome' AND Senha = '$senha'";
        $stmt = mysqli_query($connection, $query);

        $row = mysqli_num_rows($stmt);

        if($row < 1){
            header('Location: erro.php');
        } else {
            header('Location: home.php');
        }
    }

    function handleCad($connection, $nome, $senha) {
        $insertion = "INSERT INTO students (Nome, Senha) VALUES ('$nome', '$senha')";
    
        mysqli_query($connection, $insertion);

        header('Location: index.php');
    }

    function handleCadInput($nome, $senha, $confirm){
        if(empty($nome) || empty($senha) || empty($confirm)){
            header('Location: cadastro.php');
            die();
        }

        if($confirm != $senha){
            header('Location: cadastro.php');
            die();
        }
    }

    function handleLoginInput($nome, $senha){
        if(empty($nome) || empty($senha)){
            header('Location: index.php');
            die();
        }
    }

    $nome = $_POST["nome"];
    $senha = $_POST["senha"];
    $op = $_POST['op'];

    if($op == 'cad'){
        $confirm = $_POST["senhaConfirm"];
        handleCadInput($nome, $senha, $confirm);
        handleCad($connection, $nome, $senha);
    } else {
        handleLoginInput($nome, $senha);
        handleLogin($connection, $nome, $senha);
    }
?>

