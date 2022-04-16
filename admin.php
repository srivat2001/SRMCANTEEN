<?php
session_start();
if(!isset($_SESSION["User"])){
	header("Location:adminlogin.php");
	
}?>
<html>
   <head>
      <link href='https://css.gg/trash.css' rel='stylesheet'>
      <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <script src=
         "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script type="text/javascript" src="js/jquery.js"></script> 
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
         overflow: hidden;
         background-image: var(--background-gradient);
         }    
         .loginform{
         background-color:  var(--background-color);
         width:95%;
         padding-top: 20px;
         height: 500px;
         border-radius: 20px;
         box-shadow: 20px 20px black;
         font-family: "segoe ui";
         color: 525252;
         overflow: scroll;
         }
         .idinput{
         height: 50px; 
         width: 50%;
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
         ::placeholder {
         color:  black;
         position: relative;
         left: -10px;
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
         li a {text-decoration : none; color : #2d2f31;}
         nav {
         width : 90%; 
         background: #d9d9d9;
         margin : 10px auto; 
         float: left;
         margin-left: 20px;
         margin-right: 10px;
         border-radius: 20px;
         border-left: 1px solid #ddd;
         }
         nav span {
         padding : 10px;
         background : #2d2f31; 
         color : white;
         font-size : 1.2em;
         font-variant : small-caps;
         cursor : pointer;
         display: block;
         }
         nav span::after {
         float: right;
         right: 10%;
         content: "+";
         }
         .slide {
         clear:both;
         width:100%;
         height:0px;
         overflow: scroll;
         text-align: left;
         transition: height .4s ease;
         display: none;
         height: 300px;
         background-color: white;
         }
         .slidedownup{
         display: block;
         }
         .slide li {padding : 10px;}
         #touch {position: absolute; opacity: 0; height: 0px;}    
         .itemcontainer{
         padding: 1rem;
         }
         .item{
         border-bottom: 1px solid #ddd;
         display: flex;
         }
         .itemname{
         padding: 1rem;
         color: #2d2f31;
         width: 70%;
         text-align: left;
         }
         .select_catogory{
         width: 30%;
         display: flex;
         border-right: 1px solid #ddd;
         padding-right: 10;
         }
         .grid-container {
         display: grid;
         grid-template-columns: auto ;
         background-color: white;
         }
         .grid-item {
         text-align: center;
         }
         select{
         width: 100%;
         padding-left: 25px;
         background-color: #fff;
         background-color: #fff;
         border:0px;
         padding: 1rem;   
         }
         .catogory_title_holder{
         }
         .fa-trash-o{
         cursor: pointer;
         margin-top: 18px;
         margin-left: 5px;
         font-size: 25px;
         transition: all, transform 1s;
         }
         .fa-trash-o:hover {
         color: darkred;
         transform: rotate(20deg);
         }
         .delete-icon{
         }
         * {box-sizing: border-box}
         /* Style the tab */
         .tab {
         float: left;
         border: 1px solid #ddd;
         background-color: #f1f1f1;
         width: 20%;
         height: 100%;
         }
         /* Style the buttons that are used to open the tab content */
         .tab button {
         display: block;
         background-color: inherit;
         color: black;
         padding: 22px 16px;
         width: 100%;
         border: none;
         outline: none;
         text-align: left;
         cursor: pointer;
         transition: 0.3s;
         }
         /* Change background color of buttons on hover */
         .tab button:hover {
         background-color: #ddd;
         }
         /* Create an active/current "tab button" class */
         .tab button.active {
         background-color: #ccc;
         }
         /* Style the tab content */
         .tabcontent {
         float: left;
         padding: 0px 0px;
         border: 1px solid #ddd;
         width: 80%;
         border-left: none;
         border-bottom: 0px;
         }
         h3,p{
         margin-left: 20px;
         }
         #myInput {
         background-image: url('/css/searchicon.png');
         background-position: 10px 12px;
         background-repeat: no-repeat;
         width: 100%;
         font-size: 16px;
         padding: 12px 20px 12px 27px;
         border: 1px solid #ddd;
         border-left: 0px;
         }
         option{
         padding: 1rem;
         }
         #myInput:focus {
         outline: none;
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
         display: flex;    
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
         outline: none;
         border: 0.5px solid #d1d1d1;
         margin-top: 0px;
         }    
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
         .itemcontainerforedit{
         margin-left: 20px;
         }
         .select_catogory1{
         width: 100%;
         display: flex;
         border-right: 1px solid #ddd;
         padding-right: 10;
         border: 1px solid #c3c3c3;
         padding: 0rem;   
         }
         .countersearch{
         margin: 0px;
         margin-left: 0px;
         }
         #myInput1{
         background-image: url('/css/searchicon.png');
         background-position: 10px 12px;
         background-repeat: no-repeat;
         width: 50%;
         font-size: 16px;
         padding: 12px 20px 12px 27px;
         border: 1px solid #ddd;
         padding-left: 13;
         margin-left: 20;
         }
         details {
         position: relative;
         width: 300px;
         margin-right: 1rem;
         }
         details[open] {
         z-index: 1;
         }
         summary {
         padding: 1rem;
         cursor: pointer;
         border-radius: 5px;
         background-color: #ddd;
         list-style: none;
         }
         summary::-webkit-details-marker {
         display: none;
         }
         details[open] summary:before {
         content: '';
         display: block;
         width: 100vw;
         height: 100vh;
         background: transparent;
         position: fixed;
         top: 0;
         left: 0;
         }
         summary:after {
         content: '';
         display: inline-block;
         float: right;
         width: .5rem;
         height: .5rem;
         border-bottom: 1px solid currentColor;
         border-left: 1px solid currentColor;
         border-bottom-left-radius: 2px;
         transform: rotate(45deg) translate(50%, 0%);
         transform-origin: center center;
         transition: transform ease-in-out 100ms
         }
         summary:focus {
         outline: none;
         }
         details[open] summary:after {
         transform: rotate(-45deg) translate(0%, 0%);
         }
         ul {
         width: 100%;
         background: #ddd;
         position: absolute;
         top: calc(100% + .5rem);
         left: 0;
         padding: 1rem;
         margin: 0;
         box-sizing: border-box;
         border-radius: 5px;
         max-height: 200px;
         overflow-y: auto;
         }
         li {
         list-style-type:none;
         margin: 0;
         padding: 1rem 0;
         border-bottom: 1px solid #ccc;
         font-size: 17px;
         line-height: 0.1;
         letter-spacing: 0.122em;
         font-size: 15px;
         font-weight: 100;
         }
         li:first-child {
         padding-top: 0;
         }
         li:last-child {
         padding-bottom: 0;
         border-bottom: none;
         }
         /* FAKE SELECT */
         summary.radios {
         counter-reset: radios;
         }
         ul.list {
         counter-reset: labels;
         }
         label {
         width: 100%;
         display: block;
         cursor: pointer;
         }
         .fa-filter{
         margin-right: 10px;
         margin-top: 5;
         }
      </style>
   </head>
   <div class="loginform">
      <center><img class="logo" src="onlylogo.png" width="100px"></center>
	   <a href="includes/adminlogout.php" style="float: right;
