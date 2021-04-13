<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}
th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
h2{
  text-align: center;
}
</style>
</head>
<body>

<h2><strong>Records Table</strong></h2>

<table>
  <tr>
    <th>PatientID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Gender</th>
    <th>County</th>
    <th>Date Of Birth</th>
  </tr>
  <?php
    
      $conn=mysqli_connect("localhost","root","","Registration");
      $sql ="SELECT * FROM Patients";
      $results = $conn-> query($sql);

      if($results-> num_rows > 0)
      {
        while($row = $results-> fetch_assoc())
        {
          echo "<tr><td>". $row["PatientID"] ."</td><td>" .$row["Firstname"] ."</td><td>" .$row["LastName"] ."</td><td>" .$row["Gender"] ."</td><td>" .$row["County"] ."</td><td>" .$row["DoB"] ."</td></tr>";
        }
        echo "</table>";
      }
      else
      {
        echo "No results";
      }
    $conn->close();
  ?>
  
</table>

</body>
</html>
