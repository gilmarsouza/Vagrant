<?php
  echo "Testando conexão MySQL<br /> <br />";
  $servername = "192.168.0.150";
  $username = "phpuser";
  $password = "pass";

  //Creating connection
  $conn = new mysqli($servername, $username, $password);

  //Check Connection
  if ($conn->connect_error){
    die("Conexão falhou: " . $conn->connect_error);
  }

  echo "Conectado com sucesso";
?>
