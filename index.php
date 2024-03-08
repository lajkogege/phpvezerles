<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vezérlési szerkezetek</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Vezérlési szerkezetek</h1>
    <?php
        echo"<h2>Véletlen számok</h2>";
        //fügvényeket fűzzük a szöveghez!
        echo "Paraméter nélküli véletlen szám:".rand(). "<br>";
        echo "A véletlen szám maximuma: ".getrandmax(). "<br>";
        echo "Zárt intervallumbeli véletlen szám : ".rand(10,20). "<br>";
        echo"<h2>Globális változók</h2>";
        $x= 7;
        $y = 6;
            
        function myTest0() {
            $x=1;
            $y=2;
            //kedő érték nélkül nem müködik 
            $z = $x + $y;
            echo "A (lokális változók) $x és a $y összege: $z <br>" ; 
            // működik:
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
            echo "A (globális változók) " . $GLOBALS['x'].   "és a " . $GLOBALS['y']." összege: ".$GLOBALS['z'];

        }
        myTest0();

        echo"<h2>Operátorok</h2>";
        $adat1=8/3; //valódi osztás
        echo "8/3 eredménye(ez egy valósi osztás a '/' jelel): $adat1<br>";
        echo "8/3 adatípusa: " .gettype($adat1). "<br>";

        echo"<h2>Elágazások</h2>";
        $logikai = (5 == 0);
        echo "5 egyenlő 0-val? <br>";
        echo ($logikai ? 'Ez igaz.' : 'Ez hamis.'); //ternélis operátorok változó ? 'ha igaz.' : 'ha hamis.'

        if ($logikai){ // ez ugyan ezt jelenti csak rövidebb formában(termélisan): echo ($logikai ? 'Ez igaz.' : 'Ez hamis.');
            echo 'ez igaz';
        }
        else{
            echo 'ez hamis';
        }

    ?>
</body>
</html>