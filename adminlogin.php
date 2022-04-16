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

    
 
    </style>    
</head>

    <div class="loginform">
        
    <center><img class="logo" src="onlylogo.png" width="100px"></center>
      
        <center>
 <div style="display:none;" class="loader"></div></center>
        <div class="theform">
            <form action="includes/adminloginvalidate.php" method="post"  onsubmit="return checkemail()" >
        <input class="idinput"  type="text" name="idnum"  class="idnum" placeholder="Enter Login Id" id="student_id" autocomplete="off" required>
           <input class="idinput name" type="password" name="psd"  placeholder="Enter password" id="student_name"  autocomplete="off" required>
            <div class="wrap">
  <input type="submit" value="Next" class="button">
              
</div>
      </form>        
    </div>
  
    <script>
        
    
function checkfornum(obj){
    const regex = /\d/; 
    if(regex.test(obj.value))
{
    
    
}
    
    else{
        
        
        obj.value = obj.value.slice(0,-1);
    }
}
function checkfortext(obj){
    const regex = /\d/; 
    if(regex.test(obj.value)) 
{
    
    obj.value = obj.value.slice(0,-1);
}
if(document.getElementsByClassName("idinput name")[0].value.length>25){
   
   obj.value = obj.value.slice(0,-1);
   }

}

function checkemail(){ 

 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.getElementsByClassName("idinput email")[0].value))
  {
    return true;
  }
    alert("You have entered an invalid email address!");
    return false;
       
                      
                      
                      
                      
                      
                  }
           
           

        
        </script>    
        
        
        
        
        
        
        
    </div>
    
    
    
    
    
    
    
</html>