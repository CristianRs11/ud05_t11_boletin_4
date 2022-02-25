<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="ejercicio_11.php" enctype="multipart/form-data" method="post">
            <label>Escribe o número: <input type="number" name="nu1" min="0"/></lable><br>
            <input type="submit" value="Submit"/><br>
        </form>
        <?php
            $num1 = $_POST['nu1'];
            $esprimo= true;
            if ($num1 < 0){
                echo "O número $num1 é primo";
            }else{
                for ($i=$num1-1; $i > 1 ; $i--) { 
                    if ($num1%$i==0) {
                        echo "O número $num1 non é primo";
                        $esprimo= false;
                        break;
                    }
                }
                if ($esprimo){
                    echo "O número $num1 é primo";
                }
            }
        ?>
    </body>
</html>