<?php
require_once "vistas/parte_superior.php"
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
        <table class="table table-bordered table-striped" id="datos-ventas">
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
            
        </table>  
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        var dataTable =$('#datos-ventas').DataTable({
            "processing":true,
            "serverSide":true,
            "order":[],
            "ajax":{
                url:"obteher_registros.php",
                type: "POST"
            },
            "columnsDefs":[
                {
                "targets":[0,3,4],
                "orderable":false,
                },   
            ]
        });
    });
</script>
<!--FIN DEL CONTENIDO PRINCIPAL-->
<?php
require_once "vistas/parte_inferior.php"
?>