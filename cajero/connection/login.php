<?php
// Imprimir los datos recibidos por POST para depuración
//print_r($_POST);

// Iniciar la sesión
session_start();

// Verificar si los campos requeridos están establecidos
if (isset($_POST['n_tarjeta']) && isset($_POST['nip'])) {
    require_once './conexion.php'; // Incluir el archivo de conexión

    // Asignar valores de POST a variables
    $n_tarjeta = $_POST['n_tarjeta'];
    $nip = $_POST['nip'];

    // Preparar la consulta usando el procedimiento almacenado
    $sql = "CALL sp_log_tarjetas('$n_tarjeta', '$nip')";
    $result = $conexion->query($sql);

    // Verificar si la consulta devolvió resultados
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verificar el estado del usuario
        if (isset($row['estado']) && $row['estado'] == 'Activo') {
            $_SESSION['error'] = "El usuario ya inició sesión";
            header("Location: ../home/index.php");
            exit();
        }

        // Obtener el ID del cliente
        $cliente_id = $row['id_cliente'];

        // Liberar resultados anteriores
        $result->free();
        $conexion->next_result(); // Asegurarse de que la conexión esté lista para la siguiente consulta

        // Ejecutar la segunda consulta para actualizar el estado del cliente
        $sql = "CALL sp_log_clientes('$cliente_id')";
        $conexion->query($sql);

        // Establecer variables de sesión
        $_SESSION['id'] = $row['id_tarjeta'];
        $_SESSION['n_tarjeta'] = $row['n_tarjeta'];
        $_SESSION['saldo'] = $row['saldo'];
        $_SESSION['id_cliente'] = $row['id_cliente'];
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['ap_paterno'] = $row['ap_paterno'];
        $_SESSION['ap_materno'] = $row['ap_materno'];

        // Redirigir al usuario a la página principal
        header("Location: ../view/home/index.php");
    } else {
        // Si la consulta no devuelve resultados, establecer un mensaje de error
        $_SESSION['error'] = "El número de tarjeta o el NIP son incorrectos";
        header("Location: ../index.html");
    }
} else {
    // Si los campos requeridos no están establecidos, establecer un mensaje de error
    $_SESSION['error'] = "Completa todos los campos";
    header("Location: ../index.html");
}
?>
