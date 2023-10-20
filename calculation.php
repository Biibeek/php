<html>
    <head>
        <title>calculation</title>
</head>
<body>
    <?php
    $result='';
    if (isset($_POST['submit'])){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $operator=$_POST['operator'];


        if ($operator == 'add') {
            $result = $num1 + $num2;
            } elseif ($operator == 'sub') {
            $result = $num1 - $num2;
            } elseif ($operator == 'mul') {
            $result = $num1 * $num2;
            } elseif ($operator == 'div') {
            $result = $num1 / $num2;
            }
            } ?>
            
    
   
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <label>Enter first value</label>
        <input type="text" name="num1">
        <br>
        <br>

        <label>Enter second value</label>
        <input type="text" name="num2">
        <br>
        <br>  
        <select name="operator">
            <option value="add">+</option>
            <option value="mul">*</option>
             <option value="div">/</option>
             <option value="sub">-</option>
</select>
<br>
<br>

<input type="submit" name="submit" value="calculate">
<input type="text" value="<?php echo $result;?>">
</form>
</body>
</html>