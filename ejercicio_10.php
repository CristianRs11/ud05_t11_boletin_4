<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            if (isset($_POST["reiniciar"])) {
                $intentos=0;
                $numeros=0;
            }
            $intentos= $_POST["intentos"];
            $numeros= $_POST["numeros"];
            if (isset($_POST["nu1"]) && $_POST["nu1"]>=0){
                $numeros= intval(isset($_POST["numeros"])?$_POST["numeros"]+intval(isset($_POST["nu1"])?$_POST["nu1"]:0):0);
                $intentos= intval(isset($_REQUEST['intentos'])?$_REQUEST["intentos"]+1:0);
            }
            if (isset($_POST["nu1"]) && $_POST["nu1"] < 0){
                ?>
                <form action="ejercicio_10.php" enctype="multipart/form-data" method="post">
                    <input type="submit" value="Reiniciar" />
                </form>
                <?php
                $media= $numeros/$intentos;
                echo "A túa media é $media";
                }else{
            ?>
            <form action="ejercicio_10.php" enctype="multipart/form-data" method="post">
                <label>Escribe o número: <input type="number" name="nu1" /></label><br>
                <input type="hidden" name="intentos" value="<?php echo $intentos ?>" /><br>
                <input type="hidden" name="numeros" value="<?php echo $numeros ?>" /><br>
                <input type="submit" value="Enviar" />
            </form>
            <?php
            }
        ?>
    </body>
</html>