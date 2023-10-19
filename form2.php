<html>
    <head>
        <title>form</title>
</head>
<body>
    <main>
        <!--The line tells the form where to send its data (the current PHP script) while making sure it's safe from security issues.-->
        <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>">
        <div>
        <label for="name"> Name:</label>
            <input type="text" name="name" required="required" placeholder="Enter your name"/>
</div>

<div>
    <!-- we can write this 
<input type="text" id="name" name="email" /> -->
<!-- as -->
    <label for="email">Email:</label>
    <input type="email" name="email" required="required" placeholder="Enter your email"/>
</div>
<button type="submit">Submit</button>
</form>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    ?>
    
<?php
if(isset($_POST['name'],$_POST['email'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    echo "Thanks $name for submitting.<br>";
    echo "please confirm your email $email.";

}
else{
    echo 'you need to provide your name and email.';
}
}
?>
</main>
</body>
</html>