<main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h4>Lengua y Literatura</h4>
                    </div>
                    
                    <!-- Table Element -->
                    <div class="card border-0">
                        <div class="card-header">
                            <h5 class="card-title">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Agregar
                            </button>
                            </h5>
                            <h6 class="card-subtitle text-muted">
                            <div class="input-group input-group-sm">
                            <span class="input-group-text" id="inputGroup-sizing-sm"><i class="bi bi-search"></i></span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            </div>
                            </h6>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombres</th>
                                        <th scope="col">Apellidos</th>
                                        <th scope="col">Asistencia</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Kevin Andrés</td>
                                        <td>García Moncada</td>
                                        <td>Presente</td>
                                        <td>
                                        <i class="bi bi-eye text-primary fs-3"></i>
                                        <i class="bi bi-pencil-square text-success fs-3"  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editar" ></i>
                                        <i class="bi bi-trash text-danger fs-3" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" ></i>
                                        </td>
                                       

                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>Ausente</td>
                                        <td>
                                        <i class="bi bi-eye text-primary fs-3"></i>
                                        <i class="bi bi-pencil-square text-success fs-3" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editar"></i>
                                        <i class="bi bi-trash text-danger fs-3"type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" ></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td >Larry the Bird</td>
                                        <td >Larry the Bird</td>
                                        <td>Justificado</td>
                                        <td>
                                        <i class="bi bi-eye text-primary fs-3"></i>
                                        <i class="bi bi-pencil-square text-success fs-3" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editar"></i>
                                        <i class="bi bi-trash text-danger fs-3" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
                                        </td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Button trigger modal -->


                <!-- Agregar -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                        <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Agregar Alumno</h1>
                        <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <div class="container">
                      <?php
                        include "../views/crudAlumno/agregar.php"
                        ?>
                     </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header bg-success">
                        <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Editar Alumno</h1>
                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <div class="container">
                      <?php
                        include "../views/crudAlumno/editar.php"
                        ?>
                     </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-success">Guardar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Delete -->
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header bg-danger">
                        <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">Eliminar Alumno</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Desea elimnar a este alumno?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                      </div>
                    </div>
                  </div>
                </div>
            </main>

   