<!DOCTYPE html>
<html>
<meta charset="UTF-8">

<head><title> LOGIN </title>

<link rel="stylesheet" type="text/css" href="mystyle.css" >


</head>

<h1 style="text-align:center; font-size:350%; color:purple"> <cite> ΣΥΝΔΕΣΗ (Login)</cite> </h1>

<body style="background-color:#b3ccff;">


<hr style="background-color: #7979d2; height:4px"><br>

<table  style="font-size:25px; background-color:#ffb366">
  <tr>
    <td>
    <a class="yaw" href="general.html"><strong> ΚΕΝΤΡΙΚΗ ΣΕΛΙΔΑ </strong> </td></tr>
</table>


<p style="font-size:25px; text-align:center; font-family:Comic Sans MS">
  Συνδεθείτε και δείτε παλιότερες καταχωρήσεις εκδρομών διαφορετικά εάν δεν έχετε λογαριασμό πατήστε εγγραφή.</p>

  <form method="post" style="font-size:25px; text-align:center;  font-family:Comic Sans MS" name="formS"  action=""  >


  <fieldset><legend><strong>ΣΥΝΔΕΣΗ</strong></legend>

    <label for="uname">USERNAME</label><br>
    <input type="text"  name="userN"  required/ > <br>

    <label for="pass">ΚΩΔΙΚΟΣ</label><br>
    <input type="password"  name="pass"  required/ > <br>

    <input type="reset" value="ΚΑΘΑΡΙΣΜΟΣ ΣΤΟΙΧΕΙΩΝ"> <input type="submit" name="submitL" value=" ΣΥΝΔΕΣΗ"  >


  </fieldset>
  </form>

<br><br>


  <table  style="font-size:25px; background-color:#ffb366">
    <tr>
      <td>
      <a class="yaw" href="egra.php"><strong> ΕΓΓΡΑΦΗ </strong> </td></tr>
  </table><br><br>


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


if (isset($_POST['submitL']) && $_POST['submitL']!='' ){

if (isset($_POST['userN']) && $_POST['userN']!='' ){


  $sql = "SELECT EMAIL FROM xri  WHERE Username ='".$_POST['userN']."'";
}   else {
  $sql = "SELECT Username FROM  xri WHERE Username='ΧΧΧΧΧΧ' ";
  }

$UN = mysqli_query($conn,$sql);

if (isset($_POST['pass']) && $_POST['pass']!='' ){


  $sql = "SELECT Κωδικός FROM xri  WHERE Κωδικός ='".$_POST['pass']."'";
}   else {
  $sql = "SELECT Κωδικός FROM  xri WHERE Κωδικός ='ΧΧΧΧΧΧ' ";
  }

$UP = mysqli_query($conn,$sql);


if(mysqli_num_rows($UN) > 0  && mysqli_num_rows($UP) >0 ){


echo '<p style="font-size:25px; text-align:center; font-family:Comic Sans MS">Συνδεθήκατε πατήστε το link για αναζήτηση παλιότερων καταχωρήσεων</p>';

echo '<table style="font-size:25px; background-color:#ffb366">
  <tr>
    <td>
    <a class="yaw" href="search.php"><strong> ΚΑΤΑΧΩΡΗΣΕΙΣ </strong> </td></tr>
</table>';



}

mysqli_close($conn);
}

?>





</body>

</html>
