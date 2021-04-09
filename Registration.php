<?php
    include_once 'Assignment/Registration1'
?>

<!DOCTYPE html>    
<html>    
<head>    
    <title>Sign up Form</title>    
    <link rel="stylesheet" type="text/css" href="css/styleSignup.css">    
</head>    
<body>  
      $conn;
    <h2>Registration Page</h2><br>    
    <div class="Signup">    
    <form id="Signup" method="POST" action="http://localhost/Assignment/Registration1.php"> 
        <label><br>PatientID</label>
        <input type="text" name="PatientID" id="Fname" placeholder="PatientID" >    
        <br><br>
        <label><b>First Name     
        </b>    
        </label>    
        <input type="text" name="Fname" id="Fname" placeholder="Firstname" required>    
        <br><br>
        <label><b>LastName     
        </b>    
        </label>    
        <input type="text" name="Lname" id="Lname" placeholder="Lastname" required>    
        <br><br>     
        <label>Gender</label>
        <select>name="gender">
        <option value="male">Male</option>
        <option value="male">Female</option>
        <option value="male">Other</option>
        </select>
        <br></br>  
        <label>County</label>
        <select>name="county">
        <option value="Mombasa(001)">Mombasa(001)</option>
        <option value="Kwale(002)">Kwale(002)</option>
        <option value="Kilifi(003)">Kilifi(003)</option>
        <option value="Tana River(004)">Tana River(004)</option>
        <option value="Lamu(005)">Lamu(005)</option>
        <option value="Taita Taveta(006)">Taita Taveta(006)</option>
        <option value="Garissa(007)">Garissa(007)</option>
        <option value="Wajir(008)">Wajir(008)</option>
        <option value="Mandera(009)">Mandera(009)</option>
        <option value="Marsabit(010)">Marsabit(010)</option>
        <option value="Isiolo(011)">Isiolo(011)</option>
        <option value="Meru(012)">Meru(012)</option>
        <option value="Tharaka-Nithi(013)">Tharaka-Nithi(013)</option>
        <option value="Embu(014)">Embu(014)</option>
        <option value="Kitui(015)">Kitui(015)</option>
        <option value="Machakos(016)">Machakos(016)</option>
        <option value="Makueni(017)">Makueni(017)</option>
        <option value="Nyandarua(018)">Nyandarua(018)</option>
        <option value="Nyeri(019)">Nyeri(019)</option>
        <option value="Kirinyaga(020)">Kirinyaga(020)</option>
        <option value="Murang’a(021)">Murang’a(021)</option>
        <option value="Kiambu(022)">Kiambu(022)</option>
        <option value="Turkana(023)">Turkana(023)</option>
        <option value="West Pokot(024)">West Pokot(024)</option>
        <option value="Samburu(025)">Samburu(025)</option>
        <option value="Trans-Nzoia(026)">Trans-Nzoia(026)</option>
        <option value="Uasin Gishu(027)">Uasin Gishu(027)</option>
        <option value="Elgeyo-Marakwet(028)">Elgeyo-Marakwet(028)</option>
        <option value="Nandi(029)">Nandi(029)</option>
        <option value="Baringo(030)">Baringo(030)</option>
        <option value="Laikipia(031)">Laikipia(031)</option>
        <option value="Nakuru(032)">Nakuru(032)</option>
        <option value="Narok(033)">Narok(033)</option>
        <option value="Kajiado(034)">Kajiado(034)</option>
        <option value="Kericho(035)">Kericho(035)</option>
        <option value="Bomet(036)">Bomet(036)</option>
        <option value="Kakamega(037)">Kakamega(037)</option>
        <option value="Vihiga(038)">Vihiga(038)</option>
        <option value="Bungoma(039)">Bungoma(039)</option>
        <option value="Busia(040)">Busia(040)</option>
        <option value="Siaya(041)">Siaya(041)</option>
        <option value="Kisumu(042)">Kisumu(042)</option>
        <option value="Homa Bay(043)">Homa Bay(043</option>
        <option value="Migori(044)">Migori(044)</option>
        <option value="Kisii(045)">Kisii(045)</option>
        <option value="Nyamira(046)">Nyamira(046)</option>
        <option value="Nairobi County(047)">Nairobi County(047)</option>
        
        </select>
        <br></br>
        <label for="dateofbirth">Date of Birth:</label>
        <input type="date" id="dateofbirth" name="dateofbirth">
        <br><br> 
        <input type="submit" value="Submit">  
    </form>     
</div>    
</body>    
</html>     