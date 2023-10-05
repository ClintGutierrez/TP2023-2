<?php
require_once "vistas/parte_superior.php"
?>
<?php
$mysqli = include_once "conexion.php";
$resultado = $mysqli->query("SELECT codigo, cliente, tipo_doc, numero_doc, fecha, monto FROM listar_ventas");
$listar_ventas = $resultado->fetch_all(MYSQLI_ASSOC);
?>
<!--INICIO CONT PRINCIPAL-->
<div class="container">
    <h1>Listar Ventas</h1>

    <div class="justify-content-end">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Buscar por fecha</button>
    </div>
</br>
</br>
    
    <div class="table-responsive">
        <table id="datos-ventas" class="table table-bordered table-striped" >
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Cliente</th>
                    <th>Tipo Doc</th>
                    <th>Numero Doc</th>
                    <th>Fecha</th>
                    <th>Monto</th>
                    <th>Detalle</th>
                </tr> 
            </thead>
            <tbody>
                <?php
                foreach ($listar_ventas as $listar) { ?>
                    <tr>
                        <td><?php echo $listar["codigo"] ?></td>
                        <td><?php echo $listar["cliente"] ?></td>
                        <td><?php echo $listar["tipo_doc"] ?></td>
                        <td><?php echo $listar["numero_doc"] ?></td>
                        <td><?php echo $listar["fecha"] ?></td>
                        <td><?php echo $listar["monto"] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
            
        </table>  
    </div>
</div>


<!--FIN DEL CONTENIDO PRINCIPAL-->
<?php
require_once "vistas/parte_inferior.php"
?>