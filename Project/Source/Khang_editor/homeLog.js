var d = 0;
var imgSlid = document.getElementsByClassName("imgSlid");
var imgs = [
    "https://thuthuatnhanh.com/wp-content/uploads/2021/11/hinh-anh-chill-phong-canh-buon-hoang-hon.jpg",
    "https://thuthuatnhanh.com/wp-content/uploads/2021/11/hinh-anh-chill-dep.jpg",
    "https://thuthuatnhanh.com/wp-content/uploads/2021/12/hinh-anh-Chill-sang-tao.jpg"
]

console.log(imgs.length)
changeImg();
function changeImg(){
    if(d >= imgs.length){
        d = 0;
    }
    imgSlid[0].style.backgroundImage = "url('"+ imgs[d] +"')";
    d++;
    console.log(d);
    setTimeout(changeImg, 2000);
}

