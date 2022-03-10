<html>
    <head>
        <meta charset="utf-8">
    </head>
	<body>
        <form action="ejercicio_29.php" enctype="multipart/form-data" method="post">
            <label>Escribe o número máximo: <input type="number" name="nu1" min=0 /></label><br>
            <label>Escribe o número entre o que queres dividir: <input type="number" name="nu2" min=1 /></label><br>
            <input type="submit" value="Enviar" />
        </form>
		<?php
            $num1=$_REQUEST['nu1'];
            $num2=$_REQUEST['nu2'];
            if ($num2>=$num1){
                echo "O segundo número ten que ser menor co primeiro.";
            }
            else{
                for ($i=$num1; $i >=0 ; $i--) { 
                    if($i%$num2== 0){
                        echo "$i<br>";
                    }
                }
            }
		?>
	</body>
</html>