<?php
include_once("../../session.php");
session_start();
if(isset($_SESSION["user"]))
{
	$id = $_GET['id'];	
	$sql = $mysqli->query("delete from grados where id_grado='$id'");	
	if($sql!=null){
				print "<script>alert(\"Eliminado exitosamente.\");window.location='index.php';</script>";
			}else{
				print "<script>alert(\"No se pudo Eliminar.\");window.location='index.php';</script>";

			}
		 
}
?>