<!DOCTYPE html>
<html>
<meta charset="UTF-8">

<head><title> ΚΑΤΑΧΩΡΗΣΕΙΣ </title>

<link rel="stylesheet" type="text/css" href="mystyle.css" >


</head>

<h1 style="text-align:center; font-size:350%; color:purple"> <cite> ΚΑΤΑΧΩΡΗΣΕΙΣ</cite> </h1>

<body style="background-color:#b3ccff;">


<hr style="background-color: #7979d2; height:4px"><br>

<table  style="font-size:25px; background-color:#ffb366">
  <tr>
    <td>
    <a class="yaw" href="general.html"><strong> ΚΕΝΤΡΙΚΗ ΣΕΛΙΔΑ </strong> </td></tr>
</table><br><br>




<form method="post" style="font-size:25px; text-align:center;  font-family:Comic Sans MS"  >
<label for="mymail">Αναζήτηση προηγούμενων καταχωρήσεων με EMAIL: </label><input type="text"
 name="mymail" placeholder="π.χ. giorgoskat@gmail.com">
<input type="submit" name="submit" value="Αναζήτηση" >
</form>
<br><br>


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



if (isset($_POST['mymail']) && $_POST['mymail']!='' ){
$sql = "SELECT Ονοματεπώνυμο, EMAIL,Προορισμός, Άφιξη, Αναχώρηση,`Εισιτήρια/Άτομα`,`Ημερήσια Χρέωση` FROM kratiseis
WHERE EMAIL='".$_POST['mymail']."'";
} else {
$sql = "SELECT Ονοματεπώνυμο, EMAIL,Προορισμός, Άφιξη, Αναχώρηση,`Εισιτήρια/Άτομα`,`Ημερήσια Χρέωση` FROM
kratiseis WHERE EMAIL='ΧΧΧΧΧΧ' ";
}

$result = mysqli_query($conn,$sql);


if (mysqli_num_rows($result) > 0) {
 echo "<table style='border:1px solid black'>";
echo
"<tr><th>Ονοματεπώνυμο</th><th>EMAIL</th><th>Προορισμός</th><th>Άφιξη</th><th>Αναχώρηση</th><th>Εισιτήρια/Άτομα</th><th>Ημερήσια Χρέωση</th></tr>";
// εκτύπωση αποτελεσμάτων
 while($row = mysqli_fetch_assoc($result)) {
echo "<tr>".
"<td>".$row['Ονοματεπώνυμο']."</td>".
"<td>".$row['EMAIL']."</td>".
"<td>".$row['Προορισμός']."</td>".
"<td>".$row['Άφιξη']."</td>".
"<td>".$row['Αναχώρηση']."</td>".
"<td>".$row['Εισιτήρια/Άτομα']."</td>".
"<td>".$row['Ημερήσια Χρέωση']."</td></tr>";
 }
echo "</table>" ;
} else {
 echo "0 εγγραφές βρέθηκαν";
}




mysqli_close($conn);


?>

</body>

</html>
