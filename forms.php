<html>
    <head>
        <title>php form</title>
</head>
<body>
     <form method="post" action="process-form.php">
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
</body>


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
?>