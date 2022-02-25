<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="ejercicio_11.php" enctype="multipart/form-data" method="post">
            <label>Escribe o número: <input type="number" name="nu1" /></lable>
            <br>
            <input type="submit" value="Submit"/>
            <br>
        </form>
        <?php
        $num1 = $_POST['nu1'];
        if (isset($num1)){
        ?>
        <table border="solid 1px black">
            <tr>
                <th>Número</th>
                <th>Cuadrado</th>
                <th>Cubo</th>
            </tr>
        <?php
            for ($i=$num1; $i < $num1 + 5; $i++) { 
                $cua=pow($i,2);
                $cub=pow($i,3);
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>$cua</td>";
                echo "<td>$cub</td>";
                echo "<tr>";
            }
        }else{
            echo "Escribe números";
        }
        ?>
        </table>
    </body>
</html>