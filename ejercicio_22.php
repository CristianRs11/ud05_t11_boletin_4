<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php    
        for ($i=2 ; $i <101 ; $i++){
            $esprimo= true;
            for ($m=2; $m < $i ; $m++) { 
                if ($i%$m==0) {
                    $esprimo= false;
                    break;
                }
            }
            if ($esprimo){
            echo "O número $i é primo <br>";
            }
        }
        ?>
    </body>
</html>