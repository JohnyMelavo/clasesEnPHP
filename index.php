<?php
session_start();

$_SESSION["HM"] = "Hola Mundo";
?>

<html>
    <head>
        <title>INICIO</title>
    </head>
    <body>
        <div>
            <form method="POST" action="agrega.php">
                <tr>
                    <td>Texto</td>
                    <td><input type="text" name="texto" id="texto" required="true"</td>
                    <td><input type="submit" name="guardar" id="guardar"value="Enviar"</td>
                </tr>            
            </form>
            </br>
            <a href="datos.php">Listado datos</a>
        </div>
    </body>
</html>