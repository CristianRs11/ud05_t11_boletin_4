<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="ejercicio_06.php" enctype="multipart/form-data" method="post">
            <input type="submit" value="Submit"/>
            <br>
        </form>
        <?php
            $i = 320;
            $a = 0;
            do {
                $resu = $i - $a * 20;
                echo "$resu <br>";
                $a++;

            } while($a<9)
        ?>
    </body>
</html>