<?php
  session_start();

    include("connection.php");
    
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        //something was posted 
        $PatientID = $_POST['PatientID'];
        $Fname = $_POST['Fname'];
        $Lname = $_POST['Lname'];
        $gender = $_POST['gender'];
        $county = $_POST['county'];
        $dateofbirth = $_POST['dateofbirth'];

    //save to database 
    $query ="insert into patient (Firstname,Lastname,Gender,County,DoB) values ('$Firstname','$Lastname','$Gender','$County','$DoB') ";

    mysqli_query($con, $query);
        //header("location:index.html");
        //die;
    }
?>