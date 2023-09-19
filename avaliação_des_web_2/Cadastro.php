<?php
session_start();
if(!isset($_SESSION['loggedin']) or $_SESSION['loggedin'] != true) {
header ('location: DashBoard.php');
exit;
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
if (!empty($_POST['nome']) and !empty($_POST['RA']) and !empty($_POST['placa'])) {
$filename = 'dados.txt';
$handle = fopen($filename, 'a');
fwrite($handle, 'Nome: '.$_POST['nome'].' | '.'RA: '.$_POST['RA'].' | '.'Placa: '.$_POST['placa'].PHP_EOL);
fflush($handle);
fclose($handle);
print ('cadastro concluido');
}
else{
print ('favor completar o cadastro.');
}
}

?>


<!DOCTYPE html>
<head>
<title>Document</title>
</head>
<body>
<H1> Cadastro para estacionamento </H1>

<form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method ="POST">
Nome completo: <input type="text" name="nome"><br>
RA: <input type="text" name="RA"><br> 
Placa do veiculo: <input type="text" name="placa"><br> 
<button type="submit" name="btn-cadastrar"> cadastrar </button>
<button type="button" onclick="location.href='options.php'"> Voltar </button>
</body>
</html>