<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
session_start();
if($_POST['login'] == 'Portaria' and $_POST['senha'] == 'Fatecararas'){
$_SESSION['loggedin'] = true;
header ('location: options.php');
} else {
$_SESSION['loggedin'] = false;
print('credenciais incorretas');
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

<h1> Login </h1>

<form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>" method="POST">
Login: <input type="text" name="login" id="caixa"><br> 
senha: <input type="password" name="senha" id="caixa"><br>
<button type = "submit" name="btn-entrar"> Entrar </button>
</form>
</body>
</html>