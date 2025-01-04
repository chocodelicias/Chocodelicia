<?php 
require_once "conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Obtener datos del formulario
    $codigo = $_POST['codigo'] ?? null;
    $nombre = $_POST['nombre'] ?? null;
    $apellido = $_POST['apellido'] ?? null;
    $direccion = $_POST['direccion'] ?? null;
    $telefono = $_POST['telefono'] ?? null;
    $email = $_POST['email'] ?? null;
    $dni = $_POST['dni'] ?? null;
    $sabor = $_POST['sabor'] ?? null;
    $cantidad = $_POST['cantidad'] ?? null;
    $metododepago = $_POST['metododepago'] ?? null;

    // Preparar la consulta SQL
    try {
        $consulta = $base->prepare("INSERT INTO mpagos (
            Codcliente, Nombre, Apellido, Direccion, Telefono, Email, DNI, Sabor, Cantidad, Mpago
        ) VALUES (
            :codigo, :nombre, :apellido, :direccion, :telefono, :email, :dni, :sabor, :cantidad, :metododepago
        )");

        // Vincular parámetros con los valores
        $consulta->bindParam(':codigo', $codigo, PDO::PARAM_STR);
        $consulta->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $consulta->bindParam(':apellido', $apellido, PDO::PARAM_STR);
        $consulta->bindParam(':direccion', $direccion, PDO::PARAM_STR);
        $consulta->bindParam(':telefono', $telefono, PDO::PARAM_STR);
        $consulta->bindParam(':email', $email, PDO::PARAM_STR);
        $consulta->bindParam(':dni', $dni, PDO::PARAM_STR);
        $consulta->bindParam(':sabor', $sabor, PDO::PARAM_STR);
        $consulta->bindParam(':cantidad', $cantidad, PDO::PARAM_STR);
        $consulta->bindParam(':metododepago', $metododepago, PDO::PARAM_STR);

        // Ejecutar la consulta
        if ($consulta->execute()) {
            echo "Datos guardados correctamente. ¡Gracias por su Pedido!";
        } else {
            echo "Error: No se pudo guardar los datos. Por favor, inténtelo nuevamente.";
        }
    } catch (PDOException $e) {
        echo "Error de base de datos: " . $e->getMessage();
    }
} else {
    echo "Error: Este archivo solo acepta solicitudes POST.";
}
$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>