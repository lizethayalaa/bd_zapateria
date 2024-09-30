<7php
    error_reporting(E_ALL);
    ini_set(`display_errors`,`1`);


     //parametros de conexion a la BD
    DEFINE{`USER`, `root`};
    DEFINE{`Pw`,``};
    DEFINE{`HOST`,`localhost`};
    DEFINE{`BD`,`bd_zapateria`};

    //conexion a la BD
    $conexion = mysqli_connect(HOST, USER, Pw, BD);

    //Establecer caracteres para el hosting
    mysqli_set_charset($conexion, "utf8mb4");

    //verificamos la conexion con la BD
    if(!$conexion)
    {
        die("la conexion a la BD fallo: " + mysqli_error($conexion));

    }
    else
    {
        die("conexion exitosa a la BD");
    }
?>
99+
