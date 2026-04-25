<?php
    include("conexion.php");
    include("index.php");
    $_nombre = "";
    $_producto = "";
    $_cantidad = "";
    $_celular = "";
    $_comentarios = "";

    if(isset($_POST['Enviar'])) {
        $_nombre = ($_POST['nombre']);
        $_producto = ($_POST['producto']);
        $_cantidad = ($_POST['cantidad']);
        $_celular = ($_POST['celular']);
        $_comentarios = ($_POST['comentarios']);
    }
    $_sql = "INSERT INTO formulario(nombre, producto, cantidad, celular, comentarios) VALUES ('$_nombre', '$_producto', '$_cantidad', '$_celular', '$_comentarios')";
    $_query = mysqli_query($_con,$_sql);

    if($_query){
        echo " Usuario Insertado Correctamente ";
    } else {
        echo " Usuario no Agregado";
    }
?>
