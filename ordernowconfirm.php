<?php
// Start the session
session_start();

?>
<html>
<head>
    
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0, user-scalable=no" />

    <!-- Select2 CSS --> 
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet"> 
	 <script type="text/javascript" src="js/jquery.js"></script> 
<!-- jQuery --> 

<!-- Select2 JS --> 
<style>


body {
	margin: 0;
	padding: 0;
	align-items: center;
	display: flex;
	justify-content: center;
	height: 100%;
	width: 100%;
	background-color: #ff96f8;
    font-family: 'Patrick Hand', cursive;
}


.loginform {
    position: relative;
	background-color: #fff;
	width: 350px;
	padding-top: 5px;
margin: 1rem;
	border-radius: 20px;
	/*box-shadow: 20px 20px #000;*/
overflow: hidden;
	color: #525252
}

::placeholder {
	color: #000
}

form {
	position: relative
}

.cusno {
	margin: 1rem;
    font-size: 15px;
}

.logo {
	position: relative;
	top: 5px;
	margin-left: auto;
	margin-right: 20px
}

:root {
	--background-gradient: linear-gradient(30deg, #f39c12 30%, #f1c40f)
}

body {
	background: #ff9c9c
}

h1 {
	margin: 0 0 .25em
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

.note {
	margin-left: auto;
	padding-right: 20px;
	font-size: 11px
}
    .itemcontainer{
        
        padding: 20px;
        padding-top: 0px;
        height: 300px;
        overflow: scroll;
        overflow-x: hidden;

      
    }
    .hrr{
        
       border-top: 0.5px solid #c9c9c9;
       margin-bottom: 10px;
    }
    .leftside{
        
       
    }
        .rightside{
        
     margin-left: auto;
           
            
    }
    button{
        
padding:         10px;
        border: 0px solid #adadad;
        background-color: white;
        border-radius: 3px;
        color: green;
        width:80px;
        width: 91px;
        position: relative;
top: 4;
        
    }
    
    .addpinusbtn{
        
        display: none;
        border: 0.5px solid #adadad;
        background-color: white;
        border-radius: 3px;
        color: green;
        width:80px; 
        padding: 5px;
        position: relative;
        top:5;
        
    }
    button:hover{


        cursor: pointer;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
 ;
    
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
          
        
    }
    .add{

    border: 1px solid green;
    }
    .minusbtn{
        
       
        
    }
        .addminusbtncontainer button:hover{


        cursor: pointer;
        box-shadow: none;
         transform: scale(1, 1);
 
    
    }
    .no{
        margin-right: auto;
        margin-left: auto;
   
      
    }
    .Rate{
    
        font-size: 14px;
line-height: 1.4;
font-weight: 700;
    }
    .theitem{
        
        margin: 5px;
        display: flex;
         margin-left: 0px;
         margin-right: 0px;
    }
    input[type=text]{
        
        padding: 10px;
        width: 90%;
        outline: none;
        margin: 20px;
 margin-bottom: 0px;
        border: 0.5px solid #d1d1d1;
        margin-top: 0px;
        
    }    input[type=checkbox]{
        
        padding: 5px;
        width: 20px;
        outline: none;
        margin: 20px;
 margin-bottom: 10px;
         margin-top: 10px;
        border: 0.5px solid #d1d1d1;
        height: 20px;
        margin-right: 0px;
        border: 0.5px solid black;
        outline: none;
        
    }
    .vegonlytext{
        
        position: relative;
        top:-3;
            font-size: 10px;

font-weight: 700;
font-size: 11px;
line-height: 0.2;
letter-spacing: -0.004em;
color: #656565;
      margin-top: 15px;
        padding: 3px;
        z-index: 100;
        margin-left: 20px;

    }
    .switch {
  position: relative;
  display: inline-block;
  width: 40px;
  height: 20px;
        margin: 10px;
        margin-top: 3px;
        margin-left: 20px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
    color: white;
}

.slider:before {
  position: absolute;
  content: "";
  height: 15px;
  width: 15px;
  left: 3px;
  bottom: 3px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}

input:checked + .slider {
  background-color: green;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(20px);
  -ms-transform: translateX(20px);
  transform: translateX(20px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
    .itemvector{
        
                
font-size: 17px;
font-weight: 100;
    }
    .vegleftside{
        
        display: flex;
        position: relative;
    }
    .vegrightside{
        
        margin-left: auto;
        margin-right: 15px;
    }
    @media screen and (max-width: 600px) {
        
         .itemvector{
        
                
font-size: 17px;
font-weight: 300;   
        
        }
    
    }
    .carts{
        
        padding-bottom: 20px;
        width:100%;
        background-color: white;
        position: absolute;
       box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;

opacity: 0;
       bottom: -50px;
        margin-right: 0px;
        display: block;
        z-index: 0;
transition: all 0.5s;
        transition-timing-function: ease-in-out;

        
    }
        .cartsup{
opacity: 1;
        position: absolute;
       bottom: 60px;
    transition: all 0.5s;
            transition-timing-function: ease-in-out;
    }
    
    table{
        
         margin-top: 10px;
    }
    td{
        padding: 0.1rem;
        color:#8c8c8c;
        font-size: 15px;
       word-break: break-all !important;
        
    }
    .cart_item_name{
        
        width: 50px;
    }
    .close1 {
 
position: absolute;
        right: 0px;
        margin-right: 20px;
         margin-top: 13px;
  width: 15px;
  height: 15px;
  opacity: 0.3;
}
.close1:hover {
  opacity: 1;
    cursor: pointer;
}
.close1:before, .close1:after {
  position: absolute;
  left: 15px;
  content: ' ';
  height: 20px;
  width: 2px;
  background-color: #333;
}
.close1:before {
  transform: rotate(45deg);
}
.close1:after {
  transform: rotate(-45deg);
}
    .theitem{
        
          transition: all 0.5s ease;

  padding: 0px;
    }
    .theitem:hover{

  padding-top: 10px;
       
   padding-bottom: 10px;  }
</style>
</head>
<body>
    <div class="loginform">

<input type="hidden" class="emailpre" name="email" value="<?php echo $_SESSION["email"] ?>">
<input type="hidden" class="namepre" name="name" value="<?php echo $_SESSION["name"] ?>">
<input type="hidden" class="idpre" name="id" value="<?php echo $_SESSION["id"] ?>">
         <div style="display:flex;">
     
    <h6 class="cusno"> Hi, <?php echo $_SESSION["name"]; ?> <br>
        Is that all ?</h6>  <img class="logo" src="onlylogo.png" width="60px" height="50px"> </div>
                  
                <div class="searchbar"><input type="text" class="searchbox" onkeyup="searchoption(this)" placeholder="Search Item"></div>
       <div class="vegonlytext">Veg</div>
        <div class="vegleftside">
        
            <div>
        <label class="switch">
  <input type="checkbox" onclick="vegonlyview(this)" checked>
  <span class="slider round"></span>
</label>
        </div>
        <div class="vegrightside">
            <style>
                .cartholder{
                    
                    display: flex;
                }
                .left-cart-item-name{
                    
                    font-size: 14px;
font-weight: 100;
line-height: 19px;
       max-width: 170px;
                }
                .left-cart-item-no{
                font-size: 14px;
line-height: 18px;
font-weight: 100;
letter-spacing: 0.096em;
                }
                .middlerate{
                    
                    
                    margin-left: auto;
                    margin-right: 120px;
                }
				.grayout{
					
					   opacity: 0.6; /* Real browsers */
   -webkit-filter: grayscale(100%);
    -moz-filter: grayscale(100%);
    -ms-filter: grayscale(100%);
    -o-filter: grayscale(100%);
    filter: grayscale(100%);
    filter: gray;
					pointer-events: none;
				}
								.runningfast{
					
					font-size: 12px;
font-weight: 100;
line-height: 1.2;
margin-bottom: 10;
				}
            </style>

            </div>
        
        </div>
        <div class="itemcontainer">
             
            <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food";
			
			
//$sql = "SELECT * FROM `items` ORDER BY `items`.`itemname` ASC ";
$data = json_decode($_POST['orderlist'], true);
$loop = 1;
$sql = '';

foreach($data as $key => $value) {
      
    

      if($loop==1){
          
        $sql=  "SELECT * FROM items where itemid='$key' and available>0";
      }
      else{
          
          $sql = $sql." UNION SELECT * FROM items where itemid='$key' and available>0";
      }
      $loop = $loop+1;
    
  }			
			
			
$conn = new mysqli($servername, $username, $password, $dbname);
$result = $conn->query($sql);

$x = 0;
$btn="";	
$total=0;
if ($result->num_rows > 0) {  
 while($row = $result->fetch_assoc()) { 
	 $itemid = strval($row["itemid"]);
	 if(intval($data[$itemid])>=intval($row["available"])){
		 
		$data[$itemid]=$row["available"];
		 
		 
	 }
	 
	 
	$total = $total+intval($row["price"])*intval($data[$itemid]);
    
	 if(intval($row["available"])<=0){
		 
		echo"<div available='{$row["available"]}' class='avilability {$row["itemid"]} grayout'>" ;
		$btn = "N/A"; 
	 }
	 else{
		 
		echo"<div available='{$row["available"]}' class='avilability {$row["itemid"]}'>" ;
		 $btn = "ADD";
	 }
	 
	 
	 
	 
     if($row["type"]=="veg"){
         echo'<div class="food '. $row["itemid"].'"><div class="vegfood"><div class="foodcontainer '. $row["itemid"].' veg">';
             
         
     }
     else{
         
         echo '<div class="food '. $row["itemid"].'"><div class="nonvegfood"><div class="foodcontainer '. $row["itemid"].' nonveg">'; 
     }
         echo'<div class="hrr"></div> <div class="theitem">
            <div class="leftside">
       
            <img src=veg-icon.png width="14px;">
            <div class="itemvector '. $row["itemid"].'">' . $row["itemname"]. '</div>
                          <div class="Rate '. $row["itemid"].'">Rs ' . $row["price"]. '</div>
                
                </div>
                
                
      
          
                  <div class="rightside">
                      
                      <button style="display:none" class="clickbfnadd '. $row["itemid"].' add" onclick="additem(this,\'cartshow\')" >
					  
					  
					  '.$btn.'
					  
					  
					  </button>
                      
                      <div style="display:block"  class="addpinusbtn '. $row["itemid"].'">
                      <div class="addminusbtncontainer"><button class="minusbtn '. $row["itemid"].'" onclick="additem(this,\'minus\')">-</button><div class="no '. $row["itemid"].'">'.$data[$itemid].'</div><button  onclick="additem(this,\'add\')" class="plusbtn '. $row["itemid"].'">+</button></div>
                      
                      </div>
            
            
            </div>
                  </div></div></div></div>';
			 
			 		
			 
			echo '</div>';
     
 $x = $x+1;   
}
}
            
          ?>  
            
            
            
            
            
            
            
            
            
            
            
 <style>
        .totalcontainer{
        
        
        margin-left: 1rem;
       
  
font-weight: 700;
            display: flex;
          
             font-size: 26px;
line-height: 1;
            position: relative;
            top:-5;
            font-size: 27px;
line-height: 1.2;
font-weight: 800;
color: #626262;
letter-spacing: -0.012em;
            font-size: 20px;
font-weight: 500;
letter-spacing: -0.051em;
z-index: 10;
            background: white;
}
     .threate{
         
         margin-left: auto;
         margin-right: 2rem;
         display: flex;
     }   
     .totaltext{
         
        
     } 
     .belowhr{
         

  margin-top: 0.1rem;
  border-top: 0.1px solid #ffffff26;
  border-bottom: 1px solid #e8e8e8;
      
     }
     .checkout{
         
      margin-left: auto;
     }
     .timedetails{
         	padding-left: 15px;
	font-size: 13px;
	display: flex;


   padding-top: 1rem;

    width: 100%;

         display: flex;
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
     .cart-table-scroll{
         
          max-height:100px;
    overflow-y:scroll;  
     }
            </style>           
            
            
              </div>      
        <hr class="belowhr">
              <div class="carts" >
                <div class="close1" onclick="closecart()"></div>
                <h3 style="margin-top: 10;font-size: 17px;font-weight: 100;margin-left: 15;margin-bottom: 0;">Your Orders</h3>
            <!--            <div class="cartholder">     <div class="left-cart-item">
                    <div  class="left-cart-item-name" >Meals</div>
                         <div  class="left-cart-item-no" >x3</div>
                         
                    </div>    <div class="middlerate">
                    Rs350
                    </div>
                </div>
           -->
         
                <div class="cart-table-scroll">
            <table style="width:90%;padding:0rem;margin-left: 15;" class="cart-table">

                    <style>
                        thead{
                             border-bottom: 0.5pt solid #d1d1d1;
                            border-top: 0.5pt solid #d1d1d1;
                            padding-right: 0px;
                        }
                        td{
                               border-bottom: 10px;
                            
                        }
                        table{
                            border-collapse: collapse;
                            padding: 0px;
                            margin-right: 0px;
                        }
                        a{
                          font-size: 8px;
                            text-decoration: none;
                        }
                        .fa-close{
                            
                          
                           color: brown;
                            cursor: pointer;
                            padding: 4px;
                            border-radius: 50%                        }
                        </style>
                  
             
                 


  
         
                <script>
                    window.onload = function(){
                        

             //   document.getElementsByClassName("cart-table")[0].classList.innerHTML="somthing";   
                        let para = document.createElement("div");
para.innerText = "No Items Selected";
document.getElementsByClassName("cart-table")[0].appendChild(para);
                                  
                    };
                   function gotoselecteditem(){
                                    var elem = document.getElementsByClassName("foodcontainer Item2 veg")[0];
                elem.scrollIntoView();
                    }
                </script>
               
                </table>
       </div>     
             <style>
                        thead{
                             border-bottom: 0.5pt solid #d1d1d1;
                            border-top: 0.5pt solid #d1d1d1;
                            padding-right: 0px;
                        }
                        td{
                               border-bottom: 10px;
                            
                        }
                        table{
                            border-collapse: collapse;
                            padding: 0px;
                            margin-right: 0px;
                            border-collapse: separate;
    border-spacing: 0 3px;
                            max-height: 130px;
                            overflow: scroll;
                        }
                        a{
                          font-size: 8px;
                            text-decoration: none;
                        }
                        .fa-close{
                            
                          
                           color: brown;
                            cursor: pointer;
                            padding: 4px;
                            border-radius: 50% 
                 }
                        </style>
            </div>
<div class="totalcontainer"><div class="totaltext">           
      </div >
    
    
    
    <div class="threate">Rs. &nbsp<div class="totalrate"><?php echo $total; ?></div></div></div>
 

  
       <div class="downdetails"><input type="submit" onclick="previeworder()" value="Next">      
        
        
    </div>  

        
        <script>
     function     previeworder(){

   // idlist = []
           let nolist = document.getElementsByClassName("no");   
    let idlist1 = {}
    for (i = 0; i < nolist.length; i++) {
     
        if (parseInt(nolist[i].innerHTML) > 0) {
            if(parseInt(nolist[i].innerHTML)<21){
                
                  idlist1[nolist[i].classList[1]]=nolist[i].innerHTML; 
            }
         
         //   idlist.push(nolist[i].classList[1].slice(2));
        }
    }
 var idlists = JSON.stringify(idlist1);     
                var form = document.createElement("form");
    form.setAttribute("method", "post");
    form.setAttribute("action", "addorder.php");
             form.setAttribute("id", "tempform");
       var FN = document.createElement("input");
    FN.setAttribute("type", "hidden");
    FN.setAttribute("name", "orderlist");
    FN.setAttribute("value", idlists.toString());       
        form.appendChild(FN);
		        var FN = document.createElement("input");
    FN.setAttribute("type", "hidden");
    FN.setAttribute("name", "type");
    FN.setAttribute("value", "mainorder");       
        form.appendChild(FN);
                         document.getElementsByTagName("body")[0].appendChild(form);
         document.getElementById("tempform").submit(); 
     }  
     function opencart(){
 
           var element = document.getElementsByClassName("carts")[0];
  element.classList.toggle("cartsup");
        // if(document.getElementsByClassName("carts")[0].style.display == "none"){
        //   document.getElementsByClassName("carts")[0].style.display = "block";  
             
       //  }
       //  else{
       //      document.getElementsByClassName("carts")[0].style.display = "none";   
             
       //  }
         
         
         
     }
                 function closecart(){
           var element = document.getElementsByClassName("carts")[0];
  element.classList.remove("cartsup");
         
         
     }
            function vegonlyview(obj){
                 var vegdom = document.getElementsByClassName("vegfood");
                 var nonvegvegdom = document.getElementsByClassName("nonvegfood");
                if(obj.checked){
                      for (i = 0; i < vegdom.length; i++) {
                          
                          vegdom[i].style.display = "block";
               
                      }
                                          for (i = 0; i < nonvegvegdom.length; i++) {
                          
                          nonvegvegdom[i].style.display = "none";
               
                      }
                }
                else{
                      for (i = 0; i < vegdom.length; i++) {
                          
                          vegdom[i].style.display = "block";
               
                      }
                                          for (i = 0; i < nonvegvegdom.length; i++) {
                          
                          nonvegvegdom[i].style.display = "block";
               
                      }
                    
                }
                
            }
            
            
            
            
    </script>
    
    <script>
  let idlist = [];
function updatetable(obj){
    
          let noofitem = 0;
        for (var k in obj)
            {
                if (obj.hasOwnProperty(k)){
                    
                    noofitem++;
                } 
            }
        let noofitemdetails = 0;
        for (var k in obj)
            {
               if (obj.hasOwnProperty(k)){
                    
                   noofitemdetails++;
               } 
            }  
        
        let total = 0; 
        
       
        let cart_table = document.getElementsByClassName("cart-table")[0];
        cart_table.innerHTML='<thead style="font-weight: 600;"><tr><td style="font-size: 12px;">Name</td><td style="font-size: 12px;">Quantity</td><td style="margin-left:20px;padding-right: 0px;font-size: 12px;" align="Right">Subtotal</td></tr></thead><tbody>';
        for(i = 0; i < noofitem; i++){
            let itemid   = obj[i][0].itemid;
            let itemname = obj[i][1].itemname;
            let price = obj[i][2].price;
            let deleted = obj[i][3].deleted;
            let type = obj[i][4].type;
            let nos = obj[i][5].nos; 
          
            let thr = document.createElement('tr');
             var td = document.createElement('td');
            cart_table.innerHTML= cart_table.innerHTML + 
                '<tr><td><div class="left-cart-item-name" style="font-family: "Patrick Hand", cursive;">'+itemname+'<br></div></td><td><div class="left-cart-item-no" style="font-family: "Patrick Hand", cursive;">x'+nos+'</div></td><td align="right"><div class="left-cart-item-no" style="font-family: "Patrick Hand", cursive;">'+(parseInt(nos)*parseInt(price)).toString()+'</div></td></tr>';
            total = total + parseInt(nos)*parseInt(price);
         //  cart-table 
            
            
            
            
            
        } 
  
       cart_table.innerHTML =    cart_table.innerHTML + "</tbody>";

         document.getElementsByClassName("totalrate")[0].innerHTML=total.toString();
}
function additem(obj,arg) {
	
	

    if(arg=="cartshow"){
    obj.style.display = "none";
    document.getElementsByClassName("addpinusbtn " + obj.classList[1])[0].style.display = "block";
    document.getElementsByClassName("no " + obj.classList[1])[0].innerHTML = "1";
    }
    if(arg=="add"){
		
			let available=parseInt(document.getElementsByClassName("avilability "+ obj.classList[1])[0].getAttribute("available"))
		if((parseInt(document.getElementsByClassName("no "+obj.classList[1])[0].innerHTML)-available)==0){
			alert("Sorry Only "+available+" left");
			return 0;
			
		}	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
    if(parseInt(document.getElementsByClassName("no " + obj.classList[1])[0].innerHTML)<20){
        
            document.getElementsByClassName("no " + obj.classList[1])[0].innerHTML = (parseInt(document.getElementsByClassName("no " + obj.classList[1])[0].innerHTML) + 1).toString();
			   
    }
        else{
            
            alert("no more than 20");
        }

    }
    if(arg=="minus"){
		            if(parseInt(document.getElementsByClassName("no " + obj.classList[1])[0].innerHTML)>20){
   document.getElementsByClassName("no " + obj.classList[1])[0].innerHTML = "19"}
        if(parseInt(document.getElementsByClassName("no " + obj.classList[1])[0].innerHTML)>0){
   document.getElementsByClassName("no " + obj.classList[1])[0].innerHTML = (parseInt(document.getElementsByClassName("no " + obj.classList[1])[0].innerHTML) - 1).toString();
		
		}
                if(parseInt(document.getElementsByClassName("no " + obj.classList[1])[0].innerHTML)==0){
		
        let name=document.getElementsByClassName("itemvector "+obj.classList[1])[0].innerHTML;
        if(confirm("Are you sure you want to delete "+name+"?")){
			
			document.getElementsByClassName("food "+obj.classList[1])[0].remove();
			if(document.getElementsByClassName("itemvector").length==0){
				
		let emailpre=document.getElementsByClassName("emailpre")[0].value;		
		let namepre=document.getElementsByClassName("namepre")[0].value;
	    let idpre=document.getElementsByClassName("idpre")[0].value;

				                var form = document.createElement("form");
    form.setAttribute("method", "post");
    form.setAttribute("action", "ordernow.php");
             form.setAttribute("id", "tempform");
       var FN = document.createElement("input");
    FN.setAttribute("type", "hidden");
    FN.setAttribute("name", "email");
    FN.setAttribute("value",emailpre);       
        form.appendChild(FN);
				       var FN = document.createElement("input");
    FN.setAttribute("type", "hidden");
    FN.setAttribute("name", "name");
    FN.setAttribute("value", namepre);       
        form.appendChild(FN);
				       var FN = document.createElement("input");
    FN.setAttribute("type", "hidden");
    FN.setAttribute("name", "idnum");
    FN.setAttribute("value", idpre);       
        form.appendChild(FN);

                         document.getElementsByTagName("body")[0].appendChild(form);
        form.submit(); 
			  
			}
			
		}
                  
                }
    
        
    }
    let nolist = document.getElementsByClassName("no");
   // idlist = []
    let idlist1 = {}
    for (i = 0; i < nolist.length; i++) {
     
        if (parseInt(nolist[i].innerHTML) > 0) {
            if(parseInt(nolist[i].innerHTML)<21){
                
                  idlist1[nolist[i].classList[1]]=nolist[i].innerHTML; 
            }
         
         //   idlist.push(nolist[i].classList[1].slice(2));
        }
    }
    if(Object.keys(idlist1).length==0){
        document.getElementsByClassName("cart-table")[0].innerHTML="";
                          let para = document.createElement("div");
para.innerText = "No Items Selected";
document.getElementsByClassName("cart-table")[0].appendChild(para);
      document.getElementsByClassName("totalrate")[0].innerHTML="0";        
    }



    var idlists = JSON.stringify(idlist1);

  

    $.post("includes/getrate.php", {
        id: idlists
		

         


    }, function(data, status) {
  

   //   alert(data);
      
       const obj = JSON.parse(data);
       updatetable(obj);
       
         
     
       if (data == "1") {

           document.getElementsByClassName("error-msg")[0].textContent = "Email ALready Exists";
            document.getElementsByClassName("error-msg")[0].style.display = "block";
            document.getElementById("nextbtn").disabled = true;

}


    })
} 
        function removeelement(){
           


     }   
        
                     
                     
                     
                     
                     
                     
                  
                  function addproductnos(obj){
                                    

    // add the row to the end of the table body
  
  }

                     

                  
                        
                      
                      
                      
                      
                  
                                    function minusproduct(obj){
                      
                
                      
                  }
                  </script>

<script>
        
     function removeelement(){
           


     }   
        
        
        
        
        </script>    
    
    
    
    
    
    <script>
                      function searchoption(obj){
                        
            var inputval = document.getElementsByClassName("searchbox")[0].value.toUpperCase();
            var  opnlist = document.getElementsByClassName("itemvector");
				var test=0		  
               for (i = 0; i < opnlist.length; i++) {
				  
                 var txtValue =   opnlist[i].textContent.toUpperCase();
                      if (txtValue.toUpperCase().indexOf(inputval) > -1) {
                         
            document.getElementsByClassName("food "+opnlist[i].classList[1])[0].style.display = "";
            opnlist[i].style.display = "";
        } else {
			 test=test+1;
             document.getElementsByClassName("food "+opnlist[i].classList[1])[0].style.display = "none";
        }
              
          } 
          if(test==opnlist.length){
			if(!document.getElementById("warningsign")){	  
			        var warning = document.createElement("H3");
      warning.setAttribute("id","warningsign");
      warning.innerHTML = "No Results Found";
      document.getElementsByClassName("itemcontainer")[0].appendChild(warning);
			}
		  }
						  else{
							  
							if(document.getElementById("warningsign")){
								
								document.getElementById("warningsign").remove();
								
							}  
						  }
          
          }

            </script> 
        


        
        
        
        
        
        
        

    
    
    
    
    
    
    
    
    
    
    
    
    
    

        
        
</body>
    
    
    
    
    
    
    
</html>