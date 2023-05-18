var today=new Date()
//header month&year
var monthAndYear=document.querySelector('.monthAndYear')
var thisMonth=['January','Febuary','March','April','May','June','July','August','September','October','November','December']
var month=today.getMonth()
var year=today.getFullYear()

monthAndYear.innerText=thisMonth[month]+ " "+year

//next & prev icon
var prevIcon=document.querySelector('.prevIcon')
var nextIcon=document.querySelector('.nextIcon')


//date of month
function renderCalendar(){
var dateOfMonth=document.querySelector('.dateOfMonth')
var string=''
var lastDateOfMonth=new Date(year,month+1,0).getDate()
    //add inactive day of prev month
var firstDayofMonth=new Date(year,month,1).getDay()
var lastDateOfLastMonth=new Date(year,month,0).getDate()
for(i=0;i<firstDayofMonth;++i){
    string+=`<li class=inactive>${lastDateOfLastMonth-firstDayofMonth+(i+1)}</li>`
}
    //add active dates of month
for(i=1;i<=lastDateOfMonth;++i){
    if(i==today.getDate() && month==today.getMonth()&& year==today.getFullYear()) {
        string+=`<li class="today">${i}</li>`
    }
    else string+=`<li>${i}</li>`
}

//     //add inactive dates of next month
var firstDayOfNextMonth=new Date(year,month+1,1).getDay()
var firstDateOfNextMonth=new Date(year,month+1,1).getDate()
for(i=firstDayOfNextMonth;i<7;++i){
    string+=`<li class="inactive">${firstDateOfNextMonth++}</li>`
}
dateOfMonth.innerHTML=string
}
renderCalendar()
//event nut prev & next
prevIcon.addEventListener('click',()=>{
    month=month-1
    if(month==-1){
        month=11;
        year-=1;
    }
    renderCalendar()
    monthAndYear.innerText=thisMonth[month]+ " "+year
})
nextIcon.addEventListener('click',()=>{
    month=month+1
    if(month==12){
        month=0;
        year+=1;
    }
    renderCalendar()
    monthAndYear.innerText=thisMonth[month]+ " "+year
})

