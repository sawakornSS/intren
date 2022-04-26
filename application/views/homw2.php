<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <!-- goolge -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
    <title>Hello, world!</title>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <div class="content">
        <nav class="navbar navbar-expand navbar-light flex-column flex-md-row">
        <a class="navbar-brand font-name" href="#"> <span class="font-color">My</span>profile </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto mx-auto navbar-pd">
            <li class="nav-item active pr-5">
                <a class="nav-link" href="show_home2">Home <span class="sr-only">(current)</span></a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li> -->
            <li class="nav-item pl-4">
                <a class="nav-link" href="show_about">About Me</a>
            </li>
            </ul>
            <button type="button" onclick="changecolor(this)" value="#FCAA29" class="btn btn-color btn-circle btn-sm ml-1 mr-1"></button>
            <button type="button" onclick="changecolor(this)" value="#3617F2" class="btn btn-bu btn-circle btn-sm ml-1 mr-1"></button>
            <button type="button" onclick="changecolor(this)" value="#E91724" class="btn btn-re btn-circle btn-sm ml-1 mr-1"></button>
            <!-- <span class="navbar-text">
            Navbar text with an inline element
            </span> -->
        </div>
        </nav>

        <div class="container-fluid p-0 m-0">
            <div class="row mt-5 overflow">
                <div class="col-8 col-sm-6">
                    <div class="content-left">
                    <p class="font m-1">My name’s</p>
                    <p class="font name-color">Sawakorn Silapawanont<span>.</span></p>
                    <p class="m-0">Currently, I am an intern at the C.S.I organization, </p>
                    <p>If you'd want to learn more about me, Click the button <a href="show_about"><span class="font-color">About Me.</span></a></p>
                    <div class="row row-btn">
                        <div class="col2 mr-4 mb-3">
                          
                                <button type="button" onclick="about_page()" class="btn btn-og btn-text mr-4">About Me</button>
                                <a href="https://th.linkedin.com/" target="_blank">
                                    <img src="http://localhost/intren/asset/image/logo_01.png"  style="width: 7%;border-radius: 30%;box-shadow: 0px 3px 3px #bebebe;" alt="">
                                </a>
                        </div>
                    
                    
                    </div>
                </div>
                
            </div>
            <div class="col-4 col-sm-6">
                <div class="group-img">
                    <img class="img-me" src="http://localhost/intren/asset/image/01_profile.png" onclick="show_award()" alt="123">

                    <div class="media award" id="awrd">
                        <span class="victory">&#9996;</span>
                    <!-- <img src="..." class="align-self-center mr-3" alt="..."> -->
                    <div class="media-body">
                        <!-- <h5 class="mt-0">Center-aligned media</h5> -->
                        <p class="victory-text">Good Thumbs Up Award.</p>
                        <!-- <p class="mb-0">Award.</p> -->
                    </div>
                    </div>

                    <span class="dot"></span>
                    <div class="pacman__eye"></div>
                    <div class="pacman__mouth"></div>
                    <div class="pacman__food"></div>
                    <span class="dot-line"></span>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="content-body mt-5">
    <p class="font-body">My Web App <span class="font-color">Skills.</span></p>
    <div class="container mt-4 mb-5">
        <div class="row mb-5">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="http://localhost/intren/asset/image/html_logo.png" style="height:150px; object-fit: cover;" alt="Card image cap">
                    <div class="card-body">
                    <div class="d-flex justify-content-between date-time">
                        <div class="date">
                            <p>20/04/2565</p>
                        </div>
                        <div class="time">
                        <p class="ago" id="ago"></p>
                        </div>
                    </div>
                        <center style="font-family: 'Fjalla One', sans-serif; font-size:37px">HTML</center>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="http://localhost/intren/asset/image/css_logo.png" style="height:150px; object-fit: cover;" alt="Card image cap">
                    <div class="card-body">
                    <div class="d-flex justify-content-between date-time">
                        <div class="date">
                            <p>20/04/2565</p>
                        </div>
                        <div class="time">
                        <p class="ago" id="ago"></p>
                        </div>
                    </div>
                        <center style="font-family: 'Fjalla One', sans-serif; font-size:37px">CSS</center>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="http://localhost/intren/asset/image/js_logo.jpg" style="height:150px; object-fit: cover;" alt="Card image cap">
                    <div class="card-body">
                    <div class="d-flex justify-content-between date-time">
                        <div class="date">
                            <p>20/04/2565</p>
                        </div>
                        <div class="time">
                        <p class="ago" id="ago"></p>
                        </div>
                    </div>
                        <center style="font-family: 'Fjalla One', sans-serif; font-size:37px">JavaScript</center>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="width: 850px;">
        <div class="d-flex justify-content-around">
            <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="http://localhost/intren/asset/image/php_logo.png" style="height:150px; object-fit: cover;" alt="Card image cap">
                    <div class="card-body">
                    <div class="d-flex justify-content-between date-time">
                        <div class="date">
                            <p>20/04/2565</p>
                        </div>
                        <div class="time">
                        <p class="ago" id="ago"></p>
                        </div>
                    </div>
                        <center style="font-family: 'Fjalla One', sans-serif; font-size:37px">PHP</center>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
            </div>
            <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="http://localhost/intren/asset/image/sql_logo.png" style="height:150px; object-fit: cover;" alt="Card image cap">
                    <div class="card-body">
                    <div class="d-flex justify-content-between date-time">
                        <div class="date">
                            <p>20/04/2565</p>
                        </div>
                        <div class="time">
                        <p class="ago" id="ago"></p>
                        </div>
                    </div>
                        <center style="font-family: 'Fjalla One', sans-serif; font-size:37px">SQL</center>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
            </div>
        </div>
        </div>
    </div>
   
    </div>

    <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1 btn-ra" href="#!" role="button"
            ><i class="fab fa-facebook-f"></i
        ></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1 btn-ra" href="#!" role="button"
            ><i class="fab fa-twitter"></i
        ></a>

        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1 btn-ra" href="#!" role="button"
            ><i class="fab fa-google"></i
        ></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1 btn-ra" href="#!" role="button"
            ><i class="fab fa-instagram"></i
        ></a>

        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1 btn-ra" href="#!" role="button"
            ><i class="fab fa-linkedin-in"></i
        ></a>

        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1 btn-ra" href="#!" role="button"
            ><i class="fab fa-github"></i
        ></a>
        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Made by Sawakorn @ <span style="color: var(--main);"> C.S.I GROUP INTERNSHIP. </span>
    </div>
    <!-- Copyright -->
    </footer>


  </body>
