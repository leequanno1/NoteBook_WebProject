const pass1Element =document.querySelector('#pass1');
const btnPElement =document.querySelector('#btnPass');
const pass2Element =document.querySelector('#pass2');
const btnRpElement =document.querySelector('#btnRePass');
var tendn = document.getElementById("username");
var email = document.getElementById("email");
var pass = document.getElementById("pass1");
var repass = document.getElementById("pass2");
var tendn_ero = document.getElementsByClassName("tendn_ero");
var email_ero = document.getElementsByClassName("email_ero");
var pass_ero = document.getElementsByClassName("pass_ero");
var repass_ero = document.getElementsByClassName("repass_ero");
var btn_reg = document.getElementsByClassName("btn_reg");
console.log(email.value);
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
function checkEmail(s){
    let atCount=0,dotCount=0
    let atIndex,dotIndex
    for(i=0;i<s.length;++i){
        if(s.charAt(i)=='@'){
            ++atCount;
            atIndex=i;
        }
        else if(s.charAt(i)=='.'){
            ++dotCount;
            dotIndex=i;
        }
    }
    if(atCount!=1 || dotCount!=1) return false
    let x,y,z
    x=s.substring(0,atIndex)
    y=s.substring(atIndex+1,dotIndex)
    z=s.substring(dotIndex+1)
    return (x.length>=1 && y.length>=1&&z.length>=1)
}
tendn.addEventListener("change",()=>{
    text = tendn.value;
    if(text.length >= 8 && text.length <=20){
        tendn_ero[0].style.display = "none";
        if(checkEmail(email.value) && pass.value.length >= 8 && pass.value.length <=20 && repass.value == pass.value){
            btn_reg[0].removeAttribute('disabled');
        }
    }
    else{
        tendn_ero[0].style.display = "block";
    }
})
email.addEventListener('change',(e)=>{
    if(checkEmail(e.target.value)){
        email_ero[0].style.display='none'
    }
    else{
        email_ero[0].style.display='block'
    }
})
// email.addEventListener("change",()=>{
//     text = email.value;
//     if(text.length != ""){
//         email_ero[0].style.display = "none";
//         if(tendn.value.length >= 8 && tendn.value.length <=20 && pass.value.length >= 8 && pass.value.length <=20 && repass.value == pass.value){
//             btn_reg[0].removeAttribute('disabled');
//         }
//     }
//     else{
//         email_ero[0].style.display = "block";
//     }
// })

pass.addEventListener("change",()=>{
    text = pass.value;
    if(text.length >= 8 && text.length <=20){
        pass_ero[0].style.display = "none";
        if(tendn.value.length >= 8 && tendn.value.length <=20 && checkEmail(email.value) && repass.value == pass.value){
            btn_reg[0].removeAttribute('disabled');
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
        if(tendn.value.length >= 8 && tendn.value.length <=20 && checkEmail(email.value) && pass.value.length >= 8 && pass.value.length <=20){
            btn_reg[0].removeAttribute('disabled');
        }
    }
    else{
        repass_ero[0].style.display = "block";
    }
})
