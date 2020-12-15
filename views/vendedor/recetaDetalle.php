<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RecetaDetalle</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col l2 m12 s12"></div>
            <div class="col l8 m12 s12 center">
              
                      
                            
                        <div class="detalle">
                            <?php if (isset($_SESSION['detalle'])) { ?>
                                <h4>Detalle Receta</h4>
                                <div class="row left-align">
                                    <div class="col l4">
                                        <b>Tipo de lente</b>
                                        <br>
                                        <span class="blue-grey-text lighten-3">
                                            <?= $_SESSION['detalle']['tipo_lente'] ?>
                                        </span>
                                    </div>
                                    <div class="col l4">
                                        <b>Base</b> <br>
                                        <span class="blue-grey-text lighten-3">
                                            <?= $_SESSION['detalle']['base'] ?>
                                        </span>
                                    </div>
                                    <div class="col l4">
                                        <b>Tipo Cristal</b><bR>
                                        <span class="blue-grey-text lighten-3">
                                            <?= $_SESSION['detalle']['tipo_cristal'] ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="row left-align">
                                    <div class="col l4">
                                        <b>Armazón</b><br> <?= $_SESSION['detalle']['armazon'] ?>
                                    </div>
                                    <div class="col l4">
                                        <b>Material Cristal</b><br> <?= $_SESSION['detalle']['material_cristal'] ?>
                                    </div>
                                    <div class="col l4">
                                        <b>Vendedor</b><br> <?= $_SESSION['detalle']['nombre_vendedor'] ?>
                                    </div>
                                    <div class="col l4">
                                        
                                        <b>Fecha Retiro</b><br> <?=
                                         $_SESSION['detalle']['fecha_retiro'] ?>
                                    </div>
                                </div>
                                <br>
                          
                            

                            </div><!--clase detalle -->
                       

                    <?php } else {
                        print "NONE";
                    } ?>
                
            </div>

        </div>

    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>