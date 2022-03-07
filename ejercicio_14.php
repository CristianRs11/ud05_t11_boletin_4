<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="ejercicio_14.php" enctype="multipart/form-data" method="post">
            <label>Escribe o número base: <input type="number" name="nu1" style="width: 50px;" /></lable><br>
            <label>Escribe o número exponente: <input type="number" name="nu2" min=0 style="width: 50px;" /></label>
            <br>
            <input type="submit" value="Submit"/>
            <br>
        </form>
        <?php
            $num1 = $_POST['nu1'];
            $num2 = $_POST['nu2'];
            $resu= pow($num1,$num2);
            echo "O resultado é $resu ";
        ?>
    </body>
</html>