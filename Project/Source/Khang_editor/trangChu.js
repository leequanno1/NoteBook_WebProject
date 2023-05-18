var creNote_but = document.getElementsByClassName("icon");
var creNote_view = document.getElementsByClassName("creNote_view");
var exit = document.getElementsByClassName("creNote_exit");
var btnHeader = document.getElementsByClassName("btnHeader");
var note_content = document.getElementById("note_content");
var lich_content = document.getElementById("lich_content");
var tkb_content = document.getElementById("tkb_content");
var note_name = document.getElementsByClassName("note_name");
var updateNote = document.getElementsByClassName("updateNote");
var delete_note = document.getElementsByClassName("delete");
var areyousure = document.getElementsByClassName("areyousure");
var yes = document.getElementsByClassName("yes");
var no = document.getElementsByClassName("no");
var delete_key;


yes[0].addEventListener("click", ()=>{
    window.location.href = "./delete.php?tennote=" + delete_key;
})

no[0].addEventListener("click",()=>{
    areyousure.style.display = "none";
})

for(i=0;i<note_name.length;i++){
    note_name[i].addEventListener("contextmenu", function(e){
        e.preventDefault();
        updateNote[0].style.display = 'inline-block';
        updateNote[0].style.left = e.clientX;
        updateNote[0].style.top = e.clientY;
    })
}

for(i=0;i<delete_note.length;i++){
    delete_note[i].addEventListener("click",e=>{
        delete_key = e.target.accessKey;
        areyousure[0].style.display = "block";
    })
}

creNote_but[0].addEventListener("click",()=>{
    creNote_view[0].style.display = "block";
});

exit[0].addEventListener("click",()=>{
    creNote_view[0].style.display = "none";
});

btnHeader[0].addEventListener("click", ()=>{
    note_content.style.display = "block";
    lich_content.style.display = "none";
    tkb_content.style.display = "none";
    
})

btnHeader[1].addEventListener("click", ()=>{
    note_content.style.display = "none";
    lich_content.style.display = "block";
    tkb_content.style.display = "none";
})

btnHeader[2].addEventListener("click", ()=>{
    note_content.style.display = "none";
    lich_content.style.display = "none";
    tkb_content.style.display = "block";
})

btnHeader[3].addEventListener("click", ()=>{
    window.location.href = "../Huy_code/loginView.php"
})
