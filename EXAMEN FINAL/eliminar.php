<?php 
    require_once "conexion.php"; 
    $id=$_GET['id']; 
 
    $sql=$base->prepare("DELETE FROM mpagos WHERE Codcliente =:id"); 
    $sql->bindParam(":id",$id); 
 
    if($sql->execute()){ 
        echo " Pedido eliminado correctamente...."; 
    }else{ 
        echo " No se ha podido eliminar el Pedido..."; 
    } 
?> 