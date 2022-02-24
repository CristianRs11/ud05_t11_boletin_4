<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="ejercicio_08.php" enctype="multipart/form-data" method="post">
            <label>Escribe o número: <input type="number" name="nu1" /></lable>
            <br>
            <input type="submit" value="Submit"/>
            <br>
        </form>
        <?php
            $num1 = $_POST['nu1'];
            if (is_numeric($num1)) {
                echo "<table border=1 width='200' >";
                echo "<tr>";
                echo "<th aling='center' colspan = 2 >Tabla do $num1 </th>";
                echo "</tr>";
                for ($i=0; $i < 11; $i++) { 
                    $resu= $i *$num1;
                    echo "<tr>";
                    echo "<td align='center'>$num1 * $i = </td>";
                    echo "<td align='center'>$resu </td>" ;
                    echo "</tr>";
                }
            }
            else{
                echo "Escribe números";
            }
        ?>
    </body>
</html>