<?php 
$dbhost = "localhost";
$dbusername = "root";
$dBpassword = "";
$dbname = "food";
$conn = new mysqli($dbhost, $dbusername, $dBpassword, $dbname);
function getid($conn){
$id =   strval(mt_rand(1000000000,9999999999));
$sql = "SELECT * from items where name='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     getid($conn);
}
    else{
        
        return $id;
    }
    
    
}
$error =0
$name =$_POST['Name'];
$itemid = getid($conn);
$vegornonveg = $_POST['vegornonveg'];
$rate = intval($_POST['Rate']);
$cno = intval($_POST['optioncounter']);
$sql="INSERT INTO items(itemid,itemname,price,deleted,type,counter_no,status)VALUES(".$itemid.",'$name',$rate,0,'$vegornonveg',$cno,'view')";
if (!$conn -> query($sql)) {
  $error =1;  
  $error = "Error description: " . $conn -> error;
  header("Location:../admin.php?addditem=".$error);
}

if($error==0){
	header("Location:../admin.php?addditem=Added Sucessfully");
}
    
?>