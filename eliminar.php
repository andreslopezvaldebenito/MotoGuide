<?php
require('./config/db_connect.php');
if (!empty($_GET)) {
    # code...
    $nom_uauario = $_GET['nom_usuario'];
    $conexion = connect();
    $sql = 'DELETE FROM usuario WHERE nom_usuario = ?';

    if ($stmt = mysqli_prepare($conexion, $sql)) {
        mysqli_stmt_bind_param($stmt, 'i', $nom_usuario);
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_close($stmt);
            mysqli_close($conexion);
            header("Location: usuario.php?msg=3");
        }
    }
} else {
    header("Location: usuario.php?msg=4");
}

?>