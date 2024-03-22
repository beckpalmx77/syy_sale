<?php
date_default_timezone_set("Asia/Bangkok");
include('db_value.inc');

try
{
    $conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";port=" .DB_PORT
        ,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
    echo "Error: " . $e->getMessage();
    exit("Error: " . $e->getMessage());
}