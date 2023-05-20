const pass1Element =document.querySelector('#pass1');
const btnPElement =document.querySelector('#btnPass');
const pass2Element =document.querySelector('#pass2');
const btnRpElement =document.querySelector('#btnRePass');
var tendn = document.getElementById("username");
var pass = document.getElementById("pass1");
var repass = document.getElementById("pass2");
var btn_for = document.getElementsByClassName("btn_for");
var pass_ero = document.getElementsByClassName("pass_ero");
var repass_ero = document.getElementsByClassName("repass_ero");

btnPElement.addEventListener('click', function() {
    const currentType = pass1Element.getAttribute('type');
    pass1Element.setAttribute(
        'type',
        currentType === 'password' ? 'text' : 'password'
    )
})

btnRpElement.addEventListener('click', function() {
    const currentType = pass2Element.getAttribute('type');
    pass2Element.setAttribute(
        'type',
        currentType === 'password' ? 'text' : 'password'
    )
})

tendn.addEventListener("change",()=>{
    if(tendn.value !="" && pass.value.length >= 8 && pass.value.length <=20 && repass.value == pass.value){
        btn_for[0].removeAttribute('disabled');
    }
})

pass.addEventListener("change",()=>{
    text = pass.value;
    if(text.length >= 8 && text.length <=20){
        pass_ero[0].style.display = "none";
        if(tendn.value !="" && repass.value == pass.value){
            btn_for[0].removeAttribute('disabled');
        }
    }
    else{
        pass_ero[0].style.display = "block";
    }
})

repass.addEventListener("change",()=>{
    text = repass.value;
    if(text == pass.value){
        repass_ero[0].style.display = "none";
        if(tendn.value !="" && pass.value.length >= 8 && pass.value.length <=20){
            btn_for[0].removeAttribute('disabled');
        }
    }
    else{
        repass_ero[0].style.display = "block";
    }
})
