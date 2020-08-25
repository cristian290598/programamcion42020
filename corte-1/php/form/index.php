
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form method = "post" action ="check.php">
        
       <h1> ingrese nombre de la persona</h1>
        <br><br/>
        
        <label for=""> Nombre</label>
        <input type="text" name="nombre" >
        <label for=""> Apellido</label>
        <input type="text" name="apellido" >
        <br><br/>

        <label for=""> Edad</label>
        <input type="number" name="edad" >
        <br><br/>

        <input type="radio" name="genero" value="masculino">Masculino
        <input type="radio" name="genero" value="femenino">Femenino
        <br><br/>

        <label for=""> Carrera que cursa</label>
        <select name="carrera" >
            <option value="ingenieria"> ingenieria</option>
            <option value="medicina"> medicina</option>
            <option value="comunicacion"> comunicacion</option>
            
        </select>
        <br><br/>
        <input type="submit" value="enviar ">
        
    </form>
</body>
</html>