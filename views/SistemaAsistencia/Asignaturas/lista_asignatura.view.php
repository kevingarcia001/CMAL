<?php
include_once "../models/asignatura.model.php";
?>


  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <div class="card">
              <div class="card-header ">
              <?php    include_once "../views/SistemaAsistencia/Asignaturas/agregar/agregar.php"; ?>
              </div>
              <!-- /.card-header -->
              <div class="card-body ">
                <table id="example1" class="table table-bordered table-striped " >
                  <thead class="heder-tabla">
                  <tr>
                    <th>Nombre Asignatura</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    
                      $objetoAsignatura = new Asignaturas();
                      $Asignaturas = $objetoAsignatura->read();

                      while($asignatura = mysqli_fetch_array($Asignaturas)){


                      
                    ?>
                  <tr>
                    <td><?= $asignatura['Id_Asignaturas ']; ?></td>
                    <td><?= $asignatura['Nombre_Asignatura ']; ?></td>
                    <td><?= $asignatura['Descripcion_Asignatura ']; ?></td>
                    <td>
                      <a href=""><i class="btn fa-solid fa-eye bg-primary"></i></ion-icon></a>
                      <a data-toggle="modal" data-target="#modal-lg-edit"><i class=" btn fa-solid fa-pen-to-square bg-success"></i></a>
                      <a href="" ><i class="btn fa-solid fa-trash bg-danger"></i></a>
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  <!-- <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot> -->
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


      <!-- Edit -->
  <div class="modal fade" id="modal-lg-edit">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header bg-success">
              <h4 class="modal-title">Editar Asignatura</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php
              include '../views/SistemaAsistencia/Asignaturas/agregar/editar.php'
              ?>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
 
 

