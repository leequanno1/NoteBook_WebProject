const button = document.querySelectorAll('button');
textField.document.designMode = "On";
for(let i = 0; i < button.length; i++){
    button[i].addEventListener('click', ()=>{
        let cmd = button[i].getAttribute('data-cmd');
        if(cmd === "createLink" || cmd === "insertImage"){
            let url = prompt("Enter link here: ", "");
            textField.document.execCommand(cmd,false,url);
            if(cmd === "insertImage"){
                const img = textField.document.querySelectorAll('img');
                img.forEach(element => {
                    element.style.maxWidth = "500px";
                });
            }
        }
        else{
            textField.document.execCommand(cmd, false, null);
        }
    })
}
console.log("Hello World");