font-weight: 500;
font-size: 20px;
line-height: 0;
margin-right: 10px;
position: relative;
top: -20;
">Logout</a>
      <center>
         <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'Counter')">Select Counter</button>
            <button class="tablinks" onclick="openCity(event, 'EditItems')">Menu Item</button>
            <button class="tablinks" onclick="openCity(event, 'additem')">Add Item</button>
			   <button class="tablinks" onclick="openCity(event, 'orderlist')">Orders</button>
			 <button class="tablinks" onclick="openCity(event, 'Ordered_Items')">Order Counter Wise</button>
         </div>
      </center>
      <div id="Counter" class="tabcontent">
         <h3>Select Counter</h3>
         <p>Select Which Item will Be in Which counter</p>
         <div style="display:none;" class="loader"></div>
         <?php         
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "food";
            $sql = " SELECT * FROM other_info";
            $conn = new mysqli($servername, $username, $password, $dbname);
            $result = $conn->query($sql);
            $counter = '';
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
            $counter = $row['counter'];
                }
            
            }
                   $no = 1;
                  
                  while($no<intval($counter)+1){
                      
                  echo'<div style="display:flex"><nav class="counter '.$no.'">
             <label for="touch"><span onclick="openslider(this)" class="catogory_title_holder '.$no.'">Counter '.$no.' </span></label>               
             <input  type="checkbox" class="touch  '.$no.'" id="touch"> 
             
             
             
            
             
             
             
             
             
             
             <div class="slide '.$no.'">
               <input type="text" id="myInput"  class="search '.$no.' countersearch" style="padding-left: 18px;"  onkeyup="searchincounter(this)" placeholder="Search for names.." title="Type in a name">
            <div class="grid-container '.$no.'">';
                    
                      
            $sql = " SELECT * FROM items";
            $conn = new mysqli($servername, $username, $password, $dbname);
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                while($row1 = $result->fetch_assoc()) { 
            
            if(intval($row1['counter_no'])==intval($no)){           
             echo'    <div class="grid-item '.$row1['itemid'].' '.$no.'">';
              
              echo'   <div class="item '.$row1['itemid'].' '.$no.'">';
               
                   
                   
                   
                 echo'     <div class="select_catogory"><select name="cars" id="cars">';
            $c1 = 1;           
            while($c1<intval($counter)+1){
               if($c1==intval($row1['counter_no'])){
                   
                  echo   '<option onclick="changecounter(this)" class="Counter '.$row1['itemid'].' '.$c1.'" value="Counter '.$c1.'" selected>Counter '.$c1.'</option>';   
               }
               else{
                   
                     echo   '<option onclick="changecounter(this)" class="Counter '.$row1['itemid'].' '.$c1.'" value="Counter '.$c1.'">Counter '.$c1.'</option>';
               }
            
               $c1 = $c1+1;
            } 
            
             
            
             
            echo'  
            </select>';
            
            
            
            
            echo '</div>';
               echo ' <div class="itemname '.$row1['itemid'].' '.$no.'">'.$row1['itemname'].'</div>';
            echo'
                   </div></div>';
                }
                
                
                }
            }
                      
                      
                      
                      
                      
               echo'  
             
                 </div> 
             </div>
            </nav><div onclick="delete_counter(this)"  class="delete-icon '.$no.'">';
            
            if($no!=1){
               
             echo'<i class="fa fa-trash-o " ></i>';  
            }
            
            
            
            
            echo'</div>
            
            
            
            </div>'  ;  
                      
               $no  = $no+1;     
                  } 
               
                    ?>
         <nav style="width:350px;"  class="counter">
            <label for="touch"><span onclick="addcounter(this)" class="catogory_title_holder add">Add Counter</span></label>
         </nav>
      </div>
      <div id="EditItems" class="tabcontent">
         <h3>Edit Items</h3>
         <p> Remove, Hide Items</p>
         <div style="display:flex">
            <input type="text" id="myInput1" class="search" style="" onkeyup="searchmenulist(this)" placeholder="Search for names.." title="Type in a name">
            <div style="font-size: 32px;
               color: #545454;
               margin-left: auto;"><i class="fa fa-filter" style=""></i></div>
         </div>
         <br><br>
         <div class="itemcontainerforedit">
            <?php
               $servername = "localhost";
               $username = "root";
               $password = "";
               $dbname = "food";
               $sql = "SELECT * FROM `items` ORDER BY `items`.`itemname` ASC ";
               $conn = new mysqli($servername, $username, $password, $dbname);
               $result = $conn->query($sql);
               
               $x = 0;
               if ($result->num_rows > 0) {  
                while($row = $result->fetch_assoc()) { 
                   
                    if($row["type"]=="veg"){
                        echo'<div 
               		 
               		    typeoffood="'.$row["type"].'" display="'.$row["display"].'" 
               		 
               		 
               		 class="food '. $row["itemid"].'"><div class="vegfood"><div class="foodcontainer pd'. $row["itemid"].' veg">';
                            
                        
                    }
                    else{
                        
                        echo '<div class="food '. $row["itemid"].'"><div class="nonvegfood"><div class="foodcontainer pd'. $row["itemid"].' nonveg">'; 
                    }
                        echo'<div class="hrr"></div> <div class="theitem">
                           <div class="leftside '. $row["itemid"].'">
                      
                           <img src=veg-icon.png width="14px;">
                           <div id="testtest" name-store="'. $row["itemname"].'" class="itemvector '. $row["itemid"].'">' . $row["itemname"]. '</div>
                                         <div class="Rate '. $row["itemid"].'">Rs <span class="editrate '. $row["itemid"].'">' . $row["price"]. '</span></div>
										 
										 
										 
										 <div class="Quantity '. $row["itemid"].'">Quantity: <span class="editquantity '. $row["itemid"].'">' . $row["available"]. '</span></div>
                                    
                               
                               </div>
                               
                               
                     
                         
                                 <div class="rightside">
                                 <i class="fas fa-edit '. $row["itemid"].'" onmouseover="altelment(this,\'Edit Item Deatils\')" onmouseleave="removealt()" onclick="editname(this)" ></i>
                      <i class="fa fa-trash-o trash '. $row["itemid"].'"  onmouseover="altelment(this,\'Delete Item\')" onmouseleave="removealt()" onclick="deleteitem(this)" style="font-size:28px"></i>';
                      
                if($row["type"]=='veg')
                {   //
                echo  ' <div class="chkboxcontainer" style="margin-right: 13;" >
                      <label class="container"><input type="radio" onchange="vegnonvegtoggle(this);" id="view" class="veg '. $row["itemid"].'" name="vegnonveg '. $row["itemid"].'" value="veg" checked>
                <div class="cbkboxtxt">Veg</div>
               </label>  <label class="container">
                <input onchange="vegnonvegtoggle(this);" type="radio" id="hide" class="hide '. $row["itemid"].'" name="vegnonveg '. $row["itemid"].'" value="nonveg" >
                <div class="cbkboxtxt">Non Veg</div>
               </label>      
               </div>';  
                }
                    else{
                        
                    echo    ' <div class="chkboxcontainer" style="margin-right: 13;">
                      <label class="container"><input type="radio" onchange="vegnonvegtoggle(this);" id="view" class="veg '. $row["itemid"].'" name="vegnonveg '. $row["itemid"].'" value="veg">
                <div class="cbkboxtxt" >Veg</div>
               </label>  <label class="container">
                <input onchange="vegnonvegtoggle(this);" type="radio" id="hide" class="hide '. $row["itemid"].'" name="vegnonveg '. $row["itemid"].'" value="nonveg" checked>
                <div class="cbkboxtxt">Non Veg</div>
               </label>      
               </div>'     ;
                        
                    }
               
               
               
               
                      
                if($row["display"]=='view')
                {
                echo  ' <div class="chkboxcontainer">
                      <label class="container"><input type="radio" onchange="viewhidetoggle(this);" id="view" class="view '. $row["itemid"].'" name="fav_language '. $row["itemid"].'" value="view" checked>
                <div class="cbkboxtxt">View</div>
               </label>  <label class="container">
                <input onchange="viewhidetoggle(this);" type="radio" id="hide" class="hide '. $row["itemid"].'" name="fav_language '. $row["itemid"].'" value="hide" >
                <div class="cbkboxtxt">Hide</div>
               </label>      
               </div>';  
                }
                    else{
                        
                    echo    ' <div class="chkboxcontainer">
                      <label class="container"><input type="radio" onchange="viewhidetoggle(this);" id="view" class="view '. $row["itemid"].'" name="fav_language '. $row["itemid"].'" value="show">
                <div class="cbkboxtxt" >View</div>
               </label>  <label class="container">
                <input onchange="viewhidetoggle(this);" type="radio" id="hide" class="hide '. $row["itemid"].'" name="fav_language '. $row["itemid"].'" value="hide" checked>
                <div class="cbkboxtxt">Hide</div>
               </label>      
               </div>'     ;
                        
                    }
               
               
               
                echo'      
                                 </div>
                                 
                                 
                                 </div></div></div></div>';
                    
                $x = $x+1;   
               }
               }
                           
                         ?>  
         </div>
      </div>
      <style>
         input[type=radio]{
         height: 15;
         width: 15;
         position: relative;
         top: 15;
         }
         .leftside button{
         margin-bottom: 15;
         margin-top: 4px;
         }
         .fa-edit{
         font-size: 22px;
         position: relative;
         top: 21;
         left: -40;
         cursor: pointer;
         transition:all, transform 1s;
         }
         .fa-edit:hover {
         color: darkgreen;
         transform: rotate(20deg);
         }         
         .chkboxcontainer{
         position: relative;
         top: -4;
         left: -15;
         }
         .cbkboxtxt{
         margin-left: 5;
         position: relative;
         top: 14;
         font-weight: 100;
         }
         .container{
         display: flex;
         }
         .trash{
         margin-top: 18px;
         margin-left: 5px;
         font-size: 22px;
         font-size: 25px;
         vertical-align: inherit;
         display: inline;
         position: relative;
         top: ;
         left: -25;
         }
         .container input[type=checkbox]{
         padding: 5px;
         width: 20px;
         outline: none;
         margin: 20px;
         margin-bottom: 5px;
         margin-top: 10px;
         border: 0.5px solid #d1d1d1;
         height: 20px;
         margin-right: 0px;
         border: 0.5px solid black;
         outline: none;
         }
         .edit{
         border-bottom: 1px solid black;
         padding: 0px;
         margin: 10px 0px 10px 0px;
         }
         .grayout {
         opacity: 0.6; /* Real browsers */
         filter: alpha(opacity = 60); /* MSIE */
         pointer-events: none;
         }
         .altelement{
         position: absolute;
         left: -20;
         top: -40;
         background-color: white;
         color: darkred;
         padding: 5px;
         border-radius: 10px;
         border: 1px solid darkred;
         font-size: 19px;
         font-size: 13px;
         font-weight: 100;
         }
         .addcounter{
         background-color: #fc9842;
         background-image: linear-gradient(315deg, #fc9842 0%, #fe5f75 74%);
         color: white;
         border-radius: 10px;
         }
         .addcountermain{
         margin-left: 19;
         }
         .addcountermain1{
         margin-left: 19;
         margin-top: 10px;
         }
         .newnamerateorder::placeholder{
         color: white;
         }
         #messageconfirm{
         font-weight: 400;
         margin: 22;
         color: #fff;
         background-color: #15a600;
         width: fit-content;
         padding: 0.5rem;
         border-radius: 10px;
         display: none;				
         }
      </style>
      <div id="additem" class="tabcontent">
         <h3>Add Items</h3>
         <p>Add Items</p>
         <form action="includes/addnewitem.php" method="post" name="additem" onsubmit="return checkform()" >
            <input class="idinput newnamerateorder"  type="text" name="Name" id="newname" placeholder="Itemname" autocomplete="off" required>
            <input class="idinput newnamerateorder" type="number" name="Rate"  id="newrate" placeholder="Rate"  autocomplete="off" required>
            <div class="select_catogory addcountermain">
               <select class="addcounter" name="vegornonveg" >
                  <option  class="Counter" value="veg">Veg</option>
                  <option class="Counter" value="nonveg">Non Veg</option>
               </select>
            </div>
            <div class="select_catogory addcountermain1"><select class="addcounter" name="optioncounter" id="cars">
               <?php  
                  $no = 1;
                  
                  while($no<intval($counter)+1){
                      echo '<option class="Counter"   value="'.$no.'" selected="">Counter '.$no.'</option>';
                      $no = $no+1;            
                  }?>
               </select>
            </div>
            <div id="messageconfirm"></div>
            <div class="wrap">
               <input type="submit" value="Next" class="button">
            </div>
         </form>
      </div>
	  <div id="orderlist" class="tabcontent">
	     <div class="loginform">
        
    <center><img class="logo" src="onlylogo.png" width="70px"></center>
      
        <center>
 <div style="display:none;" class="loader"></div></center>
         <div style="display:flex"> 
              <img src="img/pngaaa.com-5041423.png" style="margin-top:10px;" width="25px"  height="25px"> 
            
            <h3 class="yourorders"> </h3> </div>   
        <div class="hr"></div>
 <div class="finalcart">
 <style>
	     .itemflex{
                display: flex;
			 		 
        
    }
	 .itemflex1{
		 width: 100%;  
		 
	 }
	     .finalcart{
        
       

			 border: 1px solid #e3e3e3;;
			 padding: 1rem;
			 
border-left: 0;
border-right: 0;			 
    }
	     .yourorders{
        
      font-size: 17px;
font-weight: 300;
        margin-left: auto;
        padding-right: 20px;;
    }
	     .orderid{
      font-size: 17px;
font-weight: 100;  

line-height: 1.6;
			 margin-bottom: 10px;
        
    }
	     .name{
        

			 margin-bottom: 4px;
			 font-size: 24px;
font-weight: 100;
    }
	     .Nos{
        
line-height: 0.8;
font-weight: 300;
margin-bottom: 4px;

position: relative;
top: 12;
margin-left: 10;
			 font-size: 17px;
font-weight: 700;
    }
	 .Rate_orderlist{
		 	 margin-bottom: 4px;
		 margin-left: auto;
		 
	 }
	 .totalrate{
		 
		 font-size: 22px;
font-weight: 900;
	 }
	 .ordertime{
color: #868686;
margin-left: auto;
font-size: 15px;
line-height: 1.3;
font-weight: 100;
margin-bottom: 20;
text-align: right;
		 
	 }
	 </style>
