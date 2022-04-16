<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
                <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js">

    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 

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
font-family: 'Patrick Hand', cursive;
         background-image: var(--background-gradient);
   
    }    
  .loginform{
    background-color:var(--background-color);
    width:300px;
    padding-top:20px;
    border-radius:20px;
    box-shadow:20px 20px #000;
padding-bottom: 2rem;
 
}
::placeholder:focus{
    color:#000
}
.logo{
    margin-bottom:10px
}
.loader{
    border:4px solid #f3f3f3;
    border-radius:50%;
    border-top:4px solid #3498db;
    width:40px;
    height:40px;
    -webkit-animation:spin 2s linear infinite;
    animation:spin 2s linear infinite
}
@-webkit-keyframes spin{
    0%{
        -webkit-transform:rotate(0)
    }
    100%{
        -webkit-transform:rotate(360deg)
    }
}
@keyframes spin{
    0%{
        transform:rotate(0)
    }
    100%{
        transform:rotate(360deg)
    }
}

	a{
		
		margin-left: 30px;
		text-decoration: none;
	}




.button-6 {
  align-items: center;
  background-color: #FFFFFF;
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-radius: .25rem;
  box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
  box-sizing: border-box;
  color: rgba(0, 0, 0, 0.85);
  cursor: pointer;
  display: inline-flex;
  font-size: 16px;
  font-weight: 600;
  justify-content: center;
  line-height: 1.25;
  margin: 0;
  min-height: 3rem;
  padding: calc(.875rem - 1px) calc(1.5rem - 1px);
  position: relative;
  text-decoration: none;
  transition: all 250ms;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: baseline;
  width: auto;
}

.button-6:hover,
.button-6:focus {
  border-color: rgba(0, 0, 0, 0.15);
  box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
  color: rgba(0, 0, 0, 0.65);
}

.button-6:hover {
  transform: translateY(-1px);
}

.button-6:active {
  background-color: #F0F0F1;
  border-color: rgba(0, 0, 0, 0.15);
  box-shadow: rgba(0, 0, 0, 0.06) 0 2px 4px;
  color: rgba(0, 0, 0, 0.65);
  transform: translateY(0);
}
    </style>    
</head>

    <div class="loginform">
        
    <center><img class="logo" src="onlylogo.png" width="100px">
      
        
 <div style="display:none;" class="loader"></div>

        
    <h3>Welcome to Good Foods</h3><br> </center>   
		<center>
			<form action="basicinfo.php" >
   <button type="submit" class="button-6">Order Now</button><br><br>
</form>

			
			
		
		
		
		
		</center>      

        
        
        
        
        
        
    </div>
    
    
    
    
    
    
    
</html>