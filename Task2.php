<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

        <?php


            $a=3;
            $b=4;

            $sum1=$a+$b;
            $sum2=$a*$b;
            
            
            echo "1)a+b=.$sum1.     ";
            echo "2)a*b=.$sum2.     ";
            if($a>$b){
                echo "      3)a-b=".$a-$b;
                echo "      4)a/b=".$a/$b;
            }
            else{
                echo "      3)b-a=".$b-$a;
                echo "      4)b/a=".$b/$a;
            }


            
        ?>;
    
</body>
</html>