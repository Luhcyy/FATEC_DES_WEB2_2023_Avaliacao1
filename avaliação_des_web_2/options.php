<?php
session_start();
if(!isset($_SESSION['loggedin']) or $_SESSION ['loggedin'] !== true) {
header ('location: DashBoard.php');
exit;
}
?>


<!DOCTYPE html>
<html">
<head>
<meta charset="UTF-8">
<title>Opções</title>
</head>

<body>
<button onclick="location.href='Cadastro.php'">
Fazer Cadastro
</button>
<br>
<button onclick="location.href='lista.php'">
ver lista
</button>
<br>
<button onclick="location.href='sair.php'">
sair
</button>
</body>
</html>