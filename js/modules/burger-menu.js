export function burgerMenu() {
  (function(){
    "use strict";	
    console.log("fired");

    let button = document.querySelector("#button");
    let burgerCon = document.querySelector("#burger-con");
    let menuLinks = document.querySelectorAll("#burger-con a");  

    function hamburgerMenu() {
        burgerCon.classList.toggle("slide-toggle");
        button.classList.toggle("expanded");
    };

 
    function closemenu() {
        burgerCon.classList.remove("slide-toggle"); 
        button.classList.remove("expanded"); 
    }


    button.addEventListener("click", hamburgerMenu, false);	

   
    menuLinks.forEach(link => {
        link.addEventListener("click", closemenu, false);
    });
})();
}