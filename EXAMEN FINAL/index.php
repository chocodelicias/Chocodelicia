<?php
include_once 'conexion.php';
$stmt=$base->query("SELECT * FROM mpagos");
$stmt->setFetchMode(PDO::FETCH_OBJ);
$cantidad=0;
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <title>Conexion PHP</title>
     <meta name="description" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/.css">
</head>

<body>
    

    <div class="container-table">
        <table border="1">
            <tr>
                <td rowspan=15>Pedidos </td>
                <td>Codigo de cliente</td>
                <td>Nombres</td>
                <td>Apellidos</td>
                <td>Dirección</td>
                <td>Teléfono</td>
                <td>Email</td>
                <td>DNI</td>
                <td>Sabor</td>
                <td>Cantidad</td>
                <td>Metodo de pago</td>
            </tr>
            <?php while($fila=$stmt->fetch()) : ?>
                <?php $cantidad=$cantidad + 1 ?>
            <tr>
                <td><?php echo $fila->Codcliente ; ?></td>
                <td><?php echo $fila->Nombre; ?></td>
                <td><?php echo $fila->Apellido; ?></td>
                <td><?php echo $fila->Direccion; ?></td>
                <td><?php echo $fila->Telefono; ?></td>
                <td><?php echo $fila->Email; ?></td>
                <td><?php echo $fila->DNI; ?></td>
                <td><?php echo $fila->Sabor; ?></td>
                <td><?php echo $fila->Cantidad; ?></td>
                <td><?php echo $fila->Mpago; ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>

   
</body>
</html>