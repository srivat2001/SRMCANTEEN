<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food";

$conn = new mysqli($servername, $username, $password, $dbname);


if( $_POST["type"]=="editcounter"){
    
    $sql = "SELECT * FROM  where itemid=''";
$itemid = $_POST["itemname"];
$channelid= $_POST["clannelnum"];
          $sql1 = "UPDATE items SET counter_no=$channelid WHERE itemid='$itemid'";
          if ($conn->query($sql1) === TRUE) {
                echo "updated";
} else {
  echo $sql1;
} 
} //WHERE counter>1
if( $_POST["type"]=="add"){
      $sql = "SELECT * FROM  where itemid=''";
          $sql1 = "UPDATE other_info SET counter=counter+1  ";
          if ($conn->query($sql1) === TRUE) {
                echo "added";
} else {
  echo $sql1;
}   
    
}

if( $_POST["type"]=="minus"){


    $sql = " SELECT * FROM other_info";
$conn = new mysqli($servername, $username, $password, $dbname);
$result = $conn->query($sql);
if ($result->num_rows > 0) {
     while($row1 = $result->fetch_assoc()) {

 $nos = intval($row1['counter'])  ;      
                  $sql1 = "UPDATE items SET counter_no=1 WHERE counter_no=$nos ";
          if ($conn->query($sql1) === TRUE) {
                echo "Adjusted Counter \n";
} else {
  echo $sql1;
}   
     
         
     }}
     

    
          $sql1 = "UPDATE other_info SET counter=counter-1 WHERE counter>1 ";
          if ($conn->query($sql1) === TRUE) {
                echo "Removed";
} else {
  echo $sql1;
}   
    
}
  
      

  
    ?>