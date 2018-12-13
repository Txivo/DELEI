<?php

    $db_host = "localhost" ;
    $db_user = "root" ;
    $db_password = "ha9056";
    $db_name = "login" ;
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name) ;

    if(mysqli_connect_errno($conn))
        echo "Database connection failed : ".mysqli_connect_error() ;
    else
        echo "Database connected<br><br>" ;


    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $apellidoPaterno=$_POST['apellidoPaterno'];
    $correo=$_POST['correo'];
    $password=$_POST['password'];
    $password2=$_POST['password2'];
    $dirección=$_POST['dirección'];
    $dirección2=$_POST['dirección2'];
    $ciudad=$_POST['ciudad'];
    $estado=$_POST['estado'];
    $codigo=$_POST['codigo'];
    $telefono=$_POST['telefono'];

    $qry = "SELECT * FROM login WHERE NAME = '$nombre'" ;

    $result = mysqli_query($conn, $qry) ;
    $row = mysqli_fetch_array($result) ;

    $qry = "INSERT INTO login VALUES($nombre, $apellidoPaterno, $dirección, $dirección2, $ciudad, $estado, $codigo, $teléfono)";

    mysqli_query($conn, $qry);

 ?>