<?php
    include_once 'header.php';
?>

<section class="signup-form">

<h2>Registrarse</h2>

<div class="signupContainer">

    <div class="row">
        
        <form action="includes/signup.inc.php" method="post">

            <div class="col">
                <input type="text" name="name" placeholder="Nombre">
            </div>

            <div class="col">
                <input type="text" name="email" placeholder="Email">
            </div>

            <div class="col">
                <input type="text" name="uid" placeholder="Nombre de Usuario">
            </div>

            <div class="col">
                <input type="password" name="pwd" placeholder="Contraseña">
            </div>

            <div class="col">
                <input type="password" name="pwdRepeat" placeholder="Repetir Contraseña">
            </div>

            <div class="col">
                <button type="submit" class="btn btn-primary btn-rounded" name="submit">Registrarse</button>
            </div>
            
            <div class="msg">
                <a class="nav-link" href="login.php">¿Ya tienes una cuenta?</a>
            </div>
            

        </form>
        
    </div>


</div>

<?php

    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Algún campo no ha sido rellenado</p>";
        }
        else if ($_GET["error"] == "invaliduid") {
            echo "<p>El nombre de usuario no es apropiado</p>";
        }
        else if ($_GET["error"] == "invalidemail") {
            echo "<p>El formato de email no es apropiado</p>";
        }
        else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p>Las contraseñas no coinciden</p>";
        }
        else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Algo ha ido mal. Inténtalo de nuevo</p>";
        }
        else if ($_GET["error"] == "usernametaken") {
            echo "<p>El nombre de usuario ya existe</p>";
        }
        else if ($_GET["error"] == "none") {
            echo "<p>Todo ha salido bien, estás suscrito!!</p>";
        }
    }

?>

</section>



<?php
    include_once 'footer.php';
?>