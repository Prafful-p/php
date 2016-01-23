<?php
    require_once("include/connection.php");
    $query="TRUNCATE TABLE operationb";
    mysql_query($query);
    header("location: index.php");
?>