</html>

<style>
    /* body{
        padding: 10px 20px 10px 20px;
    } */
    *{
        font-family: 'roboto';
        
    }
    
    :root {
        --main: #FCAA29;
        --eye: #333333;
    }
    /* victoryhand */
    .victory{
        font-size: 20px;
        margin: 12px 12px 0px 12px;
        background-color: var(--main);
        border-radius: 40%;
    }
    .victory-text{
        font-size: 20px;
    }
    .award{
        display: none;
        background-color: rgba(250, 235, 215, 0.55);
        position: absolute;
        right: 446px;
        top: 46px;
        z-index: 1;
        width: 35%;
        border-radius: 15px;
    }
    span{
        color: black;
    }
    .content{
        padding-bottom: 300px;
        background-image: linear-gradient(#FFFFFF, #f2f2f2);
        padding: 10px 40px 0px 70px;
    }
    .content-body{
        /* padding-bottom: 300px;
        background-image: linear-gradient(#FFFFFF, #f2f2f2); */
        padding: 0px 40px 0px 70px;
    }
    .content-left{
        margin-top: 100px;
    }
    .overflow{
        overflow: hidden;
    }
    .content-right{
        overflow: hidden;
    }
    /* reset navbar */
    .navbar{
        padding: 0px;
    }
    .font-color{
        color: var(--main);
    }
    .font-name{
        font-weight: bold;
        font-family: 'roboto';
    }
    .navbar-pd{
        padding-left: 88px;
    }
    /* ปุ่มวงกลม */
    .btn-circle.btn-sm {
            width: 30px;
            height: 30px;
            padding: 6px 0px;
            border-radius: 15px;
            font-size: 8px;
            text-align: center;
    } 
    .btn-color{
        background-color: #FCAA29;
    }
    .btn-og{
        background-color: var(--main);
    }
    .btn-bu{
        background-color: #3617F2;
    }
    .btn-re{
        background-color: #E91724;
    }
    /* dot circle */
    .group-img{
        position: relative;
    }
    /* awrad */
    
    .dot{
        height: 270px;
        width: 270px;
        background: var(--main);
        /* background-image: radial-gradient(#FFC56A ,#FCAA29); */
        border-radius: 50%;
        display: inline-block;
        /* clip-path: polygon(100% 74%, 44% 48%, 100% 21%); */

        position: absolute;
        left: 56px;
        top: 11px;
    }
    .pacman__eye {
        position: absolute;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        top: 59px;
        right: 329px;
        background: var(--eye);
    }
    .pacman__mouth {
        background: #fbfbfb;
        position: absolute;
        left: 57px;
        top: 11px;
        border-radius: 50%;
        height: 270px;
        width: 270px;
        clip-path: polygon(100% 74%, 44% 48%, 100% 21%);

        animation-name: eat;
        animation-duration: 1s;
        animation-iteration-count: infinite;
    }
    .pacman__food {
        position: absolute;
        width: 15px;
        height: 15px;
        background: red;
        border-radius: 50%;
        top: 133px;
        left: 323px;

        animation-name: food;
        animation-duration: 1s;
        animation-iteration-count: infinite;
    }
    .dot-line{
        height: 295px;
        width: 295px;
        border: 2px red;
        border-style: solid dashed;

        border-radius: 50%;
        display: inline-block;

        animation-name: spin;
        animation-duration: 7000ms;
        animation-iteration-count: infinite;
        animation-timing-function: linear;

        position: absolute;
        left: 45px;
    }
    .img-me{
        width: 65%;
        z-index: 1;

        top: 35px;
        left: -51px;
        position: absolute;
    }
    /* set padding button */
    .row-btn{
        padding-left: 20px;
    }
    .btn-text{
        color: white;
        border-radius: 14px;
        box-shadow: 0px 3px 3px #bebebe;
        /* font-size: 10px; */
        padding: 10px 20px;
    }
    /* ชื่อ tag p */
    .font{
        font-size: 46px;
        font-weight: bold;
    }
    .name-color{
        color: var(--main);
        font-family: 'Press Start 2P', cursive;
        font-weight: bold;
    }
    .show > .nav-link,
    .active > .nav-link,
    .nav-link.show,
    .nav-link.active  {
      color: var(--main) !important;
    }
    /* aniamtion */
    @keyframes spin {
    from {
        transform:rotate(0deg);
        border-width: 1px;
    }
    to {
        transform:rotate(360deg);

    }
    }
    /* pacman */
    @keyframes eat {
        /* clip-path: polygon(100% 74%, 44% 48%, 100% 21%); */
        0% {
            clip-path: polygon(100% 74%, 44% 48%, 100% 21%);
        }
        /* 25% {
            clip-path: polygon(100% 60%, 44% 48%, 100% 40%);
        } */
        50% {
            clip-path: polygon(100% 50%, 44% 48%, 100% 50%);
        }
        /* 75% {
            clip-path: polygon(100% 59%, 44% 48%, 100% 35%);
        } */
        100% {
            clip-path: polygon(100% 74%, 44% 48%, 100% 21%);
        }
    }
    @keyframes food {
        0% {
            transform: translateX(0);
            opacity: 1;
        }
        40%{
            transform: translateX(-60px);
            opacity: 0;
        }
        100% {
            transform: translateX(-50px);
            opacity: 0;
        }
    }
    @keyframes move {
        0% {
            transform: translateY(20px);
            opacity: 0;
        }
        40% {
            transform: translateY(10px);
            opacity: 0.5;
        }
        70% {
            transform: translateY(5px);
            opacity: 0.75;
        }
        100% {
            transform: translateY(0px);
            opacity: 1;
        }
    }
    @keyframes out {
        0% {
            transform: translateY(0px);
            opacity: 1;
        }
        40% {
            transform: translateY(-5px);
            opacity: 0.75;
        }
        70% {
            transform: translateY(-10px);
            opacity: 0.5;
        }
        100% {
            transform: translateY(-20px);
            opacity: 0;
        }
    }
    /* bofy */
    .font-body{
        font-size: 40px;
        font-weight: bold;
        text-align: center;
    }
    .date-time{
        color: #6E798C;
        font-size: 12px;
    }
    .card{
        transition: transform .2s;
        border-radius: 8px;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    }
    .card:hover{
        -ms-transform: scale(1.065); /* IE 9 */
        -webkit-transform: scale(1.065); /* Safari 3-8 */
        transform: scale(1.065);
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }
    /* footer */
    .btn-ra{
        border-radius: 50%;
    }



</style>
<script>

$( document ).ready(function() {
    date_diff();
});
    function date_diff(){
        var one_day = 1000 * 60 * 60 * 24
        
        // To set present_dates to two variables
        var present_date = new Date();
        
        // 0-11 is Month in JavaScript
        var create_day_day = new Date(2022, 3, 20);
        
        // To Calculate next year's create_day if passed already.
        if (present_date.getMonth() == 04 && present_date.getdate() > 22)
            create_day_day.setFullYear(create_day_day.getFullYear() + 1)
        
        // To Calculate the result in milliseconds and then converting into days
        var Result = Math.round(create_day_day.getTime() - present_date.getTime()) / (one_day);
        
        // To remove the decimals from the (Result) resulting days value
        var Final_Result = Math.abs( Result.toFixed(0));
        
        var arr_length = document.getElementsByClassName("ago").length;

        for(let i = 0; i <=arr_length; i++ ){
            document.getElementsByClassName("ago")[i].innerHTML = Final_Result + " days ago.";
        }
        

    }

    function changecolor(Element){
        var root = document.querySelector(':root');
        if(Element.value == "#3617F2"){
            root.style.setProperty('--main', Element.value);
            root.style.setProperty('--eye', "white");
        }else{
            root.style.setProperty('--main', Element.value);
            root.style.setProperty('--eye', "black");
        }
        
        // alert(Element.value);
    }
    function about_page(){
        location.replace("show_about")
    }

    function show_award(){
        // alert("!");
        document.getElementById("awrd").style.display = "flex";
        document.getElementById("awrd").style.animation = "move 0.32s linear";

        setTimeout(function(){
            document.getElementById("awrd").style.animation = "out 0.32s linear";
        },3000)
        setTimeout(function(){
           document.getElementById("awrd").style.display = "none";
        },3320)
        // document.getElementById("awrd").style.display = "none";
    }
</script>