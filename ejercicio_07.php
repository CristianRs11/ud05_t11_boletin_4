<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            if (isset($_REQUEST["reinicio"])){
                $_REQUEST["intentos"]=0;
                $intentos=0;
            }
            $combi= "1012";
            $intentos= intval(isset($_REQUEST['intentos'])?$_REQUEST["intentos"]+1:0);

            if($intentos<5){
        ?>
        <form action="ejercicio_07.php" enctype="multipart/form-data" method="post">
            <label>Escribe o número: <input type="number" name="combi" /></lable><br>
            <input type="hidden" name="intentos" value="<?php echo $intentos;?>"><br>
            <input type="submit" value="Submit"/><br>
        </form>
        <?php
                    if($combi == $_POST['combi']){
                        echo "<p>La caja fuerte se ha abierto satisfactoriamente<p>";
                    }else{
                        echo "<p>Lo siento, esa no es la combinación</p>";
                    }
            }else{

        ?>
        <form action="ejercicio_07.php" enctype="multipart/form-data" method="post">
            <input type="submit" name="reinicio" value="Reiniciar">
        </form>
        <p>O máximo de intentos é 4.</p>
        <?php
        }
        ?>
    </body>
</html>