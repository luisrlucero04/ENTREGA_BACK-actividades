<?php
    if (isset($_GET['datos'])){
       $nombre =$_GET['nombre'];
       $apellido =$_GET['apellido'];
       $number_id =$_GET['number_id'];
        echo 'Nombre:'.$nombre.'<br>'.
        'Apellido:'.$apellido.'<br>'.
        'Cedula:'.$number_id.'<br>';
     }
?>