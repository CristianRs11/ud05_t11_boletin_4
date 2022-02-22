<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="ejercicio_05.php" enctype="multipart/form-data" method="post">
            <input type="submit" value="Submit"/>
            <br>
        </form>
        <?php
            $i = 320;
            $a=0;
            while ($a < 9) {
                $resu = $i - $a * 20;
                echo "$resu <br>";
                $a++;
            }
        ?>
    </body>
</html>