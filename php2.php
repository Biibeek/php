<?php
//defining function before calling 
function greet(){
    echo 'hello';
}
greet();


//defining function after calling them
message();
function message(){
    echo 'thanks for joining';
}
//function along with three parameters
function product($num1,$num2,$num3){
    $product = $num1*$num2*$num3;
    echo "The product is $product";
}

//calling the function
//passing three arguments
product(2,3,5);
?>