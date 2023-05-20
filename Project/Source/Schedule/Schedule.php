<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <link rel="stylesheet" href="Schedule.css">
    
</head>
<body>
    <div id="schedule_container">
        <div id="day_name_head">
            <div id="day_name_container" class="schedule">
                <div>
                    <button id="bnt_create_schedule">create schedule</button>
                </div>
                <div id="su" class="day_name"><label for="">Sunday</label></div>
                <div id="mo" class="day_name"><label for="">Monday</label></div>
                <div id="tu" class="day_name"><label for="">Tuesday</label></div>
                <div id="we" class="day_name"><label for="">Wednesday</label></div>
                <div id="th" class="day_name"><label for="">Thursday</label></div>
                <div id="fr" class="day_name"><label for="">Friday</label></div>
                <div id="sa" class="day_name"><label for="">Saturday</label></div>
            </div>

            <div id="create_schedule_popup">
                <form action="">
                    <label for="input">Tên công việc:</label>
                    <input type="text">
                    <label for="input">Ngày:</label>
                    <select name="txt_get_date" id="txt_get_date"></select>
                    <label for="input" >Giờ bắt đầu:</label>
                    <div style="display: grid; 
                                grid-template-columns: 25% 25% 25% 25%;">
                        <select name="opt_start_hours" id="txt_get_start_h" class="hours"></select>
                        <label for="input " style="padding-left:5px ;">giờ</label>
                        <select name="opt_start_mins" id="txt_get_start_m" class="mins"></select>
                        <label for="input " style="padding-left:5px ;">phút</label>
                    </div>
                    <label for="input" >Giờ kết thúc:</label>
                    <div style="display: grid; 
                                grid-template-columns: 25% 25% 25% 25%;">
                        <select name="opt_end_hours" id="txt_get_end_h" class="hours"></select>
                        <label for="input " style="padding-left:5px ;">giờ</label>
                        <select name="opt_end_mins" id="txt_get_end_m" class="mins"></select>
                        <label for="input " style="padding-left:5px ;" >phút</label>
                    </div>
                    <label for="select" >Màu sắc:</label>
                    <div id="div_color_change">
                        <select name="" id="sel_task_color"></select>
                        <div id="div_show_color"></div>
                    </div>
                    <label for="input" >Nội dung:</label>
                    <textarea name="" id="txt_get_content" cols="30" rows="3"></textarea>
                </form>
                <button id="bnt_submit">Tạo</button>
                <button id="bnt_cancel">Hủy</button>
            </div>
        </div>

        <div id="day_content_container" class="schedule">
            <div id="time_name_container" class="day_content">
                
            </div>
            <div id="su_content" class="day_content">
                
            </div>
            <div id="mo_content" class="day_content">

            </div>
            <div id="tu_content" class="day_content">

            </div>
            <div id="we_content" class="day_content">

            </div>
            <div id="th_content" class="day_content">

            </div>
            <div id="fr_content" class="day_content">

            </div>
            <div id="sa_content" class="day_content">

            </div>
        </div>
        
    </div>
    <script src="Schedule.js"></script>
</body>
</html>
    <!-- <div id="create_sche_popup">
    <form action="">
        <label for="Tên công việc"></label>
        <input type="text" id="name">

    </form> -->
</div>