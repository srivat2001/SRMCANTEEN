<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "srmcanteen";
$sql = "SELECT * FROM student_info where reg_no='".$_POST['theid']."'";
$conn = new mysqli($servername, $username, $password, $dbname);
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row

    echo "1";
  
} else {
  echo "0";
}
?>