<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food";
$sql = "SELECT * FROM ordermain ORDER BY orderid ASC ";
//echo  $sql;
$conn = new mysqli($servername, $username, $password, $dbname);
$result = $conn->query($sql);

$x = 0;

if ($result->num_rows > 0) {  
 
 while($row = $result->fetch_assoc()) { 

	$timecur=	$row["time"];
	echo '    <div style="display:flex;" ><div  class="orderid">Order id: 19828415475</div>
	
	<div class="ordertime">'.$timecur.'<br>
'.$row["idnum"].'<br>
 '.$row["email"].'<br>
 '.$row["Name"].'</div>
	</div> <div class="hrr"></div><div class="itemflex1">';	

 
$orderid = $row["orderid"];	 
$sql = "SELECT * FROM orderlist where orderid=$orderid";	 
$result1 = $conn->query($sql);
if ($result1->num_rows > 0) {  
 while($row = $result1->fetch_assoc()) { 

	 
  $sql = "SELECT * FROM items where itemid=".$row["itemid"]."";
	 
$conn = new mysqli($servername, $username, $password, $dbname);
$result2 = $conn->query($sql);
if ($result2->num_rows > 0) {  
 while($row1 = $result2->fetch_assoc()) {      
   $nameitem = $row1["itemname"];
     $price = $row1["price"];  
}
}
 
    echo'<div class="itemflex">
	
	<div style="display:flex">
     <div class="name">'.$nameitem.'<br>



</div> 
       <div class="Nos">x'.$row["nos"].'

</div>
</div>


              <div class="Rate_orderlist">Rs '.intval($row["nos"])*intval($price).'</div>
    
  </div>
     
        ';
/*
$x = $x+1;
 
*/


 }

		
	 echo '<div class="totalrate">Rs26<div> </div>';
	
	
}}}
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
           
          

         
          //   document.getElementsByClassName("orderid")[0].innerHTML ="Order Id: "+data;
           //  jQuery('#qrcode').qrcode({width: 120,height: 120,text: c});   

              
          
           
           
       });            


        });
                          
        
        </script>
        
        
        
        
        
        <style>
			 
			.ItemcounterName{
				
				margin: 1rem;
				
			}
			td{
				
				font-size: 20px;
				width: 500;
			}
			.selectnos{
				
				border: 1px solid #bdbdbd;
				width: 50%;
				margin: 1rem;
			}
			 </style>
    </div>
	   
	   </div></div></div>
      <div id="Ordered_Items" class="tabcontent">    <h3>Select Counter</h3>
         <p>Select The Counter</p>
		  <select class="selectnos" name="cars">
			  <option value="1" onclick="updatecounter(1)">1</option>
			   <option value="2" onclick="updatecounter(2)">2</option>
			   <option value="3" onclick="updatecounter(3)">3</option>
		  </select>
		  <script>
		  
	   function updatecounter(num){
		  
		            
       $.post("includes/counterwiseorderlist.php",{
           counternos : num
       },function(data,status){
           
          

         
           document.getElementById("counterorderlist").innerHTML=data;  

              
          
           
           
       });        
		  
		  
	  }

		  function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function demo() {
        i = 2;
        await sleep(i * 1000);
	var x = document.getElementsByClassName("selectnos")[0].value; 
        $.post("includes/counterwiseorderlist.php",{
           counternos : x
       },function(data,status){
           
          

         
           document.getElementById("counterorderlist").innerHTML=data;  

              
          
           
           
       });  
    console.log('Done');
}

