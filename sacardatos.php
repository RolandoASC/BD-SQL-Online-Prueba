<?php
    include("conexion.php");
    $con = mysql_connect($host,$user,$pw) or die("Problemas al conectar al servidor");
    mysql_select_db($db,$con) or die("Problemas de seleccionar la base de datos");
    $consulta=mysql_query("SELECT * FROM registro");
    
    if($consulta){
        while($row=mysql_fetch_array($consulta)){?>
            <h4>
                <?="ID: ".$row['id']?>
            </h4>
            <h4>
                <?="NOMBRE: ".$row['nombre']?>
            </h4>
            <h4>
                <?="EDAD: ".$row['edad']?>
            </h4>
        <?php }
    } else {
        echo "ERROR DE CONSULTA equisDE";
    }
?> 