<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="ejercicio_03.php" enctype="multipart/form-data" method="post">
            <input type="submit" value="Submit"/>
            <br>
        </form>
        <?php
            $i = 0;
            do{
                $a = $i * 5;
                echo "$a <br>";
                $i++;
            }while($i<21);
        ?>
    </body>
</html>