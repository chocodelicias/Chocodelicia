<?php
    require_once "conexion.php"; 
    $id = $_GET['id']; 
    $nombre = $_GET['nombre']; 
    
    $sql = $base->prepare("UPDATE mpagos SET Nombre=:nombre WHERE Codcliente=:id"); 
    $sql->bindParam(":id", $id); 
    $sql->bindParam(":nombre", $nombre); 
    
    // Ejecutar la consulta
    if ($sql->execute()) { 
        echo "Datos modificados correctamente...."; 
    } else { 
        echo "No se ha podido modificar el registro..."; 
    }

    // Se debe establecer el modo de error después de ejecutar la consulta
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>