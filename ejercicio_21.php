<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            if (isset($_POST["reiniciar"])) {
                $intentos=0;
                $numeros=0;
                $par=0;
                $impar=0;
                $maxpar=0;
            }
            $intentos= $_POST["intentos"];
            $numeros= $_POST["numeros"];
            $par= $_POST['par'];
            $impar= $_POST['impar'];
            $maxpar= $_POST['maxpar'];
            if (isset($_POST["nu1"]) && $_POST["nu1"]>=0){
                $intentos= intval(isset($_REQUEST['intentos'])?$_REQUEST["intentos"]+1:0);
                if ($_POST['nu1'] % 2 == 0) {
                    $par= $_POST['nu1'];
                    if (($par % 2 == 0) && ($par > $maxpar)){
                        $maxpar= intval(isset($_REQUEST["maxpar"])?$par:0);
                    }
                }
                else{
                    $impar=intval(isset($_REQUEST['impar'])?$_REQUEST['impar']+1:0);
                    $numeros= intval(isset($_REQUEST['numeros'])?$_REQUEST['numeros']+intval(isset($_REQUEST['nu1'])?$_REQUEST['nu1']:0):0);
                }
            }
            if (isset($_POST["nu1"]) && $_POST["nu1"] < 0){
                ?>
                <form action="ejercicio_21.php" enctype="multipart/form-data" method="post">
                    <input type="submit" value="Reiniciar" />
                </form>
                <?php
                $mediaimpar= $numeros/$impar;
                echo "Introducironse $intentos números. <br>";
                echo "A media par impar é $mediaimpar. <br>";
                echo "O número máximo par foi $maxpar. <br>";
                }else{
            ?>
            <form action="ejercicio_21.php" enctype="multipart/form-data" method="post">
                <label>Escribe o número: <input type="number" name="nu1" /></label><br>
                <input type="hidden" name="intentos" value="<?php echo $intentos ?>" /><br>
                <input type="hidden" name="numeros" value="<?php echo $numeros ?>" /><br>
                <input type="hidden" name="par" value="<?php echo $par ?>" /><br>
                <input type="hidden" name="impar" value="<?php echo $impar ?>" /><br>
                <input type="hidden" name="maxpar" value="<?php echo $maxpar ?>" /><br>
                <input type="submit" value="Enviar" />
            </form>
            <?php
            }
        ?>
    </body>
</html>