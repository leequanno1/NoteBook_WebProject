var tendn = document.getElementById("username");
var pass = document.getElementById("password");
var btn_log = document.getElementsByClassName("btn_log");

tendn.addEventListener("change",()=>{
    if(tendn.value !="" && pass.value !=""){
        btn_log[0].removeAttribute('disabled');
    }
    else{
        btn_log[0].setAttribute('disabled');
    }
})

pass.addEventListener("change",()=>{
    if(pass.value !="" && tendn.value != ""){
        btn_log[0].removeAttribute('disabled');
    }
    else{
        btn_log[0].setAttribute('disabled');
    }
})