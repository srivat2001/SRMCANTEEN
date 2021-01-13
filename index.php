
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SRM FoodCourt</title>
    <body><!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.2.2/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.2.2/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyC2EWUxPPh6Lhj-VB_Tr7RDLLL4BQxy5Xo",
    authDomain: "srmcanteen.firebaseapp.com",
    projectId: "srmcanteen",
    storageBucket: "srmcanteen.appspot.com",
    messagingSenderId: "618763747132",
    appId: "1:618763747132:web:da8d9dba9d2a29e56be839",
    measurementId: "G-EKF4NWXT9L"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
<?php include('includes/connection.php'); ?>
<link rel="stylesheet" type="text/css" href="css/homestylesheet.css">
<link rel="stylesheet" type="text/css" href="css/headercss.css">
<link rel="stylesheet" type="text/css" href="css/footercss.css">
<script type="text/javascript"  src="js/homepagejws.js"></script>    

    <!---------------------Header----------------------------->
    
 <div class="header">
  <div id="logo" class="logo"><img width="290" height="130"  src="images/logo.png"></div>
     
     
     
  <div id="links" class="header-right">
    <a class="active" href="index_temp.php">Home</a>
    <a  href="pages/gallery.html">Gallery</a>
    <a href="pages/prebook-main.php">PreBook</a>
    <a href="pages/yourorder-knoworder.php">YourOrder</a> 
    <a href="pages/Terms.html">UserTerms</a>
   <a  href="pages/feedbackform.php">FeedBack</a>
    <a  href="pages/admin-orderlogin.php">AdminLogin</a>  
  </div>
</div>
    
 <!--EE-------------------Header-----------------------------EE-->   

                     <br>
                     <br>
                     <br>
                     <br>
   
 <!---------------------Picture-------------------------------> 
     <img  width="1077px" height="500px" src="images/canteenboard.jpg">
    
  <!--EE-------------------Picture-----------------------------EE-->   
  
  <!---------------------About us-------------------------------> 
    
<div class="container">
  <div style="text-align:center">
    <h1 class="font">About us</h1>
      
    <div class="continer"><p align=left>SRM institution have been providing knowledge of education throughout the indian sub-continent. Now, since the world is depending upon the internet we do use internet to provide various facilities. One of those facilities is pre-booking our canteen in this website.</p> </div>  
        
      <hr width="50%">
  </div>
</div>
    
  <!--EE-------------------About us-----------------------------EE--> 
    
    
    
                   <hr>
                   <br>


            <hr  width="38%">




<hr width=50% class="line1">

     
    
<!---------------------Seats Left-------------------------------> 
  <center>    
   <div class="seatsleft"><font color="Purple"><img height="50px" width="50px" src="images/live.png"></font><Br>
      Faculty   Only<br><br>
       <b>Session - 12:25-12:50</b><br>
       <b>  No of seats left:</b>
       <h1>
           <?php     
   
    $query = "SELECT * FROM placeorder WHERE time='12:25-12:50'";     
     $result = mysqli_query($conn, $query); 
        $row = mysqli_num_rows($result);
       echo 32 - $row;  9?></h1>
       
    </div> 
   
   
   <div class="seatsleft"><font color="Purple"><img height="50px" width="50px" src="images/live.png"></font><Br>
       Faculty  Only <br><br>
       <b>Session - 12:50-1:15</b><br>
      <b>No of seats left:</b> 
       <h1>
           <?php   

    $query = "SELECT * FROM placeorder WHERE time='12:50-1:15'";     
     $result = mysqli_query($conn, $query); 
        $row = mysqli_num_rows($result);
       echo 32 - $row;  9?></h1>
       
      </div> 
   </center>

    
<!--EE-------------------Seats Left-----------------------------EE-->    
    
    
 <!---------------------Registration Form----------------------->    
