<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check even or odd</title>
</head>
<body>
<form method="POST">  
    Enter a number:  
    <input type="number" name="number" placeholder="Enter a number">  <br>
    <input type="submit" value="Submit">  
</form>  
<?php   
    if($_POST){

        $year=$_POST["number"];
        if((0 == $year % 4) & (0 != $year % 100) | (0 == $year % 400)){
        echo "$year is a Leap Year.";    
        } 
        else{  
        echo "$year is not a Leap Year.";    
        }  
    }
    
?>  

</body>
</html>