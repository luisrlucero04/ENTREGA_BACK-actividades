<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Punto 3</title>
</head>
<body>
    <div class="todo">

        <div id="formulario">
        <h1>Ingresa tus datos</h1>
    <form class="" action="respuesta_ejercicio3.php" method="GET">
            <div class="form-row">
                <div class="form-group col-md-12">
                <label for="nombre">Nombres</label>
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Digite su nombre completo" required>
                </div>
                <div class="form-group col-md-12">
                <label for="apellido">Apellidos</label>
                <input type="text" name="apellido" class="form-control" id="apellido" placeholder=" Digite sus apellidos" required>
                </div>
                <div class="form-group col-md-12">
                <label for="number_id">Cedula</label>
                <input type="number" name="number_id" class="form-control" id="number_id" placeholder="Digite su numero de cedula" required>
                </div>
            </div>
            <button type="submit" name="datos" class="btn btn-primary">Enviar</button>
        </div>

    </form>
    </div>
    <div>

</div>
    
</body>
</html>