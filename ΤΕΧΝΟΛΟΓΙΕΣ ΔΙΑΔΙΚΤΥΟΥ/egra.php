<!DOCTYPE html>
<html>
<meta charset="UTF-8">

<head><title> ΕΓΓΡΑΦΗ </title>

<link rel="stylesheet" type="text/css" href="mystyle.css" >


</head>

<h1 style="text-align:center; font-size:350%; color:purple"> <cite>ΕΓΓΡΑΦΗ</cite> </h1>

<body style="background-color:#b3ccff;">


<hr style="background-color: #7979d2; height:4px"><br>

<table  style="font-size:25px; background-color:#ffb366">
  <tr>
    <td>
    <a class="yaw" href="general.html"><strong> ΚΕΝΤΡΙΚΗ ΣΕΛΙΔΑ </strong> </td></tr>
</table>

<p style="font-size:25px; text-align:center; font-family:Comic Sans MS">Συμπληρώστε τα στοιχεία για να ολοκληρώσετε την εγγραφή σας.

</p>

<form method="post" style="font-size:25px; text-align:center;  font-family:Comic Sans MS" name="formS"    >


<fieldset><legend><strong>ΕΓΓΡΑΦΗ</strong></legend>

  <label for="Name">Όνομα:</label>
  <input type="text"  name="name"  required/ > <br><br>

  <label for="epi">Επώνυμο:</label>
  <input type="text"  name="epi"  required/ > <br><br>

  <label for="usmail">Ε-MAIL:</label>
  <input type="email"  name="usmail"  required/ > <br><br>

  <label for="usname">Username:</label>
  <input type="text"  name="usname"  required/ > <br><br>

  <label for="upass">Κωδικός:</label>
  <input type="password"  name="upass"  required/ > <br><br>



<input type="reset" value="ΚΑΘΑΡΙΣΜΟΣ ΣΤΟΙΧΕΙΩΝ"><input type="submit"  name="submitL" value="ΕΓΓΡΑΦΗ">




</fieldset>
</form>

<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ekdromes";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");

if (isset($_POST["submitL"])){



$Onoma =$_POST['name'];
$Epith = $_POST['epi'];
$Email = $_POST['usmail'];
$Uname = $_POST['usname'];
$Kwd = $_POST['upass'];

$sql = "INSERT INTO `xri` (`Όνομα`, `Επώνυμο`, `EMAIL`, `Username`, `Κωδικός`)
VALUES (\"{$Onoma}\", \"{$Epith}\", \"{$Email}\", \"{$Uname}\", \"{$Kwd}\")";


echo '<p style="font-size:40px; text-align:center; font-family:Comic Sans MS"><strong><u>ΕΥΧΑΡΙΣΤΟΥΜΕ ΓΙΑ ΤΗΝ ΕΓΓΡΑΦΗ!</u></strong></p>';




$result = mysqli_query($conn,$sql);


}


mysqli_close($conn);





  ?>




</body>

</html>
