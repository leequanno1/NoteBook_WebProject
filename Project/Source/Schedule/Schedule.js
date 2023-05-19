// declare
let time_name_container = document.getElementById("time_name_container");
let day_content = document.querySelectorAll(".day_content");
let bnt_create_schedule = document.getElementById("bnt_create_schedule");
let create_schedule_popup = document.getElementById("create_schedule_popup");


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

function convertMinute(min){
    min = parseInt(min);
    return parseInt(min/15);
}

// script
for(let i = 0; i < 24; i++){
    let time = document.createElement("label");
    time.innerHTML = i;
    time.style.setProperty("grid-row-start",i*4+1);
    time.style.setProperty("grid-row-end",i*4+5);
    time.style.setProperty("text-align","right");
    time.style.setProperty("padding-right","25px");
    time.style.setProperty("margin-left","70%");
    time.style.setProperty("border-top","1px solid");
    time.style.setProperty("border-bottom","1px solid");
    time.style.setProperty("background","white");
    time_name_container.appendChild(time);
}

for(let i = 1; i < 8; i++){
    for(let j = 0; j < 24; j++){
        var hour_box = document.createElement("div");
        hour_box.setAttribute("id", returnDayString(i)+"_"+j);
        hour_box.style.setProperty("grid-row-start",j*4+1);
        hour_box.style.setProperty("grid-row-end",j*4+5);
        hour_box.style.setProperty("border-top","1px solid");
        hour_box.style.setProperty("border-bottom","1px solid");
        hour_box.style.setProperty("background","white");
        // if(j===23){
        //     hour_box.style.setProperty("border-botton","1px solid");
        // }
        day_content[i].appendChild(hour_box);
    }
}

bnt_create_schedule.addEventListener('click', ()=>{
    create_schedule_popup.style.setProperty('visibility','visible');
});

document.getElementById("bnt_cancel").addEventListener("click", ()=> {
    create_schedule_popup.style.setProperty('visibility','hidden');
});

document.getElementById("bnt_submit").addEventListener("click", ()=> {
    create_schedule_popup.style.setProperty('visibility','hidden');
    let txt_get_date_value = document.getElementById('txt_get_date').value;
    let txt_get_start_h_value = document.getElementById('txt_get_start_h').value;
    let txt_get_start_m_value = document.getElementById('txt_get_start_m').value;
    let txt_get_end_h_value = document.getElementById('txt_get_end_h').value;
    let txt_get_end_m_value = document.getElementById('txt_get_end_m').value;
    let txt_get_content_value = document.getElementById('txt_get_content').value;
    var task_box =  document.createElement("div");
    task_box.style.setProperty('grid-row-start',(parseInt(txt_get_start_h_value)*4+convertMinute(txt_get_start_m_value)+1).toString());
    task_box.style.setProperty('grid-row-end',(parseInt(txt_get_end_h_value)*4+convertMinute(txt_get_end_m_value)+1).toString());

    task_box.id = txt_get_date_value+'_'+txt_get_start_h_value+'.'+txt_get_start_m_value+'_'+txt_get_end_h_value+'.'+txt_get_end_m_value;
    task_box.className = "task";
    task_box.innerHTML = txt_get_content_value;
    var day_box = document.getElementById(txt_get_date_value+'_content');
    day_box.appendChild(task_box);
    removeBoxFromDay(txt_get_date_value,txt_get_start_h_value,txt_get_end_h_value);
});