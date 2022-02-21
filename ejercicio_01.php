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
            for ($i=0; $i < 21; $i++) { 
                $resu= $i * 5;
                echo "$resu <br>";
            }
        ?>
    </body>
</html>