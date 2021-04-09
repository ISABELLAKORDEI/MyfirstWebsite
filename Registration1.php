<?php
$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="registration"; 

    $conn =mysql_connect('localhost','root','');
    $db = mysql_select_db('registration');

    if($conn)
    {
        echo "Successfully Connected to the database";
    }
    else
    {
        die('Error');
    }
  if($db)
  {
    echo'Successfully Found the database';
  }  
  else  
  {
    die('Error')
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
    $sql_query ="INSERT INTO  patient (Firstname,Lastname,Gender,County,DoB) values ('$Firstname','$Lastname','$Gender','$County','$DoB') ";

    if (mysqli_query($conn ,sql_query))
    {
        echo "New Patient Registered Successfully!";
    }
    else
    {
        echo "Error".$sql ."".mysqli_error($con);
    }

    mysqli_close($conn);