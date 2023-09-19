
<!DOCTYPE html>
<head>
</head>
<body>
<h1> Lista de cadastros </h1>
<?php
session_start();
if(!isset($_SESSION['loggedin']) or $_SESSION['loggedin'] != true) {
header ('location: DashBoard.php');
exit;
}

$filename = 'dados.txt';
if(!file_exists($filename)){
print ('nenhum cadastro' .PHP_EOL.'<br>');
}
else{
$handle = fopen ($filename, 'r');
while(!feof($handle)) {
print(fgets($handle).PHP_EOL. '<br>');
}
fclose($handle);
}
?>
<button onclick="location.href='options.php'">
retornar
</button>
</body>
</html>