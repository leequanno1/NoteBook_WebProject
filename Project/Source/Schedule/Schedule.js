// declare
let day_name_head = document.getElementById("day_name_head");
let time_name_container = document.getElementById("time_name_container");
let day_content = document.querySelectorAll(".day_content");
let bnt_create_schedule = document.getElementById("bnt_create_schedule");
let create_schedule_popup = document.getElementById("create_schedule_popup");
let hours = document.querySelectorAll(".hours");
let mins = document.querySelectorAll(".mins");
let txt_get_date = document.getElementById("ngay");
let sel_task_color = document.getElementById("mau");
let div_show_color = document.getElementById("div_mau");
let bnt_cancel = document.getElementById("bnt_cancel");
let tasks = document.querySelectorAll(".task");
let pop_cancel = document.querySelectorAll(".pop_cancel");

const currentDate = new Date();
// function
function removeBoxFromDay(day_string,star,end){
    star = parseInt(star);
    end = parseInt(end);
    for(let i = star; i <= end; i++ ){
        if(document.getElementById(day_string+"_"+i) === null){
            continue;
        }else{
            document.getElementById(day_string+"_"+i).remove();
        }
    }
}

function haveExistTask(currunt_task_id){
    var date = returnDayFromId(currunt_task_id);
    var star = returnStartTime(currunt_task_id);
    var end = returnEndTime(currunt_task_id);
    var date_box = document.getElementById(date+'_content');
    var task = date_box.querySelectorAll('.task');
    var check = 0;
    task.forEach(element => {
        var e_start = returnStartTime(element.id);
        var e_end = returnEndTime(element.id);
        if((e_start < star && star < e_end)||(e_start < end && star < e_end)){
            check++;
        }
    });
    return check > 0? true : false;
}

function returnDayNumber(number){
    switch(number){
        case 'su':
            return 1;
        case 'mo':
            return 2;
        case 'tu':
            return 3;
        case 'we':
            return 4;
        case 'th':
            return 5;
        case 'fr':
            return 6;
        case 'sa':
            return 7;
    }
}

function returnDayString(number){
    switch(number){
        case 1:
            return "su";
        case 2:
            return 'mo';
        case 3:
            return 'tu';
        case 4:
            return 'we';
        case 5:
            return 'th';
        case 6:
            return 'fr';
        case 7:
            return 'sa';
    }
}

function returnFullDayString(number){
    switch(number){
        case 1:
            return "Chủ nhật";
        case 2:
            return 'Thứ hai';
        case 3:
            return 'Thứ ba';
        case 4:
            return 'Thứ tư';
        case 5:
            return 'Thứ năm';
        case 6:
            return 'Thứ sáu';
        case 7:
            return 'Thứ bảy';
    }
}

function returnColor(number){
    switch(number){
        case 1:
            return 'blueviolet';
        case 2:
            return 'brown';
        case 3:
            return 'cadetblue';
        case 4:
            return 'yellow';
        case 5:
            return 'red';
        case 6:
            return 'grey';
        case 7:
            return 'dodgerblue';
    }
}

function minuteToString(min){
    min = parseInt(min);
    if (min/10 >= 1){
        return min.toString();
    }
    return '0' + min.toString();
}

function convertMinute(min){
    min = parseInt(min);
    return Math.round(min/15);
}

function returnDayFromId(id){
    return id.substring(0, 2);
}

function returnStartTime(id){
    let firstIndex = id.indexOf("_");
    let secondIndex = id.indexOf("_", firstIndex + 1);
    let result = id.substring(firstIndex + 1, secondIndex);
    return parseFloat(result);
}

function returnEndTime(id){
    let firstIndex = id.indexOf("_");
    let secondIndex = id.indexOf("_", firstIndex + 1);
    let result = id.substring(secondIndex + 1);
    return parseFloat(result);
}

function returnTimeFloat(time){

}
// script
currentDateBox = document.getElementById(returnDayString(currentDate.getDay()+1));
currentDateBox.style.setProperty("background", "rgb(128 244 96)");

bnt_cancel.addEventListener("click",() => {
    create_schedule_popup.style.visibility = "hidden";
    console.log("hiden");
})

for(var i = 0; i < tasks.length; i++){
    tasks[i].addEventListener("click", e =>{
        let popup = document.getElementById(e.target.id+"_pop");
        
        popup.style.top = e.pageY + 'px';
        if(returnDayNumber(returnDayFromId(popup.id)) > 4){
            popup.style.left = (e.pageX - 300) + 'px';
        }else{
            popup.style.left = e.pageX + 'px';
        }

        popup.style.visibility = "visible";
        console.log(1)
    });
}

for(let i = 0; i < pop_cancel.length; i++){
    pop_cancel[i].addEventListener("click", e => {
        var pop_id = e.target.id.slice(0, -4)+"_pop";
        var popup = document.getElementById(pop_id);
        popup.style.top = "0px";
        popup.style.left = "0px";
        popup.style.visibility = "hidden";
        console.log("hidden ok");
    })
}

bnt_create_schedule.addEventListener('click', ()=>{
    create_schedule_popup.style.setProperty('visibility','visible');
});

// popup
for(var i = 0; i < 2; i++){
    for(var j = 0; j < 24; j++){
        var hour_opt = document.createElement("option");
        hour_opt.value = j;
        hour_opt.text = j+" giờ";
        hours[i].appendChild(hour_opt);
    }
    for(var k = 0; k < 60; k++){
        var min_opt = document.createElement("option");
        min_opt.value = k;
        min_opt.text = k+" phút";
        mins[i].appendChild(min_opt);
    }
}

for(var i = 1; i <= 7; i++){
    var day_opt = document.createElement("option");
    day_opt.value = returnDayString(i);
    day_opt.text = returnFullDayString(i);
    txt_get_date.appendChild(day_opt);
}

for(var i = 1; i < 8; i++){
    let opt_color = document.createElement('option');
    opt_color.value = returnColor(i);
    opt_color.text = returnColor(i);
    sel_task_color.appendChild(opt_color);
}

div_show_color.style.setProperty('background', returnColor(1));

sel_task_color.addEventListener("change", ()=>{
    div_show_color.style.setProperty('background', sel_task_color.value);
})