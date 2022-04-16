<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Select2 CSS --> 
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" /> 
<link rel="stylesheet" href="css/order-option-ss.css" />
    <link rel="stylesheet" href="css/styless.css" />
<!-- jQuery --> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 

<!-- Select2 JS --> 
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<style>

    
    .theswitch{
        
        width: 35px;
        border: 5px;
        border-radius: 10px;
        margin-left: 50px;
        height: 20px;
        background-color: #FFFFFF;
    }
    .toogle{
        
        
        height:17px;
        width: 17px;
        padding: 2px;
        background-color: black;
        border-radius: 50%;
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  body{
        margin: 0px;
        padding: 0px;
          align-items: center;
  display: flex;
  justify-content: center;
  height: 100%;
  width: 100%;
         background-color: #ff96f8;
    }    
    .loginform{
       background-color: white;
       width:350px;
padding-top: 5px;
        padding-bottom: 20px;
        border-radius: 20px;
        box-shadow: 20px 20px black;
        font-family: "segoe ui";
        color: #525252;
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
  width: 100px;
  height: 30px;
    margin: 0px;
    margin-left: 1rem;
  font-family: 'Roboto', sans-serif;
  font-size: 11px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 500;
  color: #000;
  background-color: #fff;
  border: none;
  border-radius: 5px;
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
    button{
        
        margin: 0px;
    }
    .cusno{
        
        margin: 1rem;
    }
    .logo{
        position: relative;
        top:5px;
        margin-left: auto;
        margin-right: 20px;
    }
    :root {
  --background-gradient: linear-gradient(30deg, #f39c12 30%, #f1c40f);

 
}


/* Remove IE arrow */
select::-ms-expand {
  display: none;
}
/* Custom Select wrapper */
.select {
  position: relative;
  display: flex;
  width: 15em;
  height: 3em;

  

  overflow: hidden;
}
/* Arrow */
.select::after {
  content: '\25BC';

  border-bottom-right-radius: 10px;  
  padding: 1em;
   border-bottom: 1px solid  #bdbdbd;
  transition: .25s all ease;
  pointer-events: none;
}
/* Transition */
.select:hover::after {
  color: #f39c12;
}

/* Other styles*/
body {
 
  background: #ff9c9c;
}
h1 {
  margin: 0 0 0.25em;
}
a {
  font-weight: bold;
  color: var(--gray);
  text-decoration: none;
  padding: .25em;
  border-radius: .25em;
  background: white;
}
    .selectcontainer{
        
        margin: 1rem;
        display: flex;
    }
    #time{
        
        
    
        
    }
    .downdetails{
            padding-left: 15px;

        font-size: 13px;
        display: flex;
        
    }
    .note{
        
        margin-left: auto;
        padding-right: 20px;
        font-size: 11px;
    }
    .xclose{
        
       
        position: relative;
        top: 3;
        left:13;
          border-radius: 50%;
        font-size: 15px;
   
        font-weight: 400;
    }
        .xclose:hover{
        background-color: azure;
            border-radius: 50%;
       color: red;
cursor: pointer;
    }
    #additem{
        
        margin-left: 1rem;
        margin-bottom: 1rem;
    }
    .rate{
        
        
        position: relative;
        top:3;
        left:8;
        font-size: 15px;
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
    <style>
.switch {
margin-left: 20px;
    margin-top: 10px;
  position: relative;
  display: inline-block;

  height: 30px;

}

.switch input { 
  opacity: 100;
  width: 20;
  height:20;
   
}
.switch input:checked+.vegonly {
 font-size: 36px;
}
        .switichcontainer{
display: flex;
              transition: all 0.4s;
            background-color: #2F3640;
            position: sticky;
            top: 0;
            left: 300;
            opacity: 1;
       
          
       
          
        }
        .vegonly{
            
        transition: all 0.4s;
            width: 220px;
            text-align: left;
            padding-left: 5px;
            padding-right: 8px;
            padding-top: 14px;
            font-size: 13px;
                color: white;
       
            
            
        }
        .rate{
            margin-left: auto;
            
            
        }
        .rateshow{
            
            margin-left: auto;
            padding-right: 2px;
        }
</style>
</head>
<body>
    <div class="loginform">
            
              <form type="post" enctype="multipart/form-data">
         <div style="display:flex;">
     
    <h6 class="cusno"> Hi, 19205107 <br>
        What You would Link to order?</h6>  <img class="logo" src="onlylogo.png" width="60px" height="50px"> </div>
                  
                  
        <div class="biryani">Biryani</div>
                  
                  
                  
                  <div id="orderlistcontainer">
 
 </div>

        
        </form>
          <button id="additem" onclick="additems()" class="button">add item</button>
       <div class="downdetails"> <div id="time">12:30</div><div class="note">Order Intake Closes in 12:30PM</div></div>       
        
        
    </div>  

<script>
    function sleep(milliseconds) {
    return new Promise(resolve => setTimeout(resolve, milliseconds));
}
var cloneCount = 1;
    
$(document).ready(async function() {
    var div = document.createElement("div");
    var theid ='itemnum' + cloneCount.toString();
    cloneCount = cloneCount + 1;
           $.post("test1.php",{
           elntid : theid
       },function(data,status){
           
          div.innerHTML = data;
           
       })

    document.getElementById("orderlistcontainer").appendChild(div);
    await sleep(100);


});
    



$(document).on("wheel", "input[type=number]", function (e) {
    $(this).blur();
});

        
        


    async function additems() {
    var div = document.createElement("div");
    var theid ='itemnum' + cloneCount.toString();
    cloneCount = cloneCount + 1;
           $.post("test1.php",{
           elntid : theid
       },function(data,status){
           
          div.innerHTML = data;
           
       })

    document.getElementById("orderlistcontainer").appendChild(div);
    await sleep(100);
  
}
        </script>   
    
  
    
    
    
   <script>
    
    function vegview(obj) {
  // Get the checkbox
  var checkBox = document.getElementsByClassName("vegCheck "+obj.id)[0];
  // Get the output text


  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
      
      
      document.getElementsByClassName("switichcontainer "+obj.id)[0].style.backgroundColor ="#04d400";
      document.getElementsByClassName("switichcontainer "+obj.id)[0].style.color ="black";
      document.getElementsByClassName("options-container "+obj.id)[0].style.color ="black";
      document.getElementsByClassName("options-container "+obj.id)[0].style.backgroundColor ="#04d400";
      document.getElementsByClassName("vegonly "+obj.id)[0].style.color ="black";
  } else {
    document.getElementsByClassName("options-container "+obj.id)[0].style.backgroundColor ="#2f3640";
      document.getElementsByClassName("switichcontainer "+obj.id)[0].style.backgroundColor ="#2f3640";
      document.getElementsByClassName("options-container "+obj.id)[0].style.color ="white";
      document.getElementsByClassName("vegonly "+obj.id)[0].style.color ="white";
  }
} 
    
    
    
    
    </script> 
    
    
    
    
    
    
  <script>
      
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    // add a zero in front of numbers<10
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
    t = setTimeout(function() {
        startTime()
    }, 500);
}
startTime();         
</script>  
<script>
        
     function removeelement(obj){
           

          var elem = document.getElementsByClassName("selectcontainer "+obj.id)[0];
            elem.parentNode.removeChild(elem);
         
     }   
        
        
        
        
        </script>    
    
    
    
    
    
    <script>
                      function searchoption(obj){
                        
            var inputval = document.getElementsByClassName("searchbox "+obj.id)[0].value.toUpperCase();
            var  opnlist = document.getElementsByClassName("option "+obj.id);
               for (i = 0; i < opnlist.length; i++) {
                 var txtValue =   opnlist[i].textContent.toUpperCase();
                      if (txtValue.toUpperCase().indexOf(inputval) > -1) {
            opnlist[i].style.display = "";
        } else {
            opnlist[i].style.display = "none";
        }
              
          } 
          
          
          }
        function highlightopn(obj){
            
            
        
        }
            </script> 
        
        
        
        
        
      <script>
        function selectoption(obj){
            var oldinp =  document.getElementsByClassName("selected "+obj.id)[0].textContent;
            document.getElementsByClassName("search-box "+obj.id)[0].style.display = "none";   
            var spcl = obj.classList[2];

            var inpt = document.getElementsByClassName("itemname1 "+obj.id+" "+obj.classList[2])[0].innerHTML;
            var rateofselect =  document.getElementsByClassName("rate "+obj.id+" "+obj.classList[2])[0].innerHTML;     
      
            document.getElementsByClassName("selected "+obj.id)[0].textContent = inpt;
             if(document.getElementsByClassName("quantity "+obj.id).length>0){
          document.getElementsByClassName("quantity "+obj.id)[0].style.display = "block";      
           
       }
            document.getElementsByClassName("options-container "+obj.id)[0].classList.remove("active");
            var quantityexits = document.getElementsByClassName('quantity '+obj.id);
            if (quantityexits.length > 0) {
          document.getElementsByClassName("rateshow "+obj.id)[0].innerHTML = rateofselect;
                
            if(oldinp ==inpt ){
               
               
               
               }
                else{
                document.getElementsByClassName("noofproduct "+obj.id)[0].value = 1;
                
                }
                  
           }else{
                           var rs = document.getElementsByClassName("itemname1 "+obj.id)[0].innerHTML;
                           var total1 =  '<div style="display:flex"><div class="quantity '+obj.id+'"><button name="product1" id="'+obj.id+'" onclick="addnum(this)" class="plus-btn" type="button"><img src="plus.svg" alt=""></button><input type="number" onkeyup="loadDoc()" id="product1" class="noofproduct '+obj.id+'" name="product1" value="1"><button name="product1" id="'+obj.id+'" onclick="minusnum(this)"  class="minus-btn" type="button"> <img src="minus.svg" alt=""> </button></div><div class="rateshow '+obj.id+'" >'+rateofselect+'</div></div>';
                
            document.getElementsByClassName("select-box "+obj.id)[0].innerHTML =  document.getElementsByClassName("select-box "+obj.id)[0].innerHTML + total1 ;
            
            }

            
        }
        
        
        
        
        
        
        </script>
    
    
    
    
    
    <script>
                   
             $('.minus-btn').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val());

    if (value > 1) {
        value = value - 1;
    } else {
        value = 0;
    }

    $input.val(value);

});

