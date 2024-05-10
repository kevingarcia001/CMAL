<?php

?>

<div class="container">
        <form method="post" action="">
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="primerNombre" class="form-label">Primer Nombre</label>
                    <input type="text" class="form-control" id="primerNombre" name="primerNombre" required>
                </div>
                <div class="col-md-6">
                    <label for="segundoNombre" class="form-label">Segundo Nombre</label>
                    <input type="text" class="form-control" id="segundoNombre" name="segundoNombre">
                </div>
                <div class="col-md-6">
                    <label for="primerApellido" class="form-label">Primer Apellido</label>
                    <input type="text" class="form-control" id="primerApellido" name="primerApellido" required>
                </div>
                <div class="col-md-6">
                    <label for="segundoApellido" class="form-label">Segundo Apellido</label>
                    <input type="text" class="form-control" id="segundoApellido" name="segundoApellido">
                </div>
                <div class="col-md-6">
                    <label for="edad" class="form-label">Edad</label>
                    <input type="number" class="form-control" id="edad" name="edad" required>
                </div>
                <div class="col-md-6">
                    <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" required>
                </div>
                <div class="col-md-6">
                    <label for="genero" class="form-label">Género</label>
                    <select class="form-select" id="genero" name="genero" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>
                
                <div class="col-md-6">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="tel" class="form-control" id="telefono" name="telefono" required>
                </div>
            </div>
            
        </form>
    </div>

