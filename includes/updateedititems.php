<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food";

$conn = new mysqli($servername, $username, $password, $dbname);


if( $_POST["type"]=="edit"){
    

$newname = $_POST["newname"];
$newrate= $_POST["newrate"];
$itemid= $_POST["itemid"];    
$newquanity= $_POST["newquanity"];   
          $sql1 = "UPDATE items SET itemname='$newname' ,available=$newquanity, price=$newrate WHERE itemid='$itemid'";
          if ($conn->query($sql1) === TRUE) {
                echo "updated";
} else {
  echo $sql1;
} 
} //WHERE counter>1

if( $_POST["type"]=="remove"){

$itemid= $_POST["itemid"];    
          $sql1 = "Delete  FROM items WHERE itemid='$itemid'";
          if ($conn->query($sql1) === TRUE) {
                echo "Deleted Sucessfully";
} else {
  echo $sql1;
} 
}      
if( $_POST["type"]=="viewhidetoggle"){
    


$viewhideopn= $_POST["newrate"];
$itemid= $_POST["itemid"];    
          $sql1 = "UPDATE items SET display='$viewhideopn' WHERE itemid='$itemid'";
          if ($conn->query($sql1) === TRUE) {
                echo "Updated Sucessfully";
} else {
  echo $sql1;
} 
}  
 if( $_POST["type"]=="vegnonveg"){
    


$vegnonveg= $_POST["newrate"];
$itemid= $_POST["itemid"];    
          $sql1 = "UPDATE items SET type='$vegnonveg' WHERE itemid='$itemid'";
          if ($conn->query($sql1) === TRUE) {
                echo "Updated Sucessfully";
} else {
  echo $sql1;
} 
}  
    ?>