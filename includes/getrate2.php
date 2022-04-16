<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food";

$data = json_decode($_POST['id'], true);
session_start();
$totalrate = $_SESSION["total"];

  // here i would like use foreach:
//SELECT * FROM items where name='Item1' UNION SELECT * FROM items where name='Item2' 

$loop = 1;
$sql = '';

foreach($data as $key => $value) {
      
    

      if($loop==1){
          
        $sql=  "SELECT * FROM items where itemid='$key'";
      }
      else{
          
          $sql = $sql." UNION SELECT * FROM items where itemid='$key'";
      }
      $loop = $loop+1;
    
  }
$listoforder=array();


$conn = new mysqli($servername, $username, $password, $dbname);
$result = $conn->query($sql);
$total=0;
if ($result->num_rows > 0) {
  // output data of each row
   while($row = $result->fetch_assoc()) {
       $temp_arr =array();
	   $total=$total + intval($data[$row["itemid"]])*intval($row["price"]);
	        array_push($temp_arr,array('itemid' =>$row["itemid"]));
       array_push($temp_arr,array('itemname' =>$row["itemname"]));
       array_push($temp_arr,array('price' =>$row["price"]));
       array_push($temp_arr,array('deleted' =>$row["deleted"]));
       array_push($temp_arr,array('type' =>$row["type"]));
       array_push($temp_arr,array('nos' =>$data[$row["itemid"]]));
       array_push($listoforder,$temp_arr);
	     }
	
    if($total>$totalrate){
		
		
		echo "False";
	}
	else{

		echo json_encode($listoforder);
		
	}
         


}


else {
  echo "0";
}
	   