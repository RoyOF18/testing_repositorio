<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <table class='tabla'>
    <tr>
                <td>Nombre</td>
                <td>Correo</td>
                <td>Genero</td>
                <td>Comentarios</td>
                <td>Ciudad</td>
                <td>Interés</td>
            </tr>
            <?php
                include('conexion.php');
                        //------------------------------------//
                        //--- Aplicable a Sentencia SELECT ---//
                        
                        $sql = "SELECT * FROM formularioDatos";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();

                        // Configura los resultados como un arreglo asociativo
                        $stmt->setFetchMode(PDO::FETCH_ASSOC);
                        
                        // $stmt->fetchAll() Obtiene el arreglo asociativo
                        echo "<tr>";
                        foreach ($stmt->fetchAll() as $row) {
                            echo "<td>" . $row['nombre'] . "</td> " 
                            . "<td>" . $row['correo'] . "</td>" 
                            ."<td>" . $row['genero'] . "</td>"
                           . "<td>". $row['comentarios'] . "</td>" 
                           ."<td>". $row['ciudad'] ."</td>" 
                           ."<td>" . $row['interes'] . "</td>"; 
                           echo "</tr>";
                        }
                        
                
                ?>

    </table>
</body>
</html>