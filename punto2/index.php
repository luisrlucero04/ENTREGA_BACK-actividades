<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Punto 2</title>
</head>
<body>
    <div class="todo">

        <div id="formulario">
        <h1>Comprobacion de mayoria de edad</h1>
    <form class="" action="index.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-12">
                <label for="edad">Digita tu edad</label>
                <input type="number" name="edad" class="form-control" id="edad" placeholder="Edad" required>
                </div>
            </div>
            <button type="submit" name="calcular" class="btn btn-primary">Calcular</button>
        </div>

    </form>
    
        <div class="resultado">
    <?php
    if (isset($_POST['calcular'])){
        $edad=$_POST['edad'];

        if ($edad >= 18){
            echo 'Usted es mayor de edad';
    } else{
        echo '<h2> Usted es menor de edad</h2>'; 
    }
}
?>

    </div>

    <div>

</div>
    
</body>
</html>
