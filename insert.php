<?php
include("db.php");
$sql="INSERT INTO 'Person'('LastName','FirstName','Email') VALUES('shrestha','dhanney','ds@gmail.com');";

if(mysqli_query($link,$sql))
{
    echo "DATA INSERTED SUCCESSFULLY";
}
else{
    echo "ERROR:couldnt execute sql";
}
mysqli_close($link);
?>