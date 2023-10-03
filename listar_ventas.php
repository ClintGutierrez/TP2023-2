<?php
require_once "vistas/parte_superior.php"
?>
<!--INICIO CONT PRINCIPAL-->
<div class="container">
    <h1>Listar Ventas</h1>

    <div class="justify-content-end">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Buscar por fecha</button>
    </div>
    
    <div class="table-responsive">
        <table class="table">
            <thead class="table table-danger">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Tipo Doc</th>
                    <th scope="col">Numero Doc</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Monto</th>
                    <th>Detalle</th>
                </tr> 
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row">R1C1</td>
                    <td scope="row">R1C2</td>
                    <td scope="row">R1C3</td>
                    <td scope="row">R1C3</td>
                    <td scope="row">R1C3</td>
                    <td scope="row">S/100.00</td>
                    <td ><a href=""><i class="fa fa-search" aria-hidden="true"></i></a></td>
                </tr>
            
            </tbody>
        </table>  
    </div>
</div>
<!--FIN DEL CONTENIDO PRINCIPAL-->
<?php
require_once "vistas/parte_inferior.php"
?>