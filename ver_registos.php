<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "aluno123";
$db = "clientes";

$conn = new mysqli($dbhost, $dbuser, $dbpass,$db)
	or die("Ligacao a base de dados falhou: %s\n". $conn -> error);

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles.css">
<title>Lista de pedidos de registo</title>
</head>


<body>

<div id='conteudo'>
    <h1 class="center"> Lista de pedidos</h1>

    <?php
      $sqlQuery="SELECT * FROM utilizadores;";
	
      $result = $conn->query($sqlQuery);
      
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "<p>".$row['nome']." ( email: ".$row['email'].", telefone: ".$row['telefone'].", morada: ".$row['morada']." )";
        
        }
      }

      $conn -> close(); 
  

    ?>



</div>


</body>
</html>
