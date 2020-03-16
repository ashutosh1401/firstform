<html>
<body>

<p>Welcome <?php echo $_POST["fname"]; ?></p><br>
<p>Your email address is: <?php echo $_POST["e-id"];?></p><br>
<p>Mobile no. is:<?php echo $_POST["mob"];?></p><br>
<p>AGE is:<?php echo $_POST["age"]; ?></p><br>
<p>ROLL NUMBER is:<?php echo $_POST["rno"]; ?></p><br>
<p>Gender is:<?php echo $_POST["gender"]; ?></p><br>
<?php
 $FIRSTNAME = $_POST["fname"];
 $EMAIL = $_POST["e-id"];
 $MOBILE = $_POST["mob"];
 $AGE = $_POST["age"];
 $ROLLNUM = $_POST["rno"];
 $GENDER = $_POST["gender"];
  $conn = new mysqli('localhost','root','','form');
if($conn->connect_error){
  die('Connection Failed : '.$conn->connect_error);
}
else{
  $stmt = $conn->prepare("insert into formtable(FIRSTNAME, EMAIL, MOBILE, AGE, ROLLNUM, GENDER)
   values(?, ?, ?, ?, ?, ?)");
  $stmt->bind_param('ssiiss',$FIRSTNAME, $EMAIL, $MOBILE, $AGE, $ROLLNUM, $GENDER);
  $stmt->execute();
  echo "REGISTRATION SUCCESSFULL!!!";
  $stmt->close();
  $conn->close();
} ?>
</body>
</html>
