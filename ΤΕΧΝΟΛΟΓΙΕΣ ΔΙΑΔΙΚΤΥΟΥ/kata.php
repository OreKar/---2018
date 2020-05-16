<!DOCTYPE html>
<html>
<meta charset="UTF-8">

<head><title> ΚΑΤΑΧΩΡΗΣΗ </title>

<link rel="stylesheet" type="text/css" href="mystyle.css" >


</head>

<h1 style="text-align:center; font-size:350%; color:purple"> <cite>  ΚΑΤΑΧΩΡΗΣΗ ΕΚΔΡΟΜΗΣ</cite> </h1>

<body style="background-color:#b3ccff;">


<hr style="background-color: #7979d2; height:4px"><br>

<table  style="font-size:25px; background-color:#ffb366">
  <tr>
    <td>
    <a class="yaw" href="general.html"><strong> ΚΕΝΤΡΙΚΗ ΣΕΛΙΔΑ </strong> </td></tr>
</table>



<p style="font-size:25px; font-family:Comic Sans MS"> Σε αυτή τη σελίδα μπορείτε να καταχωρήσετε την εκδρομή στον προορισμό πους σας ενδιαφέρει
 συμπληρώνοντας σωστά τα στοιχεία από κάτω. </p>

 <form method="post" style="font-size:25px;  font-family:Comic Sans MS" name="formK"  action="handler.php"  >


 <fieldset><legend>ΕΠΙΛΟΓΗ ΕΚΔΡΟΜΗΣ</legend>

 <img src="orei.jpg" height="500" width="700px" align="right">


 <label for="fullName"><strong>Ονοματεπώνυμο</strong></label><br>
 <input type="text" id="username" name="fullName" required/ > <br><br>


<label for="mail23"><strong>E-MAIL</strong></label><br>
<input type="email" id="mail" name="mail23" required/ > <br><br>


<label for="dest"><strong>Προορισμός</strong></label><br>
   <select name="dest" id="de" style="font-size:25px">
   <option selected value="ΠΗΛΙΟ "> Πήλιο
   <option value="ΙΟΣ">Ίος
   <option value="ΝΑΥΠΛΙΟ"> Ναύπλιο
   <option value="ΙΩΑΝΝΙΝΑ"> Ιωάννινα
   </select><br><br>


<label for="arrival"><strong> Άφιξη</strong></label><br>
<input type="date" id="arrD" name="arrival"   required / ><br><br>
<label for="departure"><strong>Αναχώρηση</strong></label><br>
<input type="date" id="depD" name="departure"  required / ><br><br>

<label for="tickets"><strong>Αριθμός εισιτηρίων/ ατόμων </strong></label><br>
<select name="tickets" id="tic" required/>
<option  value="1"> 1
<option value="2"> 2
<option value="3"> 3
<option value="4"> 4
<option value="5"> 5
<option value="6"> 6
    <option value="7"> 7
</select><br><br>


<input type="reset" value="ΚΑΘΑΡΙΣΜΟΣ ΣΤΟΙΧΕΙΩΝ"> <input type="submit" value=" ΥΠΟΛΟΓΙΣΜΟΣ ΧΡΕΩΣΗΣ"  >




</fieldset>
</form>





</body>

</html>
