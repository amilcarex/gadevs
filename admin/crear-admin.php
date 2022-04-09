<?php
include_once 'funciones/funciones.php';

include_once 'templates/header.php';
include_once 'templates/barra.php';
include_once 'templates/navegacion.php';
?>



<!-- Main Sidebar Container -->


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Crear Administrador

          </h1>
        </div>
        <div class="col-sm-6">

        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <div class="row">
    <div class="col-md-8">
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Crear Admin</h3>


          </div>
          <div class="card-body">
            <form role="form" method="post" name="crear-admin" id="crear-admin" action="insertar-admin.php">
              <div class="card-body">

                <div class="form-group">

                  <label for="usuario">Usuario:</label>
                  <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
                </div>

                <div class="form-group">
                  <label for="nombre">Nombre:</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Completo">
                </div>

                <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password para iniciar">
                </div>


              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <input type="hidden" name="agregar-admin" value="1">
                <button type="submit" class="btn btn-primary">Añadir</button>
              </div>
            </form>
          </div>
          <!-- /.card-body -->

          <!-- /.card-footer-->
        </div>
        <!-- /.card -->

      </section>

    </div>

  </div>

  <!-- Main content -->

  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
include_once 'templates/footer.php';
?>