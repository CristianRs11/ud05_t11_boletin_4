<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="ejercicio_12.php" enctype="multipart/form-data" method="post">
            <label>Escribe o número: <input type="number" name="nu1" /></lable>
            <br>
            <input type="submit" value="Submit"/>
            <br>
        </form>
        <?php
        $num1 = $_POST['nu1'];
        $pri = 0;
        $seg = 1;
        echo "$pri <br>";
        echo "$seg <br>";
        for ($i=2; $i < $num1; $i++) { 
            $ter = $pri + $seg;
            echo "$ter <br>";
            $pri= $seg ;
            $seg= $ter;
        }
        ?>
        </table>
    </body>
</html>