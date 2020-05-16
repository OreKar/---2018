<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
<title> ΕΥΧΑΡΙΣΤΟΥΜΕ!  </title>
<link rel="stylesheet" type="text/css" href="mystyle.css" >
</head>

<body style="background-color:#b3ccff;">

  <hr style="background-color: #7979d2; height:4px"><br>

  <table  style="font-size:25px; background-color:#ffb366">
    <tr>
      <td>
      <a class="yaw" href="general.html"><strong> ΚΕΝΤΡΙΚΗ ΣΕΛΙΔΑ </strong> </td></tr>
  </table>

<p style="font-size:25px; text-align:center; font-family:Comic Sans MS"><u> ΕΥΧΑΡΙΣΤΟΥΜΕ ΓΙΑ ΤΗΝ ΚΑΤΑΧΩΡΗΣΗ! </u> </p>


<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ekdromes";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");



$fullName_given = $_SESSION['fullName'];
$Usermail_given = $_SESSION['mail23'];
$dest_given = $_SESSION['dest'];
$arrival_given = $_SESSION['arrival'];
$departure_given = $_SESSION['departure'];
$tickets_given = $_SESSION['tickets'];
$xrewsh = 35 * $tickets_given;






$sql = "INSERT INTO `kratiseis` (`Ονοματεπώνυμο`, `EMAIL`, `Προορισμός`, `Άφιξη`, `Αναχώρηση`, `Εισιτήρια/Άτομα`, `Ημερήσια Χρέωση`)
VALUES (\"{$fullName_given}\", \"{$Usermail_given}\", \"{$dest_given}\", \"{$arrival_given}\", \"{$departure_given}\", \"{$tickets_given}\", \"{$xrewsh}\")";

$result = mysqli_query($conn,$sql);






	mysqli_close($conn);


  ?>



</body>

</html>
