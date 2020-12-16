
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login admiv</title>
    <link rel="stylesheet" href="css/style_form.css">
  </head>
  <body>

    <div class="opa">
    <div class="login-box">
      <img src="img/45.png" class="avatar" alt="Avatar Image">
      <h1>Login Optica</h1>
      <h4 class="center ">seleccione el tipo de usuario asignado </h4>

      <!-- <p class="red-error">
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
               -->
   
               

                <div class="input-field">
                      <a href="views/loginAdmin.php"><button style="margin-bottom: 20px;">Administrador</button></a>
                    </div>
                    
                    <div class="input-field">
                         <a href="views/vendedor/loginVendedor.php"><button class="btn blue lighten-2 black-text" value="vendedor">Vendedor</button></a>
                    </div>

                      

        <a href="index.php">Home</a>
     
    </div>
  </div>
  </body>
</html>