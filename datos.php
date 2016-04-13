<html>
    <head>
        <title>DATOS</title>
    </head>
    <body>
        <div>

            <?php
            session_start();

            if (isset($_SESSION["atexto"])) {
                $atexto = $_SESSION["atexto"];
                $row = count($atexto);
            }
            for ($i = 0; $i < $row; $i++) {
                echo $atexto[$i] . "<br>";
            }
            ?>
            </br>
            <a href="index.php"><---VOLVER</a>
        </div>
    </body>
</html>
