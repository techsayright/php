<?php
$eror=$eror1=$erornum=$eror2=$not_eror=$not_eror1=false;
    if($_POST){

    // for empty value
        if(empty ($_POST["name"])){
            // echo"You didn't enter the Name! <br>";
            $eror=true;
        }else{
            $name= $_POST["name"];

            // name letter validation
            if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
                // echo"Only alphabets and whitespace are allowed <br>";
                $not_eror=true;
            }
        }
        
        if(empty ($_POST["num"])){
            // echo"You didn't enter the Number! <br>";
            $erornum=true;
        }else{
            $num= $_POST["num"];

            // number validation
            if(!preg_match("/^[0-9]*$/",$num)){
                // echo"Only numeric value is allowed <br>";
                $eror1=true;
            }

            if(strlen($num)!=10){
                // echo"Mobile number must be of 10 digits <br>";
                $not_eror1=true;
            }
        }

        if(empty ($_POST["gender"])){
            // echo"You didn't select Gender! <br>";
            $eror2=true;
        }else{
            $gender= $_POST["gender"];
            
        }

        if($_POST["email"]){

            if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {  
                echo"Invalid email format";  
            }  
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validate form</title>
</head>

<body>
    <h1 style="text-align: center;">Registration Form</h1><br><br>

    <span class="error" style="color:red;">* required field </span>
    <br> <br>

    <form action="validate_form.php" method="POST">

        <label for="name">Full Name:</label>
        <input type="text" name="name" id="name" placeholder="Enter Name"><span class="error"
            style="color:red;">*</span>
        <?php
        if($eror==true){

            echo"<span class = 'error' style='color:red;'>You didn't enter the Name!</span>";
        }
        if($not_eror==true){

            echo"<span class = 'error' style='color:red;'>Only alphabets and whitespace are allowed</span>";
        }
        ?>
        <br><br>

        <label for="num">Phone Number:</label>
        <input type="tel" name="num" id="num" placeholder="Enter Number"><span class="error" style="color:red;">*</span>
        <?php
        if($erornum==true){

            echo"<span class = 'error' style='color:red;'>You didn't enter the Number! </span>";
        }
        if($eror1==true){

            echo"<span class = 'error' style='color:red;'>Only numeric value is allowed</span>";
        }
        if($not_eror1==true){

            echo"<span class = 'error' style='color:red;'><br>Mobile number must be of 10 digits</span>";
        }
        ?>
        <br><br>

        <label for="email">Email ID:</label>
        <input type="email" name="email" id="email" placeholder="Enter Email-ID">
        <br><br>

        <label for="gender">Gender:</label><span class="error" style="color:red;">*</span>
        <?php
        if($eror2==true){

            echo"<span class = 'error' style='color:red;'>You didn't select Gender!</span>";
        }
        ?>
        <br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label> <br><br>

        <label for="add">Address:</label>
        <input type="text" name="add" id="add" placeholder="Enter Address"><br><br>

        <input type="submit" value="Submit">

    </form>
</body>

</html>


<?php
        if(!empty ($_POST["name"]) && !empty ($_POST["num"]) && !empty ($_POST["gender"]) && strlen($num) ==10 && preg_match("/^[a-zA-Z-' ]*$/",$name) && preg_match("/^[0-9]*$/",$num)){
            
            echo "<h2>Your Input:</h2>";
            
            echo "<strong>Name:</strong>".$name;
            echo "<br>";
            
            echo "<strong>Phone Number:</strong>".$num;
            echo "<br>";
            
            echo "<strong>Email ID:</strong>".$_POST["email"];
            echo "<br>";
            
            echo "<strong>Gender:</strong>".$gender;
            echo "<br>";
            
            echo "<strong>Address:</strong>".$_POST["add"];
            echo "<br>";
        }
        

    
?>
