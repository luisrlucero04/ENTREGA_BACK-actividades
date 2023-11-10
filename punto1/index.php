<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Punto 1</title>
</head>
<body>
    <div id="formulario">
        <h1>CALCULADORA</h1>
    <form class="" action="index.php" method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="n1">NUMERO 1</label>
                <input type="number" name="n1" step="any" class="form-control" id="n1" placeholder="digite numero 1" required>
            </div>
            <div class="form-group col-md-6">
                <label for="n2">NUMERO 2</label>
                <input type="number" name="n2" step="any" class="form-control" id="n2" placeholder="digite numero 2" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputState">Tipo de operacion</label>
                <select id="inputState" name="ope" class="form-control" required>
                    <option value="1">Suma</option>
                    <option value="2">Resta</option>
                    <option value="3">Multiplicacion</option>
                    <option value="4">Division</option>
                </select>
            </div>
        </div>
        <button type="submit" name="operar" class="btn btn-primary">Calcular</button>
    </form>
    
        <div class="resultado">
    <?php
    if (isset($_POST['operar'])){
        $n1=$_POST['n1'];
        $n2=$_POST['n2'];
        $ope=$_POST['ope'];

        switch ($ope) {
            case '1':
                $total = $n1+$n2;
                $ope2 = 'suma';
            break;
            case '2':
                $total = $n1-$n2;
                $ope2 = 'resta';
            break;
            case '3':
                $total = $n1*$n2;
                $ope2 = 'multiplicacion';
            break;
            case '4':
                $total = $n1/$n2;
                $ope2 = 'division';
            break;
        }
    
        echo 'La '.$ope2.' entre el numero 1: '.$n1.' y el numero 2: '.$n2.' es igual a= '.$total.'';
    }
?>

    </div>

</div>
    
</body>
</html>


