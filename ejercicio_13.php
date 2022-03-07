<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            session_start();
            $_SESSION['pos'];
            $_SESSION['neg'];
            if (isset($_REQUEST["reinicio"])) {
                $_REQUEST["int"]= 0;
                $intentos = 0;
                $_REQUEST["num"];
                $num;
                $_SESSION['pos'] = 0;
                $_SESSION['neg'] = 0;
            }
            $intentos = isset($_REQUEST["int"])?$_REQUEST["int"]+1:0;
            if ($intentos < 11){
                ?>
                <form action="ejercicio_13.php" enctype="multipart/form-data" method="POST">
                    <input type="number" name="num">
                    <input type="hidden" name="int" value="<?php echo $intentos;?>">
                    <input type="submit" value="Enviar">
                </form>
                <?php
                $num=is_numeric($_REQUEST['num'])?intval($_REQUEST["num"]):"a";
                if (is_numeric($num)){
                    if ($num >= 0) {
                        $_SESSION['pos'] ++;
                        echo "pos";
                    }
                    elseif ($num < 0){
                        $_SESSION['neg'] ++;
                        echo "neg";
                    }
                }
            }
            else{
            ?>
            <form action="ejercicio_13.php" enctype="multipart/form-data" method="POST">
                <input type="submit" name="reinicio" value="Reiniciar">
            </form>
        <?php 
            echo "Hai ".$_SESSION['pos']." números positivos <br>";
            echo "Hai ".$_SESSION['neg']." números negativos <br>";
            }
        ?>
    </body>
</html>