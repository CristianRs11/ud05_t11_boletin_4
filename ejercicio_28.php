<html>
    <head>
        <meta charset="utf-8">
    </head>
	<body>
        <form action="ejercicio_28.php" enctype="multipart/form-data" method="post">
            <label>Escribe un número: <input type="number" name="nu1" min=0 /></label><br>
            <input type="submit" value="Enviar" />
        </form>
		<?php
            $num1=$_REQUEST['nu1'];
            $fac= 1;
            echo "$num1!= ";
            for ($i=1; $i <=$num1 ; $i++) { 
                $fac= $fac * $i;
                if ($i<$num1){
                    echo "$i * ";
                }
                else{
                    echo "$i  = ";
                }
            }
            echo "$fac";
		?>
	</body>
</html>