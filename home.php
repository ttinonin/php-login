<?php
    include('./PrivateRoute.php');
    $name = $_SESSION['nome'];
?>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <h1>Helcome to the dashboard <?php echo $name;?></h1>
        <a href="logout.php">Logout</a>
    </body>
</html>