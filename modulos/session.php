<?php



$mysqli = new mysqli("localhost","root","123","system");

$mysqli->query("SET NAMES 'utf8'");

  if ($mysqli->connect_errno) {
      
    
    echo "Fallo al conectar debido a: \n";
      
      echo "Errno: ".$mysqli->connect_errno." ";
      
  } else {
      
    echo "";
  }


?>