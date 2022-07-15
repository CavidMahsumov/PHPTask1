<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

        <?php

            $x1=1;
            $x2=2;
            $x3=3;

            $maxnumber = max($x1, $x2, $x3);
            $minnumber = min($x1, $x2, $x3);
            $sumnumber=$x1+$x2+$x3;
            $hasil=$x1*$x2*$x3;
            $numavg=($x1+$x2+$x3)/3;
            echo "<h2>Max Number : $maxnumber </h2>";
            echo "<h2>Min Number : $minnumber</h2>";
            echo "<h2>Sum Number : $sumnumber</h2>";
            echo "<h2>Hasil  : $hasil</h2>";
            echo "<h2>numerical Avarage  : $numavg</h2>";
           


            
        ?>;
    
</body>
</html>