<html>
    <body>
        <?php
            function add($var=5, $var1=18)
            {
                $sum = $var+$var1;
                echo $sum;echo "<br / >";
            }
            add(10);
            add(12,15);
            add();
        ?>
    </body>
</html>