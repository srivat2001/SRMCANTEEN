const selected = document.querySelector(".selected");
var optionsContainer = '';
var searchBox = '';
var selid = '';
const optionsList = document.querySelectorAll(".option");

function openoptions(obj) {
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
        optionsContainer.classList.remove("active");
     }
    else{
       
        optionsContainer.classList.toggle("active");
  searchBox = document.getElementsByClassName("searchbox "+obj.id)[0];
  searchBox.value = "";
  filterList("");

  if (optionsContainer.classList.contains("active")) {
    searchBox.focus();
  }  
        
    }

}

optionsList.forEach(o => {
  o.addEventListener("click", () => {
      alert("df");
    document.getElementsByClassName("selected "+seldid)[0].innerHTML = o.querySelector("label").innerHTML;
    optionsContainer.classList.remove("active");
  });
});


function searchforval(obj){
    
   filterList(obj.value); 
    
}
const filterList = searchTerm => {
  searchTerm = searchTerm.toLowerCase();
  optionsList.forEach(option => {
    let label = option.firstElementChild.nextElementSibling.innerText.toLowerCase();
    if (label.indexOf(searchTerm) != -1) {
      option.style.display = "block";
    } else {
      option.style.display = "none";
    }
  });
};