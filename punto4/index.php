<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Punto 4</title>
</head>
<body>
    <div id="formulario">
        <h1>Calcula si eres mayor de edad</h1>
    <form class="" action="index.php" method="POST">
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="n1">Fecha de nacimiento</label>
                <input type="date" name="fecha" step="any" class="form-control" id="fecha" required>
            </div>
        </div>
        <button type="submit" name="calcular" class="btn btn-primary">Calcular</button>
    </form>
    
        <div class="resultado">
        <?php
            if (isset($_POST['calcular'])) {
                $fecha = new DateTime($_POST['fecha']);
                $fecha_actual = new DateTime(date('Y-m-d'));
                $diff = $fecha->diff($fecha_actual);
                $año = $diff->y;
                $mes = $diff->m;
                $dia = $diff->d;

                echo 'Fecha de nacimiento = ' . $fecha->format('Y-m-d') .
                    '<br>' .
                    'Fecha actual= ' . $fecha_actual->format('Y-m-d') .
                    '<br>' .
                    'Edad= '.$año.'año(s) '.$mes.'mese(s) y '.$dia. 'dia(s)';
            }
            ?>

    </div>

</div>
    
</body>
</html>


