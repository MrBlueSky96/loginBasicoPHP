<?php
    include_once 'header.php';
?>

<section class="signup-form">

<h2>Registrarse</h2>

<div class="signupContainer">

    <div class="row">
        
        <form action="signup.inc.php" method="post">

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


</section>

<?php
    include_once 'footer.php';
?>