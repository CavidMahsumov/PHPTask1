<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

        <?php
            //Task1
        
            $data=(int)2;

            echo "<h1 style='font-size:60px;'>Statics</h1>";
            
            $type="Date Type : ".gettype($data);

            echo "<h2>$type</h2>";

            
          

    
        
           $msg=  $data > 0 ? "Data is positive" :
                   ($data < 0 ? "Data is negative" :
                   ($data == 0 ? "Data equals 0" :"Some Error happened"));

            
            echo "<h2>$msg</h2>";

            $data2= $data%2==0 ? "Data is even" :"Data is odd";

            echo "<h1>$data2</h1>" ;
        
        
            

        ?>;
    
</body>
</html>