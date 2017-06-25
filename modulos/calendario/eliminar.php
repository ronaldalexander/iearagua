<?php

    
    //incluimos nuestro archivo config
    include 'config.php'; 

    // Incluimos nuestro archivo de funciones
    include 'funciones.php';

// Eliminar evento
if (isset($_POST['eliminar_evento'])) 
{
    $id  = evaluar($_GET['id']);
    $sql = "DELETE FROM eventos WHERE id = $id";
    if ($conexion->query($sql)) 
    {
        echo '<div align="center" class="bg-info">Evento Eliminado<br><br>';
					
    }
    else
    {
        echo "<div align='center' class='bg-danger'>Evento Eliminado<br><br>";
    }
}