const contact = document.querySelector("#contact");
const userName = document.querySelector("#userName");
const userPhone = document.querySelector("#userPhone");
const userMail = document.querySelector("#userMail");
const userContext = document.querySelector("#userContext");

let allValid = {
    namevalid:false,
    phonevalid:false,
    mailvalid:false,
    contextvalid:false
}

contact.addEventListener("submit",function(e){

    const nameValue = userName.value;
    const phoneValue = userPhone.value;
    const mailValue = userMail.value;
    const contextValue = userContext.value;

    const checkName = /^[ㄱ-힣]{2,6}$/;
    const checkPhone = /^(010)\-\d{4}\-\d{4}$/;
    const checkMail = /^[\w]+\@[a-z]+\.[a-z\.]{2,5}$/;
    const checkContext = /^\w{10,500}$/;

    //이름체크
    if(conCheck(checkName,nameValue)){
        allValid.namevalid = true;
    }
    else{
        falseFor(userName,"2~6자리의 한글만 입력가능합니다.");
        allValid.namevalid = false;
    }

    //연락처체크
    if(conCheck(checkPhone,phoneValue)){
        allValid.phonevalid = true;
    }
    else{
        falseFor(userPhone,"연락처 형식에 맞지않습니다.");
        allValid.phonevalid = false;
    }

    //이메일체크
    if(conCheck(checkMail,mailValue)){
        allValid.mailvalid = true;
    }
    else{
        falseFor(userMail,"메일 형식에 맞지않습니다.");
        allValid.mailvalid = false;
    }

    // //내용체크
    if(conCheck(checkContext,contextValue)){
        allValid.contextvalid = true;
    }
    else{
        falseFor(userContext,"내용을 입력해주세요");
        allValid.contextvalid = false;
    }
 
    //입력안되면 false
    //변수설정
    let finalCheck = contactCheck();

     if(finalCheck){
        contact.submit();
    }
    else{
        e.preventDefault();
        alert("모든 입력칸에 입력바랍니다.");
    }
});

//error일때
function falseFor(contus,message){
    contus.parentElement.className = "contact_about error";
    contus.parentElement.querySelector(".error_msg").innerHTML = message;
}

function conCheck(cont,allValue){
    let result = cont.test(allValue);
    return result;
}

function contactCheck(){
    let allCheck = true;

    for(let item in allValid){
        if(allValid[item] == false){
            allCheck = false;
        }
    }
    return allCheck;
}