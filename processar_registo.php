<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles.css">
<title>Registo de novo utilizador</title>
</head>

<div class="center" id='conteudo'>
<h1>Resultado do processamento do pedido de registo</h1>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$nome = $_GET['nome'];
$email = $_GET['email'];
$telefone = $_GET['telefone'];
$morada = $_GET['morada'];

echo "<p>nome: ".$nome;
echo "<p>email: ".$email;
echo "<p>telefone: ".$telefone;
echo "<p>morada: ".$morada;


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "aluno123";
$db = "clientes";

$conn = new mysqli($dbhost, $dbuser, $dbpass,$db)
	or die("Ligacao a base de dados falhou: %s\n". $conn -> error);

$sqlQuery="INSERT INTO utilizadores(nome,email,telefone,morada) VALUES ('$nome','$email','$telefone','$morada');";

echo "<p>Query: ".$sqlQuery;
	
$result = $conn->query($sqlQuery);

echo "<p>Cara(o) $nome, o seu pedido foi recebido com sucesso. Brevemente será contactado para completar o registo.";

$conn -> close();


?>

</div>
