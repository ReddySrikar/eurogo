<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "eurogo";
mysql_connect("$db_host","$db_username","$db_password")or die("Couldn't connect to database.!!");
mysql_select_db("$db_name") or die("No Database Found"); 
?>