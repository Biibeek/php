<?php
include("db.php");
$sql="CREATE TABLE Person(
    personid int PRIMARY KEY auto_increment,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255) NOT NULL,
    Email varchar(255) NOT NULL,);";


if(mysql_query($link,$sql)){
    echo "table created successfully";
}
else{
    echo "ERROR:could not execute sql";
}
mysqli_close($link);
?>