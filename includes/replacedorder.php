<?php 
$dbhost = "localhost";
$dbusername = "root";
$dBpassword = "";
$dbname = "food";
session_start();
$conn = new mysqli($dbhost, $dbusername, $dBpassword, $dbname);
$data = json_decode($_GET['orderlist'], true);
date_default_timezone_set('Asia/Calcutta');
$mysqltime = date ('Y-m-d H:i:s');
if(!isset($_SESSION["orderid"])){
    header("Location:basicinfo.php");
    exit();
}
 $obj = json_decode($_GET['orderlist'], TRUE);

$missingitems="";
print_r($_SESSION);
$email =$_SESSION["email"] ;
$name = $_SESSION["name"];
$idnum =intval($_SESSION["id"]) ;

$randstr = $_SESSION["orderid"];
$loop = 1;
$sql = '';
    $error = 0;






foreach($obj as $key => $value) 
{
$availale=0	;
$status=""	;
$sql="select available from items WHERE itemid = '$key'";
echo $sql;
$result1 = $conn->query($sql);
if ($result1->num_rows > 0) {
	 while($row1 = $result1->fetch_assoc()) {
		 
		 $availale=intval($row1["available"]);
		 
	 }
if($availale>0){
	$status="Ordered";
	
}
else{
$status="Missing";	
	
}
  $sql="update items set available=available-1 WHERE itemid = '$key'";
if (!$conn -> query($sql)) {
  $error =1;  
  echo("Error description: " . $conn -> error);
	
}
	
$sql="update items set orderednos=orderednos+1 WHERE itemid = '$key'";
echo $sql;
if (!$conn -> query($sql)) {
  $error =1;  
  echo("Error description: " . $conn -> error);
}	
$sql="INSERT INTO orderlist(orderid,itemid,nos,time,status)VALUES(".intval($randstr).",'$key',".intval($value).",'$mysqltime','$status')";
echo $sql;
if (!$conn -> query($sql)) {
  $error =1;  
  echo("Error description: " . $conn -> error);
}
$sql="INSERT INTO replacedorder(orderid,itemid,nos,time,status)VALUES(".intval($randstr).",'$key',".intval($value).",'$mysqltime','$status')";
echo $sql;
if (!$conn -> query($sql)) {
  $error =1;  
  echo("Error description: " . $conn -> error);
}	
if($availale<=0){
	
		$sql="INSERT INTO missing_items(orderid,itemid,nos,status,time)VALUES(".intval($randstr).",$key,".intval($value).",'Ordered','$mysqltime')";
echo $sql;
$missingitems="&Missing_items=true";
if (!$conn -> query($sql)) {
  $error =1;  
  echo("Error description: " . $conn -> error);
	
}		
	
}

}
		
	
	

  
}


if($error==0){
   echo "ordered";
   header("Location: ../confirmorder.php?id=".intval($randstr).$missingitems);
}

   
 // session_unset();
 // session_destroy();
   

    
  

?>