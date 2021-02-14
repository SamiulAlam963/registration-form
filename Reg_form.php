<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
<h1>Registration Form</h1>
<form action="">
  <fieldset>
    <legend>Basic Information:</legend>
    <label for="fname">First name:</label>
    <input type="text" id="fname" name="fname"><br><br>
    <label for="Gender">Gender:</label>
    <br>
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <br><br>
    <label for="dob">Date Of Birth:</label>
    <input type="date" id="dob" name="dob"><br><br>
    
    <label for="Religion">Religion:</label>
   
<select name="religion" id="religion">
  <option value="islam">Islam</option>
  <option value="hindu">Hindu</option>
  <option value="Christian">Christian</option>
  
</select>
<br><br>
<label for="faname">Fathe'r  Name:</label>
    <input type="text" id="faname" name="faname"><br><br>
    <label for="moname">Mother's name:</label>
    <input type="text" id="moname" name="moname"><br><br>

  </fieldset>
  <fieldset>
  <legend>Contact Information</legend>
  <label for="paddress">Personal Address:</label>
    <input type="text" id="paddress" name="paddress"><br><br>
    <label for="paraddress">Permanant Address:</label>
    <input type="text" id="parddress" name="parddress"><br><br>
    <label for="Phone">Phone:</label>
    <input type="tel" id="phone" name="phone"><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>
    <label for="web">Personal Web Link:</label>
    <a href="https://www.w3schools.com/">Visit W3Schools.com!</a>
  </fieldset>
  <fieldset>
  <legend>Academic Information</legend>
  <label for="ssc">SSC Year:</label>
    <input type="number" id="ssc" name="ssc"><br><br>
  <label for="sscins">SSC Institution:</label>
    <input type="text" id="sscins" name="sscins"><br><br>
  <label for="hsc">HSC Year:</label>
    <input type="number" id="hsc" name="hsc"><br><br>
  <label for="hscins">HSC Institution:</label>
    <input type="text" id="hscins" name="hscins"><br><br>
  </fieldset>
  <input type="submit" value="Submit">
</form>
    
</body>
</html>