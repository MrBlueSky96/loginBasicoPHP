<?php
    include_once 'header.php';
?>

<section class="signup-form">

<h2>Iniciar Sesión</h2>

<div class="signupContainer">

    <div class="row">
        
        <form action="login.inc.php" method="post">

            <div class="col">
                <input type="text" name="name" placeholder="Nombre de Usuario o Email">
            </div>

            <div class="col">
                <input type="password" name="pwd" placeholder="Contraseña">
            </div>

            <div class="col">
                <button type="submit" class="btn btn-primary btn-rounded" name="submit">Registrarse</button>
            </div>
            

        </form>
        
    </div>


</div>


</section>

<?php
    include_once 'footer.php';
?>