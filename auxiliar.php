
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>sistema</title>
</head>
<body>

<?php

session_start();

echo "voce acessou a area para"." ".$_SESSION['nivel'];
	


?><br>
<a href="index.php">Voltar </a>



</body>
</html>

