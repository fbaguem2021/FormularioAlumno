<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Alumno</title>
    <link rel="stylesheet" href="./bootstrap-5.2.1-dist/css/bootstrap.min.css">
    <script src="./bootstrap-5.2.1-dist/js/bootstrap.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script> -->
</head>
<body>
    <div class="container">
        <div class="card mt-2">
            <div class="card-header">
                Alumno
            </div>
            <div class="card-body">
                <form action="tabla.php" method="GET">
                    <div class="row mb-3">
                        <label for="txtNombre" class="col-sm-2 col-form-label">Nombre: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="Introduce el nombre">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="dateNacimiento" class="col-sm-2 col-form-label">Fecha de nacimiento</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="dateNacimiento" id="dateNacimiento">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="cbxCurso" class="col-sm-2 col-form-label">Curso: </label>
                        <div class="col-sm-10">
                            <select name="cbxCurso" class="form-select" id="cbxCurso">
                                <option value="daw2a">DAW2A</option>
                                <option value="daw2b">DAW2B</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rbTurno" class="col-sm-2 col-form-label">Turno</label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline"> <!-- form-check-inline -->
                                <input type="radio" class="form-check-input" name="rbTurno" id="rbMa??ana" value="Ma??ana" checked>
                                <label for="rbMa??ana" class="form-check-label">Ma??ana</label>
                            </div>
                            <div class="form-check form-check-inline"><!-- form-check-inline -->
                                <input type="radio" class="form-check-input" name="rbTurno" id="rbTarde"  value="Tarde">
                                <label for="rbTarde" class="form-check-label">Tarde</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="chxIdioma" class="col-sm-2 col-form-label">Idiomas</label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" name="chxIdioma[]" id="chxCatala"   value="Catal??">
                                <label for="chxCatala" class="form-check-label">Catal??</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" name="chxIdioma[]" id="chxEspanyol" value="Espanyol">
                                <label for="chxEspanyol" class="form-check-label">Espanyol</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" name="chxIdioma[]" id="chxAngles"   value="Angles">
                                <label for="chxAngles" class="form-check-label">Angles</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="txtDescription" class="col-sm-2 col-form-label">Descripci??n: </label>
                        <div class="col-sm-10">
                            <textarea name="txtDescription" class="form-control" id="txtDescription" cols="30" rows="10" placeholder="Introduce una descripci??n"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-secondary">Aceptar</button>
                </form>
            </div>
        </div>


        
    </div>
    


    
</body>
</html>