<?php
function get_valueFromStringUrl($url , $parameter_name)
{
    $parts = parse_url($url);
    if(isset($parts['query']))
    {
        parse_str($parts['query'], $query);
        if(isset($query[$parameter_name]))
        {
            return $query[$parameter_name];
        }
        else
        {
            return null;
        }
    }
    else
    {
        return null;
    }
}

?>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
                <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js">
    </script>
	<script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.qrcode.min.js"></script>
    <script type="text/javascript" src="js/jquery.qrcode.js"></script>
<script type="text/javascript" src="js/qrcode.js"></script>

    


<style>
            :root {
  --background-gradient: linear-gradient(30deg, #f39c12 30%, #f1c40f);

 
}
  .button:hover {
  background-color: #2EE59D;
  box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
  color: #fff;
 
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
    body{
        margin: 0px;
        padding: 0px;
          align-items: center;
  display: flex;
  justify-content: center;
  height: 100%;
  width: 100%;
         background: var(--background-gradient);
    }    
    .loginform{
       background-color: white;
       width:300px;

       
        border-radius: 20px;
        box-shadow: 20px 20px black;
        font-family: "segoe ui";
        color: 525252;
        padding-bottom: 20px;
    }
  
    .idinput:focus + .logo {

transform: translateY(-7px);
    }    
    ::placeholder {
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
    .orderlistitemcontainer{
       margin-left: 20px; 
        display: flex;
     
        
    }
      .left-cart-item-name{
                    
                
font-weight: 100;
line-height: 19px;
       max-width: 170px;
          font-size: 15px;
font-weight: 600;
                }
               .left-cart-item-no{
                font-size: 14px;
line-height: 18px;
font-weight: 100;
letter-spacing: 0.096em;
                }
    
     .rateindiasymbhol::before {
  content: "\20B9";
}
                .middlerate{
                    
                    
                    margin-left: auto;
                    margin-right: 120px;
                }
    
    .addpinusbtn{
        
        display: block;
        border: 0.5px solid #adadad;
        background-color: white;
        border-radius: 3px;
        color: green;
        width:80px; 
        padding: 5px;
        position: relative;
     
        
    }
       .addminusbtncontainer{
        
        display: flex;
    }
    .addminusbtncontainer button{
           padding: 4px;
        background-color: white;
        border-radius: 3px;
        color: green;
        width:20px;
        position: relative;
        top:0;
          border: 0px solid #adadad;
        
    }
       .no{
        margin-right: auto;
        margin-left: auto;
   margin-top: 3;
      
    }
    table{
        
          border-collapse: separate;
    border-spacing: 0 1em;
    }
    .yourorders{
        
      font-size: 17px;
font-weight: 300;
        margin-left: auto;
        padding-right: 20px;;
    }
    h3{
        margin: 0px;
        padding: 0px;
    }
    .hr{
        
        margin: 0px;
       
        margin-right: 20px;
         margin-left: 20px;
        border: none;
  border-top: 0.5px solid #c9c9c9;
margin-bottom: 10px;
        position: relative;
        top:-5;
    }

    img{
        
          margin-top: 10px;
  position: relative;
  z-index: 10;
  position: relative;
  top: 5;
  left: 10;
}
    .finalcart{
        

        margin-left: 10px;
        margin-left: 10px;
    }
    .itemflex{
    margin-bottom: 0.1rem;            
display: flex;
background-color: darkblue;
color: white;
padding: 0.5rem;
    }
	    .unavilable{
                

background-color: red;
color: white;

    }
    .Rate{
        
      margin-left: auto;
      padding-right: 5px;
    }
    .Nos{
        
 font-size: 15px;
line-height: 0.8;
font-weight: 300;
    
font-size: 14px;
    }
    .name{
        
        font-size: 15px;
font-weight: 700;
    }
    .finalcart{
        
        margin: 10px;
        max-height: 300px;
        overflow-y: auto;
    }
    .orderid{
        
        position: relative;
        font-size: 14px;
        left: 2px;
        top: 10px;
        
    }
    </style>    
</head>

    <div class="loginform">
        
    <center><img class="logo" src="onlylogo.png" width="70px"></center>
      
        <center>
 <div style="display:none;" class="loader"></div></center>
         <div style="display:flex"> 
              <img src="img/pngaaa.com-5041423.png" style="margin-top:10px;" width="25px"  height="25px"> 
            
            <h3 class="yourorders"> <div class="orderid">Order id: 19828415475</div></h3> </div>   
        <div class="hr"></div>
 <div class="finalcart">
	 
<?php 
if(get_valueFromStringUrl("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" , "Missing_items")=="true"){
	
//	echo "If You Dont See Any item you Ordered Here, it Means it has Been Sold Out During The Payment Process! You can check the refund process! Either You can change it with any other item with same amount or Claim Refund";
	
}
   //  echo $id1;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food";

$sql = "SELECT * FROM orderlist or1,items it where or1.orderid=".$_GET['id']." and or1.itemid=it.itemid";
$conn = new mysqli($servername, $username, $password, $dbname);
$result = $conn->query($sql);
//echo $sql;
$x = 0;
if ($result->num_rows > 0) {  
 
 while($row = $result->fetch_assoc()) { 
  //   echo $row["itemid"];
  //  print_r($row) ;

  //  print_r($row) ;
	if($row["status"]=="Missing"){
		
				     echo'    <div class="itemflex unavilable" >
     <div class="name">'.$row["itemname"].'<br>
       <div class="Nos">x'.$row["nos"].'<br></div></div> <div class="hr1"></div>
              <div class="Rate">Rs '.intval($row["nos"])*intval($row["price"]).' (Item Missing)</div>
     </div>
  
     
        ';
	}
	 else{
		 
		     echo'    <div class="itemflex">
     <div class="name">'.$row["itemname"].'<br>
       <div class="Nos">x'.$row["nos"].'<br></div></div> <div class="hr1"></div>
              <div class="Rate">Rs '.intval($row["nos"])*intval($row["price"]).'</div>
     </div>
  
     
        ';

		
		;

		 
	 }
 

$x = $x+1;
 
}}
	 else{
		 
		 
		 echo "Orderid Not Found";
	 }
?>
        </div>
<center> <div id="qrcode"></div></center>

    <script>
        
        $(document).ready(function() {
            
var url = new URL(window.location.href);
var c = url.searchParams.get("id");
            
       $.post("includes/decrypt.php",{
           id : c
       },function(data,status){
           
          

         
             document.getElementsByClassName("orderid")[0].innerHTML ="Order Id: "+data;
             jQuery('#qrcode').qrcode({width: 120,height: 120,text: c});   

              
          
           
           
       });            


        });
                          
        
        </script>
        
        
        
        
        
        
    </div>
    
    
    
    
    
    
    
</html>