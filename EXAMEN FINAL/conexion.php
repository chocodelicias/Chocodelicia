<?php
try { 
    $base=new PDO('mysql:host=localhost; dbname=examen final; charset=utf8','root'); 
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    echo 'Conexion OK'; 
    } catch (Exception $e) { 
    die ('Error: '.$e->GetMessage()); 
    } 
?>