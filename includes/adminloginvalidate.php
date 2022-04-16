<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food";
$userid= $_POST["idnum"];
$psd = $_POST["psd"];
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "select * from admin"; 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
   while($row = $result->fetch_assoc()) {
	   
	   if(password_verify($psd, $row['psd'])){
		   session_start();
           $_SESSION["User"] = $userid;
		   header("Location: ../admin.php");
	   }
	   else{
		echo "incorrect Password";   
		//  header("Location: ../adminlogin.php?in") ;
	   }
   }


}	
	
	
	?>