var today=new Date()
//header month&year
var monthAndYear=document.querySelector('.monthAndYear')
var thisMonth=['January','Febuary','March','April','May','June','July','August','September','October','November','December']
var month=today.getMonth()
var year=today.getFullYear()

monthAndYear.value=thisMonth[month]+ " "+year

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

   //add inactive dates of next month
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
    monthAndYear.value=thisMonth[month]+ " "+year
})
nextIcon.addEventListener('click',()=>{
    month=month+1
    if(month==12){
        month=0;
        year+=1;
    }
    renderCalendar()
    monthAndYear.value=thisMonth[month]+ " "+year
})

//change date and year input onchange
var obj=document.querySelector('.monthAndYear')
function warning(){
    swal('Cảnh báo:','Thời gian không chính xác, vui lòng nhập lại!')
}
obj.addEventListener('change',(e)=>{
    tmp=e.target.value
    mNy=tmp.split(" ")
    let m=mNy[0],y=mNy[1]
    tmp=""
    for(i=0;i<m.length;++i){
        if(i==0) tmp+=m[i].toUpperCase()
        else tmp+=m[i].toLowerCase()
    }
    m=tmp;
    var check=false
    // //neu onchange dung thi doi, con ko thi alert va tro lai nhu cu
    for(i=0;i<thisMonth.length;++i){
        if(m==thisMonth[i]){
            month=i;
            check=true;
            break;
        }
    }
    if(y>=1900 && y<=2050){
        year=y;
    } else check=false;
    if(check){
        monthAndYear.value=thisMonth[month]+' '+year
        renderCalendar()
    }else{
        // alert('Tháng hoặc năm vừa nhập không chính xác, vui lòng nhập lại!')
        warning() //sweet alert
        monthAndYear.value=thisMonth[month]+' '+year
        renderCalendar()
    }
})
//chon ngay muon den bang thao tac click
var x=document.querySelectorAll('.dateOfMonth li')
for(i=0;i<x.length;++i){
    x[i].addEventListener('click',(e)=>{
        console.log(e.target.innerText)
    })
}