demo();
		  
		  
		  </script>
		  
		  
		  <div id="counterorderlist">
			  
			  
		  
<?php 
		

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food";
$sql = "SELECT * FROM items where orderednos>0 ";
//echo  $sql; ItemcounterName
$conn = new mysqli($servername, $username, $password, $dbname);
$result = $conn->query($sql);

$x = 0;

if ($result->num_rows > 0) {  
 echo "<table class='ItemcounterName'>";
	
	echo "<tr><td><b>Name</b></td><td><b>No Of Orders</b></td><td><b>Counter</b></td></tr>";
 while($row = $result->fetch_assoc()) { 	  
		  
	echo "
	<tr>
	
	<td>{$row['itemname']} </td>
	<td>{$row['orderednos']}</td>
	<td>{$row['counter_no']}</td>
	</tr>
	
	"; 
		  
 }

 echo "</table>";


}
else{
	
	echo "<div class='ItemcounterName'>No Orders on This Counter</div>";
}



		  ?>


</div>








</div>
      <script>
         function checkform(){
         
             let newname = document.getElementById("newname").value;
             let rate = document.getElementById("newrate").value;
             if(newname.length<3 ||newname.length>100 ){
                 
                 alert("Item Name Lenth Should be Between 2 and 50");
                 return false;
                 
             }
             if(rate<3){
                 
                 alert("Rate should Should be Between 3 and 200");
                 return false;
                 
             }
             
         }
         
         
      </script>
   </div>
   <script>
      function createaltelment(obj,msg){
          let width= msg.length+60 ;
      var newalt = document.createElement("div");
      newalt.innerText = msg;
      newalt.setAttribute("class","altelement");
      newalt.setAttribute("id","altelement");
      newalt.setAttribute("style","width:"+width+"px");
      obj.appendChild(newalt);   
          
          
          
      }
      function altelment(obj,msg){
      //   const rect = obj.getBoundingClientRect();
      //  var left= rect.left + window.scrollX;
      //   var top= rect.top + window.scrollY - 20;
      if(!document.getElementById("altelement")){
      createaltelment(obj,msg)   
      
      }
      
      }
      function removealt(){
      //   const rect = obj.getBoundingClientRect();
      //  var left= rect.left + window.scrollX;
      //   var top= rect.top + window.scrollY - 20;
      if(document.getElementById("altelement")){
      
      document.getElementById("altelement").remove()
      }
      
      }
      function     viewhidetoggle(obj){
      let data=obj.value;
      let itemid = obj.classList[1];
                $.post("includes/updateedititems.php", {
             
             newname: "null",
             newrate:data,
             type:"viewhidetoggle",
             itemid:itemid
         
         },
                     function(data, status) {
                 alert(data); 
             
      });
      
      
      }
      
      function vegnonvegtoggle(obj){
          
              let data=obj.value;
      let itemid = obj.classList[1];
                $.post("includes/updateedititems.php", {
             
             newname: "null",
             newrate:data,
             type:"vegnonveg",
             itemid:itemid
         
         },
                     function(data, status) {
                 alert(data); 
             
      });   
          
          
      }
      function aftercancelupdate(obj){
      
      
        itemlist = document.getElementsByClassName("food");
        for (i = 0; i < itemlist.length; i++) {
            
          if(itemlist[i].classList[1]!=obj.classList[2]){
              
              itemlist[i].classList.remove("grayout")
          }  
            
        }
        itemlist = document.getElementsByClassName("fas fa-edit");
        for (i = 0; i < itemlist.length; i++) {
            
          if(itemlist[i].classList[1]!=obj.classList[2]){
              
              itemlist[i].style.color="black";
          }  
            
        }
      
      //   alert(document.getElementsByClassName("savebtn "+obj.classList[1])[0].classList);
      if(document.getElementsByClassName("savebtn "+obj.classList[1])[0]){
      
      document.getElementsByClassName("savebtn "+obj.classList[1])[0].remove();
      
      }
      if(document.getElementsByClassName("cancelbtn "+obj.classList[1])[0]){
      
      document.getElementsByClassName("cancelbtn "+obj.classList[1])[0].remove();
      
      } 
        itemnameedit = document.getElementsByClassName("itemvector "+obj.classList[1])[0];
      itemnameedit.contentEditable = false;
      itemnameedit.focus() 
      itemnameedit.classList.remove("edit");
        
      rateedit = document.getElementsByClassName("editrate "+obj.classList[1])[0];
      rateedit.contentEditable = false;
      
      rateedit.classList.remove("edit");     
      }
      
      function deleteitem(obj){
      let text = document.getElementsByClassName("itemvector "+obj.classList[3])[0].innerHTML;
      if (confirm("Would Like to Delete "+text+" ?") == true) {
      
             let itemid = obj.classList[3];
         $.post("includes/updateedititems.php", {
             
             newname: "null",
             newrate:"null",
             type:"remove",
             itemid:itemid
         
         },
                     function(data, status) {
                 alert(data); 
              location.reload(); 
      });
      
      }
      }
      function saveitemdetails(obj){
      
      let newname = document.getElementsByClassName("itemvector "+obj.classList[1])[0].innerHTML;
      let newrate = parseInt(document.getElementsByClassName("editrate "+obj.classList[1])[0].innerHTML);
	   let newquanity = document.getElementsByClassName("editquantity "+obj.classList[1])[0].innerHTML;
      if(newname.length<3 || newname.length>50){
       alert("Name should be Between 2 and 50");
       return 0;
      }
      if(newrate<2 || newrate>120){
       alert("Rate should be Between 2 and 120");
       return 0;
      }
	        if(parseInt(newquanity)<0 || parseInt(newquanity)>500){
       alert("quantity should be Between 0 and 500");
       return 0;
      }
      let itemid = obj.classList[1];
         $.post("includes/updateedititems.php", {
             
             newname: newname,
             newrate:newrate,
			 newquanity:newquanity,
             type:"edit",
             itemid:itemid
           
         
         },
                     function(data, status) {
                 alert(data); 
               aftercancelupdate(obj);
              document.getElementsByClassName("itemvector "+obj.classList[1])[0].setAttribute("name-store",newname);
      });
      
      
      }
      function cancelsavedetails(obj){
          
          var oldname = document.getElementsByClassName("itemvector "+obj.classList[1])[0].getAttribute("name-store");
      
          document.getElementsByClassName("itemvector "+obj.classList[1])[0].innerHTML = oldname;
        
          aftercancelupdate(obj);
          
          
      }
      
      function openslider(obj){
      
      var id = obj.classList[1];
      document.getElementsByClassName("slide "+id)[0].classList.toggle("slidedownup");
      
      
      }
      function  editname(obj){
        
      itemnameedit = document.getElementsByClassName("itemvector "+obj.classList[2])[0];
      itemnameedit.contentEditable = true;
      itemnameedit.focus() 
      itemnameedit.classList.add("edit");
      
      rateedit = document.getElementsByClassName("editrate "+obj.classList[2])[0];
      rateedit.contentEditable = true;
      
      rateedit.classList.add("edit");          
      rateedit = document.getElementsByClassName("editquantity "+obj.classList[2])[0];
      rateedit.contentEditable = true;
      
      rateedit.classList.add("edit");            
        
      if(!document.getElementsByClassName("savebtn "+obj.classList[2])[0]){
      
                      var btn = document.createElement("button");
      btn.setAttribute("style","border: 1px solid;");
      btn.innerHTML = "Save";
      btn.setAttribute("class","savebtn "+obj.classList[2]);
           btn.setAttribute("onclick","saveitemdetails(this)");
      document.getElementsByClassName("leftside "+obj.classList[2])[0].appendChild(btn);    
          
      }
               if(!document.getElementsByClassName("cancelbtn "+obj.classList[2])[0]){
      
                      var btn = document.createElement("button");
      btn.setAttribute("style","border: 1px solid;");
      btn.innerHTML = "Cancel";
      btn.setAttribute("class","cancelbtn "+obj.classList[2]);
      btn.setAttribute("style","margin-left:10px;border: 1px solid;");
      btn.setAttribute("onclick","cancelsavedetails(this)");
      document.getElementsByClassName("leftside "+obj.classList[2])[0].appendChild(btn);    
          
      }
      document.getElementsByClassName("fas fa-edit "+obj.classList[2])[0].style.color ="green";
       itemlist = document.getElementsByClassName("food");
        for (i = 0; i < itemlist.length; i++) {
            
          if(itemlist[i].classList[1]!=obj.classList[2]){
              
              itemlist[i].classList.add("grayout")
          }  
            
        }
        
      
      }
          function addcounter(obj){
                $.post("includes/updatecounter.php", {clannelnum: "null",itemname:"null",type: "add"},
                     function(data, status) {
                 alert(data); 
              location.reload(); 
      });  
         
          }
              function delete_counter(obj){
                $.post("includes/updatecounter.php", {clannelnum: "null",itemname:"null",type: "minus"},
                     function(data, status) {
                 alert(data); 
             location.reload();  
      }); 
                  
       
      } 
      function changecounter(obj){
      var cn = obj.classList[2];
      var itemid = obj.classList[1];
      
       $.post("includes/updatecounter.php", {clannelnum: cn,itemname:itemid, type:"editcounter"},
                     function(data, status) {
      
      if (data == "updated") {
      
      alert("updated");
      var elm = document.getElementsByClassName("grid-item "+itemid)[0];
      elm.remove();
      document.getElementsByClassName("grid-container "+cn)[0].appendChild(elm);         
      }
             else{
                
                 alert("Error"); 
             }
      
      
      });  
      
      }
      
      
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
      if(i==0){
      
        tabcontent[i].style.display = "block";
      
      }
      else{
        
       tabcontent[i].style.display = "none"; 
      }
      
      }
      const urlParams = new URLSearchParams(window.location.search);
      const color = urlParams.get('added');
      if(color=="sucess")
      {
      
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
      if(i==tabcontent.length-1){
      
        tabcontent[i].style.display = "block";
      
      }
      else{
        
       tabcontent[i].style.display = "none"; 
      }
      
      }
      document.getElementById("messageconfirm").style.display="block";
      document.getElementById("messageconfirm").innerHTML=color.toString();
      
      }
      console.log(urlParams);
      
      
      
      
      function openCity(evt, cityName) 
      
      
      
      
      {
      var i, tabcontent, tablinks;
      
      // Get all elements with class="tabcontent" and hide them
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
      }
      
      // Get all elements with class="tablinks" and remove the class "active"
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      
      // Show the current tab, and add an "active" class to the link that opened the tab
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
      }
      
      
      function searchmenulist(obj){
      
      var input, filter, ul, li, a, i, txtValue;
      input = obj;
      filter = input.value.toUpperCase();
      li = document.getElementsByClassName("itemvector ");
      li2 = document.getElementsByClassName("food ");
      // Loop through all list items, and hide those who don't match the search query
      var count = 0;
      for (i = 0; i < li.length; i++) {
      a = li[i];
      txtValue = a.textContent || a.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li2[i].style.display = "";
      
      } else {
      count = count+1;  
      li2[i].style.display = "none";
      }
      }
      
      
      }    
      
      function searchincounter(obj) {
      // Declare variables
      var input, filter, ul, li, a, i, txtValue;
      input = obj;
      filter = input.value.toUpperCase();
      var chl = obj.classList[1];
      li = document.getElementsByClassName("itemname "+chl);
      if(document.getElementById("warningsign"))
      {
        
        document.getElementsByClassName("slide "+chl+" slidedownup")[0].removeChild(document.getElementById("warningsign"));  
      }
      
      li2 = document.getElementsByClassName("grid-item "+chl);
      // Loop through all list items, and hide those who don't match the search query
      var count = 0;
      for (i = 0; i < li.length; i++) {
      a = li[i];
      txtValue = a.textContent || a.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li2[i].style.display = "";
      
      } else {
      count = count+1;  
      li2[i].style.display = "none";
      }
      }
      if(li.length == count){
      
      
      var warning = document.createElement("H3");
      warning.setAttribute("id","warningsign");
      warning.innerHTML = "No Results Found";
      document.getElementsByClassName("slide "+chl+" slidedownup")[0].appendChild(warning);
      }
      
      }
      
   </script>
</html>
