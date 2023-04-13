document.querySelector('#submitBtn').addEventListener('click', function() {
    
    // Lấy nội dung từ trình soạn thảo CKEditor 5
    var content = myEditor.getData();
    
    // Gửi nội dung bằng Ajax đến API để lưu vào cơ sở dữ liệu SQL
    var xhr = new XMLHttpRequest();
    xhr.open('POST', './upload.php');
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onload = function() {
        if (xhr.status === 200) {
            console.log('Nội dung đã được lưu vào cơ sở dữ liệu.');
        } else {
            console.log('Đã xảy ra lỗi khi lưu vào cơ sở dữ liệu.');
        }
    };
    xhr.send(JSON.stringify(content));
    alert(content)
});