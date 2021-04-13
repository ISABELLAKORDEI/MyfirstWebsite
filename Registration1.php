<?php

    //something was posted 
        $PatientID = $_POST['PatientID'];
        $Fname = $_POST['Fname'];
        $Lname = $_POST['Lname'];
        $gender = $_POST['gender'];
        $county = $_POST['county'];
        $dateofbirth = $_POST['dateofbirth'];

    $conn =mysqli_connect('localhost','root','','Registration');
 
    //save to database 
    $sql_query = " INSERT  INTO  Patients (PatientID,Firstname,Lastname,Gender,County,DoB) values ('','$Fname','$Lname','$gender','$county','$dateofbirth') ";

    $run = mysqli_query($conn, $sql_query);
    if($run == TRUE)
    {
        echo "Registration Successful";
    }
    else
    {
        echo "Error";
    }
 
?>
