var creNote_but = document.getElementsByClassName("icon");
var creNote_view = document.getElementsByClassName("creNote_view");
var exit = document.getElementsByClassName("creNote_exit");
var note_name = document.getElementsByClassName("note_name");
var btnHeader = document.getElementsByClassName("btnHeader");
var note_content = document.getElementById("note_content");
var lich_content = document.getElementById("lich_content");
var tkb_content = document.getElementById("tkb_content");

creNote_but[0].addEventListener("click",open_creNote_view);
exit[0].addEventListener("click",exit_creNote);
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

function open_creNote_view(){
    creNote_view[0].style.display = "block";
}

function exit_creNote(){
    creNote_view[0].style.display = "none";
}