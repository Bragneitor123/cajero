<?php
session_start();

include "../../connection/conexion.php";

//print_r($_POST);

if (isset($_POST['monto']) && isset($_SESSION['id']))

    $monto = $_POST['monto'];
$id_tarjeta = $_SESSION['id'];

// Verificar si los campos requeridos están establecidos
if (isset($_POST['monto']) && isset($_POST['id']))
    require_once './conexion.php'; // Incluir el archivo de conexión

//$sql = "SELECT saldo FROM tb_tarjetas WHERE id_tarjeta = '$id_tarjeta'";
$sql = "CALL sp_mostrar_saldo($id_tarjeta)";
$result = $conexion->query($sql);

// Verificar si la consulta devolvió resultados
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Liberar resultados anteriores
    $result->free();
    $conexion->next_result(); // Asegurarse de que la conexión esté lista para la siguiente consulta

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $saldo_actual = $row['saldo'];


        if ($saldo_actual >= $monto) {
            $saldo_nuevo = $saldo_actual - $monto;

            //$sql_update = "UPDATE  SET saldo = '$saldo_nuevo' WHERE id_tarjeta = '$id_tarjeta'";
            $sql_update = "CALL sp_actu_saldo('$id_tarjeta','$monto')";
            if ($conexion->query($sql_update) === true) {
                $_SESSION['saldo'] = $saldo_nuevo;


                header("Location: ../home/index.php");
            } else {
                header("Location: ../home/index.php");
            }
        } else {
            header("Location: ../home/index.php");
        }
    } else {
        header("Location: ../home/index.php");
    }
} else {
    header("Location: ../../index.html");
}
