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
        <a class="navbar-brand font-name" href="show_home2"> <span class="font-color">My</span>profile </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto mx-auto navbar-pd">
            <li class="nav-item pr-5">
                <a class="nav-link" href="show_home2">Home <span class="sr-only">(current)</span></a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li> -->
            <li class="nav-item active pl-4">
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
    </div>
    <!-- content Here!! -->
    <div class="content_body">
        <div class="media">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100 img-me" src="http://localhost/intren/asset/image/02_profile.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100 img-me" src="http://localhost/intren/asset/image/03_profile.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100 img-me" src="http://localhost/intren/asset/image/04_profile.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="media-body ml-5">
                <h5 class="mt-0">Sawakorn Silapawanont <span class="font-color">(intern)</span></h5>
                <p class="font-weight-bold"><span class="text-secondary font-weight-normal">Birthday</span> 10/09/2001 <span class="text-secondary font-weight-normal">Age</span> 20 <span class="text-secondary font-weight-normal">years</span></p>
                <p class="text-secondary"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </p>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <p class="h3 mt-5 mb-4">Education Background</p>
        <div class="row">
            <div class="col-6">
                <div class="card card-left "data-toggle="modal" data-target="#universityModal">
                    <div class="card-body">
                        <h5 class="card-title text-center">3.50</h5>
                        <h6 class="text-center">University</h6>
                        <p class="card-text text-secondary text-center">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card" data-toggle="modal" data-target="#schoolModal">
                    <div class="card-body">
                        <h5 class="card-title text-center">2.50</h5>
                        <h6 class="text-center">High School</h6>
                        <p class="card-text text-secondary text-center">With supporting text below as a natural lead-in to additional content.</p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="universityModal" tabindex="-1" role="dialog" aria-labelledby="universityLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="universityLabel">Burapha University - Faculty of Informatics Software Engineering</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-text" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="schoolModal" tabindex="-1" role="dialog" aria-labelledby="schoolLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="schoolLabel">Klaeng wittayasathaworn - Mathematics-Science Programme</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-text" data-dismiss="modal">Close</button>
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
    span{
        color: black;
    }
    .content{
        padding-bottom: 300px;
        /* background-image: linear-gradient(#FFFFFF, #f2f2f2); */
        padding: 10px 40px 0px 70px;
    }
    .content_body{
        margin-left: 100px;
        margin-top: 100px;
        padding-bottom: 300px;
        /* background-image: linear-gradient(#FFFFFF, #f2f2f2); */
        padding: 10px 40px 0px 70px;
        width: 1000px;
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
    .img-me{
        width: 200px !important;
        height: 200px;
        object-fit: cover;
        border-radius: 11px;
    }
    /* แก้ไขสีแถบ เลื่อนรูป */
    .carousel-indicators .li{
        background-color: red;
    }
   .shadow-a{
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;
   }
    /* set padding button */
    .row-btn{
        padding-left: 20px;
    }
    .btn-text{
        color: white;
        border-radius: 13px;
        /* box-shadow: 0px 3px 3px #bebebe; */
        /* font-size: 10px; */
        /* padding: 10px 20px; */
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
        border-radius: 11px;
        /* box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px; */
        cursor: pointer;
        width: 450px;
        background-color: rgba(226, 226, 225, 0.23);
        border: 0px;
    }
    .card-left{
        float: right;
    }
    .card-title{
        color: var(--main);
        font-weight: bold;
        font-size: 40px;
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
</script>