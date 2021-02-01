<?php
    include_once 'header.php';
?>

<section class="login-form">

<h2>Iniciar Sesión</h2>

<div class="loginContainer">

    <div class="row">
        
        <form action="includes/login.inc.php" method="post">

            <div class="col">
                <input type="text" name="uid" placeholder="Nombre de Usuario o Email">
            </div>

            <div class="col">
                <input type="password" name="pwd" placeholder="Contraseña">
            </div>

            <div class="col">
                <button type="submit" class="btn btn-primary btn-rounded" name="submit">Iniciar Sesión</button>
            </div>
            
            <div class="msg">
                <a class="nav-link" href="signup.php">¿Aún no tienes una cuenta?</a>
            </div>
            

        </form>
        
    </div>


</div>

<?php

    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptylogin") {
            echo "<p>Algún campo no ha sido rellenado</p>";
        }
        else if ($_GET["error"] == "wronglogin") {
            echo "<p>Algún campo no es correcto</p>";
        }
    }

?>

</section>

<?php
    include_once 'footer.php';
?>