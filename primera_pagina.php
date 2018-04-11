<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $db_host="localhost";
        $db_nombre="body";
        $db_usuario="root";
        $db_contra="";
        $cconex=mysqli_connect($db_host,$db_usuario,$db_contra);
        //manejo de errores
        if (mysqli_connect_errno()){//esta funcion se va a ejecutar cuando hay error con la bd
            echo "huu fallo host";
            exit();
        }
        //especifica la bd con la que vamos a trabajar
        mysqli_select_db($cconex, $db_nombre) or die("error bd");
        $consulta="Select * from horario";
        
        $result_set=mysqli_query($cconex, $consulta);
        while ($fila = mysqli_fetch_row($result_set)) {
    
            for ($i=0; $i <count($fila); $i++){ 
    
                 echo $fila[$i] ." ";
            }
        //$fila= mysqli_fetch_row($result_set);
        
        
        
  }
        ?>
    </body>
</html>
