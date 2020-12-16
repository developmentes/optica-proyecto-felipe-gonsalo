



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login admiv</title>
    <link rel="stylesheet" href="../css/style_form.css">
  </head>
  <body>

    <div class="opa">
    <div class="login-box">
      <img src="../img/45.png" class="avatar" alt="Avatar Image">
      <h1>Login Administrador</h1>
      <p class="red-error">
                    <?php
                    session_start();
                    if (isset($_SESSION['error'])) {
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    }
                    ?>
                </p>
              

                <p class="red-success">
                    <?php

                    if (isset($_SESSION['respuesta'])) {
                        echo $_SESSION['respuesta'];
                        unset($_SESSION['respuesta']);
                    }
                    ?>
                </p>
              
      <form action="../controllers/LoginControllerAdmin.php" method="POST">
               
                    <label for="rut">Rut</label>
                     <input id="rut" type="text" name="rut">

                       <label for="clave">Clave</label>
                    <input id="clave" type="password" name="clave">
                      

                        <button name="admin" value="administrador" class="btn blue lighten-2 black-text" Style="box-shadow: 3px 3px 12px hsl(240, 2%, 10%)" >Iniciar Sesion</button>

        <a href="../index.php">Home</a>
      </form>
    </div>
  </div>
  </body>
</html>