<div class="signup">    
<div class="form-popup" id="myForm">
  <form action="includes/regis2.php" name="signupForm"  method="post" onsubmit="validateForm(event)" class="form-container">
    <h2>Registration Form</h2>

      <label  for="facultyname"><b>Name</b></label>
    <input type="text" placeholder="Enter your name" name="facultyname" autocomplete="off" required>
  
        
     <div class="vegnon" > 
         <input class="input-field" type="checkbox"  onclick="checkstu(event)" id="stu" value="student" name="student">
         <span class="vegandnonveg" id="student">Student</span></div>
      
     <br>
      <br>
    
         <div class="deptbox" id="dept"> 
              <select  name="dept" onchange="jsfunc1()" id="dept">
                    <option >Faculty-Select Department</option>
                    <option value="cse">Computer Science</option>
                    <option value="it">IT  </option>
                    <option value="mechanical">Mechanical  Engineering</option>
                 <option value="civil">CIvil Engineering</option>
                  <option value="ece">ECE</option>
                 <option value="eee">EEE</option>
                 <option value="chem">Chemistry</option>
                 <option value="phy">Physics</option>
                  <option value="math">Mathematics</option>
                  <option value="Eng">English</option>
                   <option value="MBA">MBA</option>
                  <option value="Physical education">Physical Education</option>
                  <option value="Maths">Library</option> 
                  <option value="Counseling">Counseling</option>
                  <option value="Admin">Admin Dept</option>
                  <option value="HR">HR Dept</option>
                   <option value="HR">Others</option>
                 </select></div>
  
       
         <div class="deptbox" id="studept">  <select   name="dept2" onchange="jsfunc1()" >
                   <option >Student-Select Department</option>
                    <option value="cse">Computer Science</option>
                    <option value="it">IT  </option>
                    <option value="mechanical">Mechanical  Engineering</option>
                 <option value="civil">CIvil Engineering</option>
                  <option value="ece">ECE</option>
                 <option value="eee">EEE</option>
    
                  
                   <option value="MBA">MBA</option>
                
                 </select></div>
    
      
      <br>
    <label for="idnum"><b>Your ID</b></label>
    <input id="repsd" type="text" placeholder="YourID" autocomplete="off" name="idnum" required>
      
      
       <label for="password"><b>Password</b></label>
    <input id="psd" type="password" placeholder="Password" autocomplete="off" name="password" required>
      
      
<label for="idnum"><b>Confirm Password</b></label>
    <input id="repassword" type="password" placeholder="Reenter Password" onkeyup="passmatch()" autocomplete="off" name="repassword" required>
     <font color="green"> <h6 id="alertmsg"></h6></font>
        <font color="red"> <h6 id="msg"></h6></font>
      <script>
      function passmatch(){
         
      x=document.getElementById("psd").value;
      y=document.getElementById("repassword").value ;
          
      if(x==y){
          
         document.getElementById("alertmsg").innerHTML="Password Matched"; 
          document.getElementById("msg").innerHTML=" "; 
          document.getElementById("signbut").disabled = false;

      } 
          else{
              
           document.getElementById("msg").innerHTML="Password doesnt match";  
           document.getElementById("alertmsg").innerHTML=" "; 
           document.getElementById("signbut").disabled = true;
   
          }
          
      }
      
      
      </script>
 
   <center><button id="signbut" type="submit" class="button butsignup">Register</button></center> 
    <?php
      $fullurl ="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
      if(strpos($fullurl,"suessfull=entry")== true)
      
      {echo "<center><font color='green'><h3>Registered Successfully</h3></font></center>";}
      
      elseif(strpos($fullurl,"idalreadyexists")== true)
      
      {echo "<font color='red'><h5>Already Exists</h5></font>";}
      
 
    
    ?>
    </form>
</div>
</div>

 <!--EE-------------------Registration Form---------------------EE-->      
    
    
    
    
  <!---------------------Know Your UIN Form----------------------->    
<div class="Login">    
<div class="lform-popup" id="knowyouruin">
  <form action="includes/knowyouruin.php" method="post" class="form-container">
    <span>Registered? Know Your UIN Here</span>
      <h1>UIN</h1>
      <div align="center">(Unique Identification Number)</div><br>

    <label for="email"><b>Enter Your ID Number</b></label>
    <input type="text" placeholder="ID Number" name="yourid" autocomplete="off" required >

    <label for="pwd"><b>
        
        
    <?php 
        if(isset($_GET['name']))
        {     $name = $_GET['name'];    
         echo"<div>UIN:Hello $name your uin is</div>"; 
        }
      ?>  
        </b></label>
     
        
       
     <?php
     
      if(isset($_GET['myNumber']))
      {
      $num = $_GET['myNumber'];
      
           echo"<h1>$num</h1>";
            
      }
 
    ?>

      <center><button type="submit" class="button here3">CLICK HERE</button><br>
       </center>
     
  </form>
</div>
</div> 
      
  <!--EE-------------------Know Your UIN Form---------------------EE-->        


       
    <footer>Copyright 2020 - All rights Reserved. Built by Team CyberOXIS</footer>
    


</body>
</html>
