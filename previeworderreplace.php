<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food";
$loop = 1;
$sql="";
$data = json_decode($_POST["orderlist"], true);
if(!isset($_SESSION["name"])){
    
    header("Location:index.php");
}
foreach($data as $key => $value) {
      if($loop==1){
          
        $sql=  "SELECT * FROM items where itemid='$key'";
      }
      else{
          
          $sql = $sql." UNION SELECT * FROM items where itemid='$key'";
      }
      $loop = $loop+1;  
  }
if(!strlen($sql)>0){
	
	header("Location: replace.php");
}
?>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
                <script src=
"js/jquery.js">
    </script>
            <script src="jquery.js">
    </script>
<style>
            :root {
  --background-gradient: linear-gradient(30deg, #f39c12 30%, #f1c40f);

 
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
padding-top: 20px;
       
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
    </style>    
</head>

    <div class="loginform">
        
    <center><img class="logo" src="onlylogo.png" width="100px"></center>
      
        <center>
 <div style="display:none;" class="loader"></div></center>
        <h3 style="margin-left: 15;
margin-bottom: 0;
margin-top: 30;"> Your Orders</h3>   
   <table style="width:90%;padding:0rem;margin-left: 15;" class="cart-table">
 <tbody>
     <?php
     
     
     
$conn = new mysqli($servername, $username, $password, $dbname);
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
   while($row = $result->fetch_assoc()) {
   echo'  
       <tr class="orderitem '.$row["itemid"].'"><td><div class="left-cart-item-name" style="width: 75;">'.$row["itemname"].'<br><div style="font-size: 10px;">'.$row["price"].'</div></div></td><td><div class="left-cart-item-no" style="font-family: "Patrick Hand", cursive;">  
                      
                      <div class="addpinusbtn '.$row["itemid"].'">
                      <div class="addminusbtncontainer"><button class="minusbtn '.$row["itemid"].'">-</button><div class="no '.$row["itemid"].'">'.$data[$row["itemid"]].'</div><button   class="plusbtn '.$row["itemid"].'">+</button></div>
                      
                      </div>
            </div></td><td align="right"><div class="left-cart-item-no rateindiasymbhol" style="display: flex;"><div class="Rate '.$row["itemid"].'">'.$data[$row["itemid"]]*intval($row["price"]).'</div></div></td></tr>';
   }}?>    
       </tbody>
        </table>
        <style>

        
        </style>
        
<center><button class="button">Confirm</button></center>  
    <script>
        
        $(document).ready(function() {
objofitemid = {}  ;    
objofrateid = {} ; 
$('.no').each(function(i,obj){
    objofitemid[obj.classList[1]]=obj.innerHTML;
});
            
$('.button').click(function(e){
   form1 = document.createElement("form");
	

		
		form1.setAttribute("action","includes/replacedorder.php");	
	
	
	
	
   form1.setAttribute("method","get");
   input = document.createElement("input");
   input.setAttribute("type","hidden");
   input.setAttribute("name","orderlist");
   input.setAttribute("value",JSON.stringify(objofitemid));    
   form1.appendChild(input);
   document.body.appendChild(form1);
   form1.submit();
});            
           
$('.Rate').each(function(i,obj){
    objofrateid[obj.classList[1]]=obj.innerHTML;
  
});
            
            
$(".plusbtn").click(function(e){
   let itemid = e.target.classList[1];
   if(parseInt($(".no."+itemid).html())<20){ 
          $(".no."+itemid).html((parseInt($(".no."+itemid).html()) + 1).toString());
           objofitemid[itemid] = $(".no."+itemid).html();
        $(".Rate."+itemid).html((parseInt($(".no."+itemid).html())*objofrateid[itemid]).toString());
   }
    else{    
        alert("No more than 20");
    }
  });
            
                    
$(".minusbtn").click(function(e){
   let itemid = e.target.classList[1];
   if(parseInt($(".no."+itemid).html())>1){ 
          $(".no."+itemid).html((parseInt($(".no."+itemid).html()) - 1).toString());
          objofitemid[itemid] = $(".no."+itemid).html();
        $(".Rate."+itemid).html((parseInt($(".no."+itemid).html())*objofrateid[itemid]).toString());
   }
    else{    
        if(confirm("Are you sure you want to delete this?")){
         $(".orderitem."+itemid).remove();
           objofitemid[itemid] = "0";
    }   
    else{
        return false;
        
    }
  }
    
});            
            
            
});
        
        
        </script>
        
        
        
        
        
        
    </div>
    
    
    
    
    
    
    
</html>