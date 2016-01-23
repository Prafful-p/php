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