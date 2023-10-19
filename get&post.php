<html>
    <head>
        <title>get&post method</title>
</head>
<body>
    <?php
    //using GET method
    if(isset($_GET["name"])){
        echo "<p>Hi," .$_GET["name"] ."</p>";
        echo '<br>';
        echo '<br>';
    }
    ?>

    <form method="get" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <label for="inputName" >Name:</label>
    <input type="text" name="name" id="inputName">
    <input type="submit" value="submit">

    
<!-- 
    using post method
    if(isset($_POST["name"])){
        echo "<p>Hi," .$_POST["name"] ."</p>";
        echo '<br>';
        echo '<br>';
    }
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <label for="inputName" >Name:</label>
    <input type="text" name="name" id="inputName">
    <input type="submit" value="submit"> -->

</form>
</body>
</html>
