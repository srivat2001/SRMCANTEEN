<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
                <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js">
    </script>
<style>
  
            :root {
  --background-gradient: linear-gradient(30deg, #f39c12 30%, #f1c40f);

   --background-color:white;
   --input-bg:#bdbdbd;            
                

      
    }
    body{
        margin: 0px;
        padding: 0px;
          align-items: center;
  display: flex;
  justify-content: center;
  height: 100%;
  width: 100%;

         background-image: var(--background-gradient);
   
    } 
	form{
		
		  position: relative;
  margin: 0;
	}
    .loginform{
       background-color:  var(--background-color);
       width:300px;
padding-top: 20px;
       
        border-radius: 20px;
        box-shadow: 20px 20px black;
        font-family: "segoe ui";
        color: 525252;
    }
    .idinput{
        height: 50px; 
        width: 90%;
        margin:1rem;
         margin-top:0rem;
   margin-bottom:0.5rem;
          transition: all 0.3s ease 0s;
        padding: 1rem;
            border-radius: 10px;
        border: none;
        border-bottom: 1px solid  var(--input-bg);;
        outline: none;
        background-color: #fc9842;
background-image: linear-gradient(315deg, #fc9842 0%, #fe5f75 74%);
        color: white;
    }
    .idinput:focus{
         animation: animate 1s linear forwards;
         border-bottom: 3px solid  darkred;
        outline: none;
   
background-color: #fc9842;
background-image: linear-gradient(315deg, #fc9842 0%, #fe5f75 74%);
        color: white;
    } 

    .idinput:focus + .logo {

transform: translateY(-7px);
    }    
    ::placeholder:focus {
  color:  black;
}
    form{
        position: relative;
        
    }
.wrap {
  margin-top: 1rem;
  display: flex;
  align-items: center;
  justify-content: center;
}
    .logo{
        
       margin-bottom: 40px;
    }
.button {
  width: 140px;
  height: 45px;
  font-family: 'Roboto', sans-serif;
  font-size: 11px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #000;
  background-color: #fff;
  border: none;
  border-radius: 10px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
margin-bottom: 10px;
  }

.button:hover {
  background-color: #2EE59D;
  box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
  color: #fff;
 
}
.loader {
  border: 4px solid #f3f3f3;
  border-radius: 50%;
  border-top: 4px solid #3498db;
  width: 40px;
  height: 40px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
    input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

           select{
width: 90%;
padding-left: 25px;
background-color: #fff;
background-color: #fff;
border: 0px;
padding: 1rem;
margin: 1rem;
border: 1px solid #d2d2d2;
color: black;
         }  
	.downdetails {

	font-size: 13px;
	display: flex;
    color: white;
    background-color: black;

    width: 100%;
    border-bottom-right-radius: 20px;
    border-bottom-left-radius: 20px;
    z-index: 10;
position: relative;
}
      .downdetails    input[type = submit]{
         
         width: 100%;
         text-align: center;
         background-color: transparent;
         color: white;
         font-size: 16px;
letter-spacing: 0.127em;
font-weight: 700;
line-height: 1.3;
         padding-top: 10px;
                 padding-bottom: 10px;
         cursor: pointer;
         border: 0;
     }
    </style>    
</head>

    <div class="loginform">
        
    <center><img class="logo" src="onlylogo.png" width="100px"></center>
  <div style="  font-weight: 100;
  padding-left: 20;
  margin: 0;

font-size: 21px;
line-height: 2;
" style="font-size: 14px;font-weight: 200;line-height: 1.2;">Select Order id</div>
        <center>
 <div style="display:none;" class="loader"></div></center>
        <div class="theform">
            <form action="replace.php" method="post"  onsubmit="return checkemail()" >
			<?php		
			$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food";
$email=$_POST["email"];
if(!isset($_POST["email"])){
	
	//header("Location: requestreplace.php");
}
$sql = "SELECT * FROM ordermain where email='{$_POST["email"]}' and idnum={$_POST["idnum"]}";
$conn = new mysqli($servername, $username, $password, $dbname);
$result = $conn->query($sql);
$x = 0;
$btn="";			
if ($result->num_rows > 0) {  

$_SESSION["email"]=$_POST["email"];	
$_SESSION["idnum"]=$_POST["idnum"];
	
	echo"<select name='orderid' >";
 while($row = $result->fetch_assoc()) { 
	 $name1=$row["Name"];
	 
	 echo"<option  value='{$row["orderid"]}'>{$row["orderid"]}</option>";
 }
echo"</select><input type='hidden' value='{$name1}' name='name'>
<div class='downdetails'><input type='submit'  value='Next'> </div></form>  
";
}
					else{
						
						
						echo "<h3 style='margin-left: 20px;
//font-weight: 700;
//font-size: 16px;
//color: #003535;'>Invalid Input</h3>";
						//header("Location: ".$_SERVER['HTTP_REFERER']);
					}
	 ?>
      </form>        
    </div>
    </div>
</html>