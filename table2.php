<html>
    <head>
        <title>creating table</title>
</head>
<body>
    <?php
  $link = mysqli_connect(localhost,root , 'new-password');

    if($link === false){
        die("ERROR:could not connect." . mysqli_error());
    }
    $sql= "CREATE TABLE persons(id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,Fname VARCHAR(30) NOT NULL,
    Lname VARCHAR(30) NOT NULL,email VARCHAR(70) NOT NULL)";
    if(mysqli_query($link,$sql)){
        echo "table created successfully";
    }
    else{
        echo "ERROR:could not able to execute $sql.".mysqli_error($link);
    }
    mysqli_close($link);
    ?>