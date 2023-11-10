<?php
    include 'db/conexion.php';
    $query = mysqli_query ($conexion, "SELECT * FROM usuarios");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="js/script.js">
    <title>Punto final</title>
</head>
<body>
<input type="text" id="filterInput" placeholder="Filtrar por nombre">
    <table id="myTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Cedula</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($datos= mysqli_fetch_array ($query)) {
                $id       = $datos['id'];
                $nombre   = $datos['nombre'];
                $apellido = $datos['apellido'];
                $cedula = $datos['cedula'];

                echo '
            <tr>
                <td>'.$id.'</td>
                <td>'.$nombre.'</td>
                <td>'.$apellido.'</td>
                <td>'.$cedula.'</td>
            </tr>
            ';

        }
            ?>

        </tbody>
    </table>
    <script src="js/script.js"></script>
</body>
</html>