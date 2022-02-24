<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="ejercicio_09.php" enctype="multipart/form-data" method="post">
            <label>Escribe o número: <input type="number" name="nu1" /></lable>
            <br>
            <input type="submit" value="Submit"/>
            <br>
        </form>
        <?php
            $num1 = $_POST['nu1'];
            if (is_numeric($num1)) {
                echo "Ten strlen($num1) díxitos";
            }
            else{
                echo "Escribe números";
            }
        ?>
    </body>
</html>