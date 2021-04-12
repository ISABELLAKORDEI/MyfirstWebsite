<?php
//database connection
$Servername="localhost";
$Username="root";
$Password="";
$Name="Registration"; 

    $conn =mysqli_connect($Servername,$Username,$Password,$Name);

    if($conn)
    {
        echo "Successfully Connected to the MySQL";
    }
    else
    {
        die('Error');
    }
 
if(isset($_POST['add']))
    {
        //something was posted 
        $PatientID = $_POST['PatientID'];
        $Fname = $_POST['Fname'];
        $Lname = $_POST['Lname'];
        $gender = $_POST['gender'];
        $county = $_POST['county'];
        $dateofbirth = $_POST['dateofbirth'];

    //save to database 
    $sql_query =" INSERT  INTO  Patients (Firstname,Lastname,Gender,County,DoB) values ('$Firstname','$Lastname','$Gender','$County','$DoB') ";

    if (mysqli_query($conn ,$sql_query))
    {
        echo "New Patient Registered Successfully!";
    }
    else
    {
        echo "Error:".$sql ."".mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
?>
