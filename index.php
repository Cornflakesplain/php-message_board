<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        $a = "変数の初期状態";

        print $a."</br>";
        
        testChange($a);
        
        print $a;
        
        
        function testChange($b) 
        {

            print $b."</br>";
            
            
            $b = "変数を変更しました";

            print $b."</br>";
        }

        ?>
    </body>
</html>
