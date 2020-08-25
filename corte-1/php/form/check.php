<?php
    if (isset($_POST['submit'])) {
        $nombre= $_POST['nombre'];
        $apellido= $_POST['apellido'];
        $edad= $_POST['edad'];
        $genero= $_POST['genero'];
        $carrera= $_POST['carrera'];
    }
    /*
    if  (isset($_POST['submit'])) {
        if (empty($nombre)) {
            echo"<p class ='error'>.agrega el nombre</p>"; 
        }else {
            if ($_POST['nombre']==nombre) {
                echo $_POST['nombre']. "es el nombre del estudiante";
            }
            
        }

        

        if (empty($apellido)) {
            echo"agrega el apellido "; 
        }else {
            if (strlen($apellido) < 4) {
                echo "el apellido es demasiado corto";
            }elseif ($_POST['nombre']==apellido) {
                echo $_POST['nombre']. "es el apellido del estudiante";

            }
        }

        if (empty($edad)) {
            echo"agrega la edad "; 
        } else {
            if (!is_numeric($edad)) {
                echo "la edad no es un numero";
            }elseif (is_numeric(edad) < 1 ) {
                echo "la edad no es permitida";
            }elseif (is_numeric(edad) < 14) {
                echo "la edad no es permitida";
            }else {
                echo "$edad";
            }
        }

        if (empty($genero)) {
            echo"agrega el genero"; 
        }elseif ($_POST['genero']) {
            if($_POST['genero']== masculino) {
                echo"la el genero es masculino";
            }elseif ($_POST['genero']== femenino) {
                echo"la el genero es femenino";
            }
            
        }

        if (empty($carrera)) {
            echo"agrega la carrera"; 
        }elseif ($_POST['carrera']) {
            if ($_POST['carrera']==ingenieria) {
                echo"la carrera que estudia es ingenieria";
            }elseif ($_POST['carrera']==medicina) {
                echo"la carrera que estudia es medicina";
            }elseif ($_POST['carrera']==comunicacion) {
                echo"la carrera que estudia es medicina";
            }
        }
    }*/

?>
 <?php echo "el nombre es:".$_POST['nombre']; ?> 
<br><br/>
<?php echo "el apellido es:".$_POST['apellido'];?>
<br><br/> 
<?php echo "la edad es:".$_POST['edad'];?>
<br><br/>
<?php echo "el genero es:".$_POST['genero']; ?>
<br><br/>
<?php echo "la carrera es:".$_POST['carrera']; ?>    