$('.plus-btn').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val());

    if (value < 100) {
        value = value + 1;
    } else {
        value = 100;
    }

    $input.val(value);
});

$('.like-btn').on('click', function() {
    $(this).toggleClass('is-active');
});

             </script> 
        
        
        
        
        
        
        
    <script>
        function addnum(obj){
            no = document.getElementsByClassName("noofproduct "+obj.id)[0].value;
            no = parseInt(no);
            if(no<20){
              no = no + 1 ;
              document.getElementsByClassName("noofproduct "+obj.id)[0].value = no.toString();
            
        }
        else{
            alert("No More than 20")
           no = 20; 
           document.getElementsByClassName("noofproduct "+obj.id)[0].value = no.toString(); 
            
        }
        }
        function minusnum(obj){
               no = document.getElementsByClassName("noofproduct "+obj.id)[0].value;
            no = parseInt(no);
            if(no>1){
              no = no - 1 ;
              document.getElementsByClassName("noofproduct "+obj.id)[0].value = no.toString();
            
        }
        else{
           no = 1; 
           document.getElementsByClassName("noofproduct "+obj.id)[0].value = no.toString(); 
            
        }
        }
        
        
        
        
        
        </script>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
        <script>
var selected = document.querySelector(".selected");
var optionsContainer = '';
var searchBox = '';
var selid = '';
const optionsList = document.querySelectorAll(".option");

