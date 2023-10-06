<?php
require_once "vistas/parte_superior.php"
?>
<!--INICIO CONT PRINCIPAL-->
<div class="container">
    <h1>Mi Perfil</h1>

    <section style="background-color: #eee;">
  <div class="container py-5">

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="img/undraw_profile.svg" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3"><?php echo $nombre; ?></h5>
            <p class="text-muted mb-1">Gerente de tienda</p>
            <p class="text-muted mb-4">Magdalena, Lima - Perú</p>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-primary" id="btn-editar">Editar</button>
               <!--MODAL EDIT-->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Perfil</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nombre</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Email</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Teléfono</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Dirección</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                            <input type=button class="btn btn-primary" name=boton value=Cerrar data-dismiss="modal">
                                <button type="button" class="btn btn-primary">Aceptar</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!--FIN EDIT MODAL-->
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nombre</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $nombre; ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">admin@bodeguitamagdalena.com</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Teléfono</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">988 265 458</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Dirección</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Magdalena, Lima - Perú</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</div>
<!--FIN DEL CONTENIDO PRINCIPAL-->
<?php
require_once "vistas/parte_inferior.php"
?>