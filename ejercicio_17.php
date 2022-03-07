<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="ejercicio_17.php" enctype="multipart/form-data" method="post">
            <label>Escribe o número: <input type="number" name="nu1" style="width: 50px;" /></label>
            <br>
            <input type="submit" value="Submit"/>
            <br>
        </form>
        <?php
            $num1 = $_POST['nu1'];
            $resu = 0;
            if (is_numeric($num1)) {
                for ($i=0; $i < 101; $i++) { 
                    $novo = $num1 + $i;
                    $resu = $resu + $novo;
                }
                echo "A suma do número $num1 máis os seus 100 números siguientes é $resu";
            }
        ?>
    </body>
</html>