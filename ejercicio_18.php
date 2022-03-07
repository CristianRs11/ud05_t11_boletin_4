<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="ejercicio_18.php" enctype="multipart/form-data" method="post">
            <label>Escribe o primer número: <input type="number" name="nu1" style="width: 50px;" /></label><br>
            <label>Escribe o segundo número: <input type="number" name="nu2" style="width: 50px;" /></label><br>
            <input type="submit" value="Submit"/><br>
        </form>
        <?php
            $num1 = $_POST['nu1'];
            $num2 = $_POST['nu2'];
            
            if (is_numeric($num1) && is_numeric($num2)) {
                if ($num1 + 7 < $num2){
                    $num1 = $num1 + 1;
                    echo "$num1<br>";
                    $resu = $num1 + 7;
                    echo "$resu<br>";
                    while ($resu + 7 < $num2){
                        $resu = $resu + 7;
                        echo "$resu<br>";
                    }
                }
                else{
                    echo "Ten que haber unha diferencia de 7 entre o siguiente do primerio e o segudo.";
                }
            }
        ?>
    </body>
</html>