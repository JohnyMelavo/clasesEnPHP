<?php
session_start();

$_SESSION["HM"]= "Hola Mundo";

?>

<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="POST" action="agrega.php">
            <tr>
                <td>Texto</td>
                <td><input type="text" name="texto" id="texto" required="true"</td>
                <td><input type="submit" name="guardar" id="guardar"value="Enviar"</td>
            </tr>
            
        </form>
    </body>
</html>