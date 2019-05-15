<?php


include_once('dbconnection.php');
$dbConnection = DbConnection::getDbConnection();
extract($dbConnection->viewcatogary()->fetch_assoc());
echo $name;

$ss = $dbConnection->viewcatogary()->fetch_assoc();
echo "<br>";
print_r($ss['1']);





?>