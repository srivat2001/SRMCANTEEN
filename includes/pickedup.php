<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
                <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js">
    </script>
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
                display: flex;
        
    }
    .Rate{
        
      margin-left: auto;
        padding-right: 20px;
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
        overflow-y: scroll;
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
      
<?php

$psdfromurl = $_GET['psd'];
$userfromurl = $_GET['userid'];
define('FIRSTKEY','Lk5Uz3slx3BrAghS1aaW5AYgWZRV0tIX5eI0yPchFz4=');
define('SECONDKEY','EZ44mFi3TlAey1b2w4Y7lVDuqO+SRxGXsa7nctnr/JmMrA2vN6EJhrvdVZbxaQs5jpSe34X3ejFK/o9+Y5c83w==');
function secured_decrypt($input)
{
$first_key = base64_decode(FIRSTKEY);
$second_key = base64_decode(SECONDKEY);           
$mix = base64_decode($input);
       
$method = "aes-256-cbc";   
$iv_length = openssl_cipher_iv_length($method);
           
$iv = substr($mix,0,$iv_length);
$second_encrypted = substr($mix,$iv_length,64);
$first_encrypted = substr($mix,$iv_length+64);
           
$data = openssl_decrypt($first_encrypted,$method,$first_key,OPENSSL_RAW_DATA,$iv);
$second_encrypted_new = hash_hmac('sha3-512', $first_encrypted, $second_key, TRUE);
   
if (hash_equals($second_encrypted,$second_encrypted_new))
return $data;
   
return false;
}
$id = str_replace("leftslash","/",str_replace("plus","+",$_GET['id']));
$id1 =    secured_decrypt($id);   

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food";


 $sql = "SELECT * FROM admin where userid='$userfromurl'";
//echo $sql;
$conn = new mysqli($servername, $username, $password, $dbname);
$result = $conn->query($sql);
if ($result->num_rows > 0) { 
  while($row = $result->fetch_assoc()) {
      if (password_verify($psdfromurl, $row['psd'])) {
          $sql1 = "UPDATE orderlist SET status='pickedup' WHERE orderid=$id1";
          if ($conn->query($sql1) === TRUE) {
                echo "<h2>Order Picked Up</h2>";
} else {
  echo "Error updating record: " . $conn->error;
}
  }
      else{
          
          echo "incorrectpsd";
      }

}   
    
}
?>
    </div>
    