<html>
    <head>
        <meta charset="utf-8">
    </head>
	<body>
        <form action="ejercicio_26.php" enctype="multipart/form-data" method="post">
            <label>Escribe un número: <input type="number" name="nu1" min=10 /></label><br>
            <label>Escribe un díxito: <input type="number" name="nu2" min=0 max=9 /></label><br>
            <input type="submit" value="Enviar" />
        </form>
		<?php
            $num1=$_REQUEST['nu1'];
            $num2=$_REQUEST['nu2'];
            $dixitos=0;
            $canto=strlen($num1);
            for ($i=0; $i <$canto ; $i++) { 
                $dix=substr($num1,$i,1);
                if ($dix == $num2){
                    $dixitos += 1;
                }
            }
            echo "O número $num2 aparece $dixitos veces.";
		?>
	</body>
</html>