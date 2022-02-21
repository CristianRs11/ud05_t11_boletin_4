<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="ejercicio_01.php" enctype="multipart/form-data" method="post">
            <input type="submit" value="Submit"/>
            <br>
        </form>
        <?php
            for ($i=0; $i < 9; $i++) { 
                $a = $i * 20;
                $resu= 320 - $a;
                echo "$resu <br>";
            }
        ?>
    </body>
</html>