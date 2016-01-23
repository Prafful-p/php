<html>
    <head>
        <title>
            demo include
        </title>
    </head>
    <body>
    <?php
        function hello($name){
            echo "hello {$name}";echo"<br/>";
        }
        function hi($sanu){
            echo"hi {$sanu}";echo"<br/>";
        }
    function add($var1,$var2=10){
        echo $var1 + $var2;echo"<br/>";
    }
    ?>
    </body>
</html>