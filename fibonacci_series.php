<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci series in php</title>
</head>
<body>
    <form method="POST">
        Enter a number for Fibonacci number: <br>
        <input type="number" name="number" placeholder="Enter a number">  <br> <br>
    <input type="submit" value="Calculate"> 
    </form>
</body>
</html>
<br>

<?php

if($_POST){

    $n1=0;
    $n2=1;
    
    $n=$_POST["number"];
    echo "Fibonacci series for first $n number:\n"; 
    
    echo $n1 ," ", $n2," " ;
    
    $i=0;
    while($i<$n-2){
        $n3=$n1+$n2;
        echo $n3," ";
        
        $n1=$n2;
        $n2=$n3;
        
        $i=$i+1;
    }
}

?>