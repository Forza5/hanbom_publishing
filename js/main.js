
const rhideMenu = document.querySelector(".hide_menu");
const welMenu = document.querySelector(".welcome");
const scrollChg = document.querySelector("#scroll_chg");
rhideMenu.addEventListener("click",function(){
    rhideMenu.classList.toggle("active");
    welMenu.classList.toggle("active");
    scrollChg.classList.toggle("none");
});

const hideMenu = document.querySelectorAll(".hide_menu .w_line");
const brochure = document.querySelector(".brochure");
const hLogo = document.querySelector(".logo");

window.addEventListener("scroll",function(){
    let scrollMove = window.scrollY;

    hideMenu.forEach(function(item,index){
        if(scrollMove > 0){
            item.style.background = "#000";
        }
        else{
            item.style.background = "#fff";
        }
    });

    if(scrollMove > 0){
        brochure.classList.add("black");
        hLogo.classList.add("dis");
    }
    else{
        brochure.classList.remove("black");
        hLogo.classList.remove("dis");
    }
});

//wow api
new WOW().init(); 