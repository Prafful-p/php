<?php
    session_start();
?>
<html>
    <head>
        <title>
            Session and cookies
        </title>
    </head>
    <body>
    <?php
        setcookie('samu', 180,time()+(60*5))
    ?>
    <?php
        $var = $_COOKIE['samu'];
        echo $var; echo "  <br/> ";
    //setcookie('samu', 180,time()-(60*5));
    ?>

    <?php
        $_SESSION['firstname']= "Prafful";
        $_SESSION['lasrname']= "Panwar";
    ?>
    <?php
        $name = $_SESSION['firstname']. " " . $_SESSION['lastname'];
        echo $name;
    ?>

    </body>
</html>