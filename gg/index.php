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
        <html>
    <head>
        <title>Formulario</title>
        <link rel="stylesheet"  href="estilo.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="from">
            <form action="#" method="post">
                <h1>FORMULARIO</h1>
                <p>Nombre</p>
                <label for="nombre">El nombre loco</label>
                <br>
                <input type="text" name="nombre" placeholder="ingresa nombre...placeholder" required="rellena campo..." >
                  <br>
                  <p>Correo</p>
                <label for="correo">El CORREO loco</label>
                <br>
                <input type="email" name="correo" placeholder="ingresa correo...placeholder" required="rellena campo..." >
                  <br>
                 <p>Mensaje</p>
                <label for="mensaje">Inserta un msj aca ,papá</label>
                <br>
                <textarea type="text" name="nombre" placeholder="ingresa msj...placeholder" required="rellena campo..."></textarea>
                 <br> 
                 <br> 
                <input type="submit" value="Enviar" >
                   
                
            </form>            
        </div>
        
    </body>
    
</html>

        <?php
        ////conectar servidor
       $conectar=mysqli_connect('localhost', 'root','') ;
       //verificamos la conexiom
       if(!$conectar){
           echo "No se puede conectar con el servidor";
       }else{
           $base= mysqli_select_db( 'form_php');
           echo "No se encontro la bd";
       }
       //recuperar las varibles
       $nombre=$_POST['nombre'];
       $correo=$_POST['correo'];
       $mensaje=$_POST['mensaje'];
       //hacemos la sentencia sql
       $sql="INSERT INTO datos Values($nombre,$correo,$mensaje)";
       //Ejecutamos
       $ejecutar= mysqli_query($sql);
       if (!$ejecutar){
           echo "hubo error";
       }else{
           echo "datos guardados<br><a href='index.php'>VOLVER</a>";
}
        ?>
    </body>
</html>
