<?php

function obtener_todos_registros(){
    include('conexion.php');
    $stmt = $mysqli->prepare("SELECT * FROM listar_ventas");
    $stmt->execute();
    $resultado = $stmt->fetchAll();
    return $stmt->rowCount();
}

?>