<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página personal</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <div class="nav">
        <a href="index.php">Inicio</a>
        <a href="formulario.php">Formulario</a>
    </div>

    <div class="content">
        <h1><strong>Rodrigo Orozco Flores</strong></h1>
        <h2>Acerca de mi</h2>
        <h3>Academicamente y en el trabajo siempre trato de dar lo mejor de mi para lograr los objetivos que debo obtener.</h3>
        
        <ul> <h3>Mis conocimientos</h3>
            <li>Lenguajes de programacion: c, c++, python y javascript</li>
            <li>Idiomas: B2 inglés</li>
            <li>Protocolos de red</li>
            <li>Servidores</li>
            <li>Manejo de sistemas operativos como Windows y linux</li>
        </ul>
        <ol > <h3>Mis fortalezas</h3>
            <li>Resposabilidad</li>
            <li>Tenacidad</li>
            <li>Proactividad</li>
        </ol>
        <h3>Proyectos</h3>
        <table class="tabla">
            <tr>
                <td>Nombre del proyecto</td>
                <td>Lenguaje</td>
                <td>Descripción</td>
            </tr>
            
            <tr>
                <td>SkilUp</td>
                <td>Javascript</td>
                <td>Página web que ayuda a estudiantes y egresados a obtener empleo. <br>
                    Desarrollado en visual studio code, frameworks usados bootstrap, reactJS y nodeJS
                </td>
            </tr>
            <tr>
                <td>BD Pizzeria</td>
                <td>No aplica</td>
                <td>Base de datos relacional para una pizzería para control de inventarios y ventas, realicé diagramas de entidad relacion y de relación extendido.
                    En general documentación completa para garantizar una buena base de datos funcional, utilicé un gestor de base de datos "postgresql".</td>
            </tr>

            <tr>
                <td>ShopAdmin</td>
                <td>C++</td>
                <td>Programa para administrar las ventas de una tienda de abarrotes, 
                    proyecto final que realicé hace unos semestres para la materia ED con registro de productos con control de entradas y salidas.</td>
            </tr>
        </table>

        <div class="content"> <h3>Persona que admiro</h3>
            <a href="https://es.wikipedia.org/wiki/Cristiano_Ronaldo" target="_blank"><img src="cr7.avif" alt="Ronaldo" class="img"></a>
            <figcaption><strong>Cristiano Ronaldo</strong> futbolista portugués considerado de los mejores delanteros del mundo.</figcaption>
        </div>
        
        <div class="footer"> 
            <h2>Contáctame en...</h2>
            <p><a href="mailto:rodrigo.orozco0297@alumnos.udg.mx">rodrigo.orozco0297@alumnos.udg.mx</a></p>
        </div>
    </div>    
</body>
</html>