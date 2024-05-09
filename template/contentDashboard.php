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
                                        <i class="bi bi-eye"></i>
                                        <i class="bi bi-pencil-square" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" ></i>
                                        <i class="bi bi-trash" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" ></i>
                                        </td>
                                       

                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>Ausente</td>
                                        <td>
                                        <i class="bi bi-eye"></i>
                                        <i class="bi bi-pencil-square" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                                        <i class="bi bi-trash"type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" ></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td >Larry the Bird</td>
                                        <td >Larry the Bird</td>
                                        <td>Justificado</td>
                                        <td>
                                        <i class="bi bi-eye"></i>
                                        <i class="bi bi-pencil-square" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                                        <i class="bi bi-trash" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
                                        </td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Button trigger modal -->


                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Alumno</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <div class="container">
                        <form>
                            <div class="row">
                                <!-- Columna izquierda -->
                                <div class="col-md-6">
                                    <!-- Input 1 -->
                                    <div class="form-group">
                                        <label for="input1">Primer Nombre</label>
                                        <input type="text" class="form-control" id="input1" placeholder="Primer Nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="input1">Primer Apellido</label>
                                        <input type="text" class="form-control" id="input1" placeholder="Primer Apellido">
                                    </div>
                                   
                                    <!-- Input 2 (select) -->
                                    <div class="form-group">
                                        <label for="input2">Sexo</label>
                                        <select class="form-control" id="input2">
                                            <option>Masculino</option>
                                            <option>Femenino</option>

                                        </select>
                                    </div>
                                    <!-- Input 3 -->
                                    <div class="form-group">
                                        <label for="input3">Telefono</label>
                                        <input type="text" class="form-control" id="input3" placeholder="Telefono">
                                    </div>
                                </div>
                                <!-- Columna derecha -->
                                <div class="col-md-6">
                                <div class="form-group">
                                        <label for="input2">Segundo Nombre</label>
                                        <input type="text" class="form-control" id="input2" placeholder="Segundo Nombre">
                                    </div>
                                    <!-- Input 4 -->
                                    <div class="form-group">
                                        <label for="input4">Segundo Apellido</label>
                                        <input type="text" class="form-control" id="input4" placeholder="Segundo Apellido">
                                    </div>
                                    <!-- Input 5 (select) -->
                                   
                                    <div class="form-group">
                                        <label for="input6">Fecha de Nacimiento</label>
                                        <input type="text" class="form-control" id="input6" placeholder="Fecha de Nacimiento">
                                    </div>
                                   
                                </div>
                            </div>
                        </form>
                        </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Delete -->
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Eliminar Alumno</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Desea elimnar a este alumno?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Eliminar</button>
                      </div>
                    </div>
                  </div>
                </div>
            </main>

   