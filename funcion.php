<?php
    include("conexion.php");
    
    
    /*ESTO ES UN ARREGLO*/
    $datos[0] = $_POST['nombre'];
    $datos[1] = $_POST['edad'];
    /*FIN DE ARREGLO*/
    
    /*SEGUNDA MANERA*/
    $arreglo = array(
        "nombre"=>$_POST['nombre'],
        "edad"=>$_POST['edad']
    );
    /*FIN 2da MANERA*/
    $con = mysql_connect($host,$user,$pw) or die("Problemas al conectar al servidor");
    mysql_select_db($db,$con) or die("Problemas de seleccionar la base de datos");
    
    $consulta=mysql_query("INSERT INTO registro (nombre,edad) VALUES ('".$datos[0]."', ".$datos[1].")",$con);
    if($consulta){ ?>
        <h2>REGISTRO INSERTADO:</h2>
        <table>
        <tr><td>NOMBRE</td><td>EDAD</td></tr>
        <tr>
            <td>
                <?=$arreglo['nombre'];?>
            </td>
            <td>
                <?=$arreglo['edad'];?>
            </td>
        </tr>  
        </table>
    <?php } else {
        echo "<h1>ERRORAL INSERTAR EL REGISTRO! VUELVA A INTENTARO</h1>";
        ?>
        <a href="formulario.html">REGRESAR</a>
        <?php
    }
?>