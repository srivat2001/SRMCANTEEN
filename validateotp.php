<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
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
        padding-bottom: 20px;
        border-radius: 20px;
        box-shadow: 20px 20px black;
        font-family: "segoe ui";
        color: 525252;
    }
    .idinput{
        height: 50px; 
        width: 90%;
        margin:1rem;
          transition: all 0.3s ease 0s;
        padding: 1rem;
            border-radius: 10px;
        border: none;
        border-bottom: 1px solid  #bdbdbd;
        outline: none;
    }
    .idinput:focus{
         animation: animate 1s linear forwards;
         border-bottom: 3px solid  darkred;
        outline: none;
      transform: translateY(-7px);

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
  }

.button:hover {
  background-color: #2EE59D;
  box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
  color: #fff;
 
}
form input{
  display:inline-block;
  width:50px;
  height:50px;
  text-align:center;
    background-color: white;
    outline: none;
  
    border-radius: 50%;
    margin:5px;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}
    </style>    
</head>

    <div class="loginform">
    <center><img class="logo" src="onlylogo.png" width="100px"></center>
        <form enctype="multipart/form-data">
<center><br>
   <div>Enter OTP</div> <br>
                <input class="otp 1" name="otp1" type="text" oninput='digitValidate(this)' onkeyup='tabChange(1,this)' maxlength=1 >
              <input class="otp 2" name="otp2" type="text" oninput='digitValidate(this)' onkeyup='tabChange(2,this)' maxlength=1 >
              <input class="otp 3" name="otp3" type="text" oninput='digitValidate(this)' onkeyup='tabChange(3,this)' maxlength=1 >
              <input class="otp 4" name="otp4" type="text" oninput='digitValidate(this)'onkeyup='tabChange(4,this)' maxlength=1 >
    </center>
            <div class="wrap">
  <button class="button">Next</button>
</div>
        </form>
        
        <script>
        
        function tabChange(change,obj){
    var key = event.keyCode || event.charCode;

    if(key == 8 || key == 46 )
    {    
        
 
            
            
                            var change = change-1;
    document.getElementsByClassName("otp "+change.toString())[0].focus();    
        } 


    
    else{
               if (isNaN(obj.value)){
                     obj.value = obj.value.replace(/[^0-9]/g,'');
                              document.getElementsByClassName("otp "+change.toString())[0].value="";

        
    }
        else{
                           
                 var change = change+1;
            obj.value = obj.value.replace(/[^0-9]/g,'');
    document.getElementsByClassName("otp "+change.toString())[0].focus();     
 
        }
    
}
 }                    
            let digitValidate = function(ele){
  console.log(ele.value);

} 
        
        </script>
        
        
        
        
        
        
    </div>
    
    
    
    
    
    
    
</html>