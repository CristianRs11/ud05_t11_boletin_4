<html>
    <head>
        <meta charset="utf-8">
    </head>
	<body>
        <form>
            <label>Escribe un número: <input type="number" name="nu1" min=1 /></label><br>
            <input type="submit" value="Enviar" />
        </form>
		<?php
            $num1 = $_REQUEST['nu1'];
            for ($i=1; $i <= $num1; $i++) { 
                for ($m=1; $m <= $i; $m++) {
                    echo "0&nbsp";
                }
                echo "<br/>";
            }
		?>
	</body>
</html>