<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="ejercicio_16.php" enctype="multipart/form-data" method="post">
            <label>Escribe o número: <input type="number" name="nu1" min="0"/></lable><br>
            <input type="submit" value="Submit"/><br>
        </form>
        <?php
            $num1 = is_numeric($_POST['nu1'])?intval($_POST['nu1']):"a";
            $esprimo= true;
            if (is_numeric($num1)){
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
            }
        ?>
    </body>
</html>