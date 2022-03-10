<html>
    <head>
        <meta charset="utf-8">
    </head>
	<body>
        <form action="ejercicio_27.php" enctype="multipart/form-data" method="post">
            <label>Escribe un número: <input type="number" name="nu1" min=0 /></label><br>
            <input type="submit" value="Enviar" />
        </form>
		<?php
            $num1=$_REQUEST['nu1'];
            $canto=0;
            $suma= 0;
            for ($i=1; $i <= $num1 ; $i++) { 
                if ($i%3 ==0){
                    $canto+=1;
                    $suma+=$i;
                    echo "$i<br>";
                }
            }
            echo "Son $canto números múltiplos de 3.<br>";
            echo "A suma total deses números é $suma.<br>";
		?>
	</body>
</html>