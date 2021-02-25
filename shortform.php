<!-- this is easiest way to connect database with html by using data object -->

<?php

// database connection
$con= new mysqli('localhost','root','','shortform');
if($con->connect_error){
    die('connection failed:'.$con->connect_error);
}
else{
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $age= $_POST['age'];
    $enroll= $_POST['enroll'];
    $college= $_POST['collegename'];

    // echo"hi";
    // dont forget to do backticks in sql query...its here
    $stmt= $con->prepare("INSERT INTO `first_data`(`fname`, `lname`, `age`, `enrollmentNo.`, `collegeName`) values(?, ?, ?, ?, ?)");
    
    $stmt->bind_param("ssiis",$fname,$lname,$age,$enroll,$college);
    $stmt->execute();
    echo"registration successfully...\n"; 
    echo"thanks to darshan";
    $stmt->close();
    $con->close();
}

?>