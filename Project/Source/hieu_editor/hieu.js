<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nutClick.css">
    <title>Document</title>
</head>
<body>

    <div id="container">
        <button id="click"><h1 id="icon">+</h1></button>     
    </div>

    <div id="tb1">
        <p id = "name">Tên</p>
        <input id="box" type="text"></input>

        <div id="tb2"> </div>

        <div id="tb3">
            <input id="box1" type="submit" value="Tạo"></input>
            <input id="box2" type="submit" value="Thoát"></input>
        </div>
        <script src="show&hide.js"></script>    
    </div>
</body>
</html>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

#click{
    width:35px;
    height:35px;
    border-radius: 50%;
    background-color: blue;
}
#tb1{
    width:300px;
    height:300px;
    margin-left:auto;
    margin-right:auto;
    border: 2px solid;
    background-color: blue;
    display: none;
}
#tb2{
    width: 200px;
    height: 200px;
    margin-top: 35px;
    margin-left:auto;
    margin-right:auto;
    border: 2px solid;
    background-color: white;
}
#box{
    display:inline-block;
}
#name{
    display:inline-block;
    margin-left: 35px;
}
#tb3{
    display: inline-block;
}
#box1{
    margin-top: 10px;
    margin-left: 50px;
    display: inline-block;
}
#box2{
    display: inline-block;
    margin-left: 127px; 
}
#box,.tb2,.box1,.box2{
    background-color: azure;
}
// Get references to the DOM elements
const btnClick = document.getElementById('icon');
const myDiv = document.getElementById('tb1');
const mysubmit = document.getElementById('box2');

// Add event listener to the button
btnClick.addEventListener('click', function() {
  // Toggle the visibility of the div
    myDiv.style.display = 'block';
});
// Add event listener to the submit
mysubmit.addEventListener('click', function() {
    // Toggle the visibility of the div
      myDiv.style.display = 'none';
});
