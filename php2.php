<?php
//1.defining function before calling 
function greet(){
    echo 'hello<br/>';
}
greet();


//2.defining function after calling them
message();
function message(){
    echo 'thanks for joining<br/>';
}
//3.function along with three parameters
function product($num1,$num2,$num3){
    $product = $num1*$num2*$num3;
    echo "The product is $product<br/>";
}

//4.calling the function
//passing three arguments
product(2,3,5);



//5.default value for function parameter
function sayHello($name="John"){
    echo "Hello $name<br/>";
}

sayHello("Romeo");
sayHello();
sayHello("Johnny");

//6.returning values from function
function cube($n){
    return $n*$n*$n;
}
echo "cube of 3 is :".cube(3);
?>