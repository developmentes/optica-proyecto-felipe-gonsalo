


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login admiv</title>
    <link rel="stylesheet" href="../../css/style_form.css">
  </head>
  <body>

    <div class="opa">
    <div class="login-box">
      <img src="../../img/45.png" class="avatar" alt="Avatar Image">
      <h1>Login Vendedor</h1>
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

                    if (isset($_SESSION['vendedor'])) {
                        echo $_SESSION['vendedor'];
                        unset($_SESSION['vendedor']);
                    }
                    ?>
                </p>
              
   
                <form action="../../controllers/LoginControllerVendedor.php" method="POST">

                    <label for="rut">Rut</label>
                     <input id="rut" type="text" name="rut">

                       <label for="clave">Clave</label>
                    <input id="clave" type="password" name="clave">
                      

                        <button name="vendedor" value="vendedor"  >Iniciar Sesion</button>

        <a href="../../index.php">Home</a>
      </form>
    </div>
  </div>
  </body>
</html>