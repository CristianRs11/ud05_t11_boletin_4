<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            if (isset($_REQUEST["reinicio"])) {
                $intentos = 0;
                $pos = 0;
                $neg = 0;
            }
            $intentos = intval(isset($_REQUEST["int"])?$_REQUEST["int"]+1:0);
            if ($intentos>10){
        ?>
            <form action="ejercicio_13.php" enctype="multipart/form-data" method="POST">
                <input type="submit" name="reinicio" value="Reiniciar">
            </form>
        <?php 
            echo "Hai $pos números positivos <br>";
            echo "Hai $neg números positivos <br>";
            }
            else{

            }
        ?>
        </table>
    </body>
</html>