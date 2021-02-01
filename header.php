<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginBasicoPHP</title>

    <link rel="stylesheet" href="css/main.css">

    <!--Bootstrap-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light bg-gradient">
        
        <div class="container-fluid justify-content-end">
            
            <ul class="navbar-nav">

                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>

                <?php

                    if (isset($_SESSION["useruid"])) {
                        echo "<li class='nav-item'><a class='nav-link' href='profile.php'>Perfil</a></li>";
                        echo "<li class='nav-item'><a class='nav-link' href='includes/logout.inc.php'>Cerrar Sesión</a></li>";
                    }
                    else {
                        echo "<li class='nav-item'><a class='nav-link' href='signup.php'>Registrarse</a></li>";
                        echo "<li class='nav-item'><a class='nav-link' href='login.php'>Iniciar Sesión</a></li>";
                    }
                ?>

                

            </ul>
            
        </div>

    </nav>

    