<html>
	<head>
	<title> ΕΠΙΒΕΒΑΙΩΣΗ </title>
	<link rel="stylesheet" type="text/css" href="mystyle.css" >
	</head>
<h1 style="text-align:center; font-size:350%; color:purple"> <cite>  ΕΠΙΒΕΒΑΙΩΣΗ </cite> </h1>


	<body style="background-color:#b3ccff;">

<hr style="background-color: #7979d2; height:4px"><br>

<table  style="font-size:25px; background-color:#ffb366">
  <tr>
    <td>
    <a class="yaw" href="general.html"><strong> ΚΕΝΤΡΙΚΗ ΣΕΛΙΔΑ </strong> </td></tr>
</table>


<p style="font-size:25px; text-align:center; font-family:Comic Sans MS"><u>Είστε σίγουροι ότι θέλετε να καταχωρήσετε την εκδρομή σας</u> ; </p><br><br>




<?php

session_start();


$fullName_given = "";
$Usermail_given = "";
$dest_given = "";
$arrival_given= 0;
$departure_given= 0;
$tickets_given = 0;
$xrewsh=0;

$fullName_given = $_POST['fullName'];
$Usermail_given = $_POST['mail23'];
$dest_given = $_POST['dest'];
$arrival_given= $_POST['arrival'];
$departure_given= $_POST['departure'];
$tickets_given = $_POST['tickets'];
$xrewsh=35 * $tickets_given;







$_SESSION['fullName'] = $fullName_given;
$_SESSION['mail23'] = $Usermail_given;
$_SESSION['dest'] = $dest_given;
$_SESSION['arrival'] = $arrival_given;
$_SESSION['departure'] = $departure_given;
$_SESSION['tickets'] = $tickets_given;







echo '<p style="font-size:25px; font-family:Comic Sans MS"><strong> Ονοματεπώνυμο: </strong>' . $fullName_given . '</p><br>';
echo  '<p style="font-size:25px; font-family:Comic Sans MS"><strong> EMAIL:</strong>' . $Usermail_given . '</p><br>';
echo '<p style="font-size:25px; font-family:Comic Sans MS"><strong> Προορισμός:</strong>' . $dest_given . '</p><br>';
echo '<p style="font-size:25px; font-family:Comic Sans MS"><strong> Άφιξη:</strong>' . $arrival_given . '</p><br>';
echo '<p style="font-size:25px; font-family:Comic Sans MS"><strong> Αναχώρηση:</strong>' . $departure_given . '</p><br>';
echo '<p style="font-size:25px; font-family:Comic Sans MS"><strong> Εισιτήρια/Άτομα:</strong>' . $tickets_given . '</p><br>';
echo '<p style="font-size:25px; font-family:Comic Sans MS"><strong> Χρέωση:</strong>' . $xrewsh . '€ </p><br>';

echo '<form action="kata.php"> <button onclick="kata.php">ΑΚΥΡΩΣΗ</button></form>';
echo '<form action="handler2.php" ><input type="submit" name="submit" value=" ΚΑΤΑΧΩΡΗΣΗ" > </form>';



?>





	</body>
	</html>
