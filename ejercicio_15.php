<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="ejercicio_15.php" enctype="multipart/form-data" method="post">
            <label>Escribe o número base: <input type="number" name="nu1" style="width: 50px;" /></lable><br>
            <label>Escribe o número exponente: <input type="number" name="nu2" min=0 style="width: 50px;" /></label>
            <br>
            <input type="submit" value="Submit"/>
            <br>
        </form>
        <?php
            $num1 = $_POST['nu1'];
            $num2 = $_POST['nu2'];
            echo "As $num2 potencias do número $num1 son: ";
            for ($i=1; $i <= $num2; $i++) { 
                if ($i == $num2) {
                    echo $num1."<sup>$i</sup>.";    
                }
                else{
                    echo $num1."<sup>$i</sup>,";
                }
            }
        ?>
    </body>
</html>