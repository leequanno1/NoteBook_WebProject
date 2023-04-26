var creNote_but = document.getElementsByClassName("icon");
var creNote_view = document.getElementsByClassName("creNote_view");
var exit = document.getElementsByClassName("creNote_exit");
var note_name = document.getElementsByClassName("note_name");


creNote_but[0].addEventListener("click",open_creNote_view);
exit[0].addEventListener("click",exit_creNote);

function open_creNote_view(){
    creNote_view[0].style.display = "block";
}

function exit_creNote(){
    creNote_view[0].style.display = "none";
}

function addEvent(){
    for(i=0;i<note_name.length();i++){
        note_name[i].addEventListener("click",openNote);
    }
}

function openNote(){
    //chuyen sang trang note;
}