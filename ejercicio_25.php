<html>
    <head>
        <meta charset="utf-8">
    </head>
	<body>
        <form action="ejercicio_25.php" enctype="multipart/form-data" method="post">
            <label>Escribe un número: <input type="number" name="nu1" min=10 /></label><br>
            <input type="submit" value="Enviar" />
        </form>
		<?php
            $num1 = $_REQUEST['nu1'];
            $dixito = str_split($num1);
            for ($i=strlen($num1)-1; $i >= 0 ; $i--){
                echo $dixito[$i];
            }
		?>
	</body>
</html>