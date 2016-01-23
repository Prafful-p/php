<?php
    $connection = mysql_connect("localhost","root","prafful");

    if(!$connection)
    {
        die("database connection error" . mysql_error());
    }
    $db_select_db = mysql_select_db("widget_corp",$connection);

    if(!$db_select_db)
    {
    die("database error" . mysql_error());
    }
?>
<html>
    <head>
        <title>
            basic php with mysql
        </title>
    </head>
    <body>
    <?php
        $result = mysql_query("SELECT * FROM subjects" , $connection);
        if(!$db_select_db)
        {
            die("query error" . mysql_error());
        }
        while($row = mysql_fetch_array($result))
        {
            echo $row[1] . " " . $row[2] . " " . $row[3] ." <br />";
        }
    ?>
    </body>
</html>
<?php
    mysql_close($connection);
?>
