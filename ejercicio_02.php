<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="ejercicio_02.php" enctype="multipart/form-data" method="post">
            <input type="submit" value="Submit"/>
            <br>
        </form>
        <?php
            $i = 0;
            while ($i <= 20) {
                $a = $i * 5;
                echo "$a <br>";
                $i = $i + 1;

            }
        ?>
    </body>
</html>