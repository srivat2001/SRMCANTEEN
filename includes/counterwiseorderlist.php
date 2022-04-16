<?php 
		
$counternos = $_POST["counternos"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food";
$sql = "SELECT * FROM items where orderednos>0 and counter_no=$counternos";
//echo  $sql; ItemcounterName
$conn = new mysqli($servername, $username, $password, $dbname);
$result = $conn->query($sql);

$x = 0;

if ($result->num_rows > 0) {  
 echo "<table class='ItemcounterName'>";
	
	echo "<tr><td><b>Name</b></td><td><b>No Of Orders</b></td></tr>";
 while($row = $result->fetch_assoc()) { 	  
		  
	echo "
	<tr>
	
	<td>{$row['itemname']} </td>
	<td>{$row['orderednos']}</td>
	</tr>
	
	"; 
		  
 }

 echo "</table>";


}
else{
	
	echo "<div class='ItemcounterName'>No Orders on This Counter</div>";
}



		  ?>