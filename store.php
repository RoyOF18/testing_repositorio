<?php           
     include('conexion.php');

        $nombre = $_POST['nombre'];
        $correo = $_POST['mail'];
        $contraseña = $_POST['contraseña'];
        $genero = $_POST['genero'];
        $comentario = $_POST['comentario'];
        $ciudad = $_POST['ciudad'];
        $interes = isset($_POST['interes']) ? $_POST['interes'] : 'no';

        $sql = "INSERT INTO formulariodatos (nombre, correo, contra, genero, comentarios, ciudad, interes) 
                         VALUES ('$nombre', '$correo', '$contraseña', '$genero', '$comentario', '$ciudad', '$interes')";

        $conn->exec($sql);
        header('Location: consulta.php');
    ?>
   