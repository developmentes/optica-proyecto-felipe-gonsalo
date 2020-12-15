

<?php

	session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<h1>Codigo de Receta </h1>

<?php

if (isset($_SESSION['imprimir'])) {
	echo '<p class="white-text center green darken-2 respuesta" >';
	echo $_SESSION['imprimir'];
	echo "</p>";
	unset($_SESSION['imprimir']);
}
?>

<?php
if (isset($_SESSION['errorReceta'])) {
		echo '<p class="white-text center green darken-2 respuesta" >';
		echo $_SESSION['errorReceta'];
		echo "</p>";
		unset($_SESSION['errorReceta']);
	}
	?>
	
</body>
</html>