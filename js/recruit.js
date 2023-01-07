const btopMenu = document.querySelectorAll(".bcontext_topmenu > li");
const tabMenu = document.querySelectorAll(".tab");

for(let i = 0; i < btopMenu.length; i++){
    btopMenu[i].addEventListener("click",function(e){
        e.preventDefault();
        for(let j = 0; j < btopMenu.length; j++){
            btopMenu[j].style.background = "#000";
            btopMenu[j].querySelector("a").style.color = "#bbb";

            tabMenu[j].style.display = "none";
        }
        btopMenu[i].style.background = "#ffde00";
        btopMenu[i].querySelector("a").style.color = "#000";
        tabMenu[i].style.display = "flex";
        
    });
}