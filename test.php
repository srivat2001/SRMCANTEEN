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
	background-color: #fc9842;
  background-image: linear-gradient(315deg, #fc9842 0%, #fe5f75 74%);
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
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

	input{
		
		padding: 1rem;
		margin: 1rem;
		margin-top: 0.45rem;
		margin-bottom: 0.4rem;
		width: 90%;
		border-radius: 10px;
		border: 1px solid grey;
	}    
	iframe{
		border-radius: 10px;
		margin: 1rem;
	}
	.shopname{
			padding: 1rem;
		margin: 1rem;
		background-color: #0003a6;
		border-radius: 10px;
		color: white;
		
	}
	button{
		color: #0003a6;
		
		padding: 0.5rem;
		margin-top: 0.3rem;
	}
    </style>    
</head>

    <div class="loginform">
  <input placeholder="Search For Shops">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15544.365706222074!2d80.26558384591443!3d13.093391954739959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526575eb1e7ded%3A0x26a4e497da59ef6b!2sSARADHA%20STORES(GROCERY%20STORE)!5e0!3m2!1sen!2sin!4v1648631369499!5m2!1sen!2sin" width="270" height="300" style="border:0;" allowfullscreen="" loading="lazy" ></iframe>
<div class="shopname">SARADHA STORES(GROCERY STORE)<br>
		<button>Ordernow</button>
		
		</div>
        
        
        
        
        
        
    </div>
    
    
    
    
    
    
    
</html>