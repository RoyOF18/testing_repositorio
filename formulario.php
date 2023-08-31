<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="nav">
        <a href="index.php">Inicio</a>
        <a href="formulario.php">Formulario</a>
    </div>
    <div class="tabla">
        <form action="store.php" method="post" >
            <label for="nombre">Nombre:</label> <br>   
            <input type="text" id="nombre" name="nombre" required><br><br>
            <label for="mail">Correo:</label> <br>
            <input type="email" id="mail" name="mail" required><br><br>
            <label >Género</label><br>
            <input type="radio" id="hombre" name="genero" value="h">
            <label for="hombre">Hombre</label><br>
            <input type="radio" id="mujer" name="genero" value="m">
            <label for="mujer">Mujer</label><br>
            <br><label for="contraseña">Contraseña:</label> <br>    
            <input type="password" id="contraseña" name="contraseña" required><br>
            <br><label for="comentario">Comentarios:</label> <br>    
            <textarea id="comentario" name="comentario" required></textarea><br>
            <br><label for="ciudad">Ciudad:</label>   
            <br><select name="ciudad">
                <option value="Guadalajara">Guadalajara</option>
                <option value="Tonala" selected>Tonalá</option>
                <option value="Tlaquepaque">Tlaquepaque</option>
                <option value="Otro">Otro</option>
            </select><br>
        
            <br><label
            ><input type="checkbox" id="cbox1" name="interes" value="si" /> Me interesa contratarte </label
            ><br />
            <br> <button type="submit">Enviar</button>
        </form>
    </div>

    
    <div class="footer">
        <section id="contact">
            <h2>Contáctame en...</h2>
            <p><a href="mailto:rodrigo.orozco0297@alumnos.udg.mx">rodrigo.orozco0297@alumnos.udg.mx</a></p>
        </section>
    </div>
</body>
</html>