function openoptions(obj) {
      selected = document.querySelector(".selected");
      seldid = obj.id;
      optionsContainer = document.getElementsByClassName("options-container "+obj.id)[0];
   
    allopncontainer = document.getElementsByClassName("options-container");
  
    for(var i = 0; i < allopncontainer.length; i++)
        
{   
    if(obj.id != allopncontainer[i].id ){
   
  allopncontainer[i].classList.remove("active");
}
}
   
 if(optionsContainer.classList.contains("active")) 
     {   
         document.getElementsByClassName("search-box "+obj.id)[0].style.display = "none";     
         searchBox.value = "";
         if(document.getElementsByClassName("quantity "+obj.id).length>0){
          document.getElementsByClassName("quantity "+obj.id)[0].style.display = "block";      
           
       }
        optionsContainer.classList.remove("active");
     }
    else{
        document.getElementsByClassName("search-box "+obj.id)[0].style.display = "block";  
       if(document.getElementsByClassName("quantity "+obj.id).length>0){
          document.getElementsByClassName("quantity "+obj.id)[0].style.display = "none";      
           
       }
        optionsContainer.classList.toggle("active");
  searchBox = document.getElementsByClassName("searchbox "+obj.id)[0];
  searchBox.value = "";
 
  
  if (optionsContainer.classList.contains("active")) {
    searchBox.focus();
  }  
        
    }

}



            
        </script>
        
        
</body>
    
    
    
    
    
    
    
</html>