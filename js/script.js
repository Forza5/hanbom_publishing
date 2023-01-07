
//메인
const bg = document.querySelector(".bg");
const cont2Text = document.querySelectorAll(".c2_context");
const textWrap = document.querySelector(".text_wrap");
const cont2Start = document.querySelector(".cont2").offsetHeight;

window.addEventListener("scroll",function(){
    let scrollMove =  window.scrollY;

    if(scrollMove >= cont2Start){
        for(let i=0; i<cont2Text.length;i++){
            cont2Text[i].classList.add("on");
        }
        textWrap.classList.add("on");
    }
    else {
        for(let i=0; i<cont2Text.length;i++){
            cont2Text[i].classList.remove("on");
        }
        textWrap.classList.remove("on");
    }
    
    if(scrollMove > 0){
        bg.style.opacity = "0";
    }
    else{
        bg.style.opacity = "1";
    }
});
