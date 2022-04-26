<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li> -->
            <li class="nav-item pl-4">
                <a class="nav-link" href="#">About Me</a>
            </li>
            </ul>
            <button type="button" class="btn btn-og btn-circle btn-sm ml-1 mr-1"></button>
            <button type="button" class="btn btn-bu btn-circle btn-sm ml-1 mr-1"></button>
            <button type="button" class="btn btn-re btn-circle btn-sm ml-1 mr-1"></button>
            <!-- <span class="navbar-text">
            Navbar text with an inline element
            </span> -->
        </div>
        </nav>

        <div class="container-fluid p-0 m-0">
            <div class="row">
                <div class="col-8 col-sm-6">
                    <div class="content-left">
                    <p class="font">My name’s</p>
                    <p class="font name-color">Sawakorn Silapawanont<span>.</span></p>
                    <p>Currently, I am an intern at the C.S.I organization, </p>
                    <p>If you'd want to learn more about me, Click the button <span class="font-color">About Me.</span></p>
                    <div class="row row-btn">
                        <div class="col2 mr-4">
                          
                                <button type="button" class="btn btn-og btn-text">About Me</button>
                        </div>
                        <div class="col2">
                         
                                <button type="button" class="btn btn-og btn-text">Primary</button>
                           
                        </div>
                    
                    
                    </div>
                </div>
                
            </div>
            <div class="col-4 col-sm-6">
                <div class="content-right mr-5">
                    <img class="img-me" src="http://localhost/intren/asset/image/01_profile.png" alt="123">
                    <span class="dot"></span>
                    <span class="dot-line"></span>
                </div>
            </div>
        </div>
        

    </div>



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
    }
    span{
        color: black;
    }
    .content{
        padding-bottom: 300px;
        background-image: linear-gradient(#F9F9F9, #F8F8F8);
        padding: 10px 40px 114px 70px;
    }
    .content-left{
        margin-top: 100px;
    }
    .content-right{
        overflow: hidden;
    }
    /* reset navbar */
    .navbar{
        padding: 0px;
    }
    .font-color{
        color: red;
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
    .dot{
        position: fixed;
        top: 123px;
        left: 750px;
        height: 250px;
        width: 250px;
        background-image: radial-gradient(#FFC56A ,#FCAA29);
        border-radius: 50%;
        display: inline-block;

    }
    .dot-line{
        position: fixed;
        top: 110px;
        left: 737px;
        height: 275px;
        width: 275px;
        border: 2px red;
        border-style: solid dashed;

        border-radius: 50%;
        display: inline-block;

        animation-name: spin;
        animation-duration: 7000ms;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }
    .img-me{
        top: -30px;
        left: 323px;
        position: fixed;
        width: 40%;
        z-index: 1;
    }
    /* set padding button */
    .row-btn{
        padding-left: 20px;
    }
    .btn-text{
        color: white;
        border-radius: 14px;
        box-shadow: 0px 3px 3px #888888;
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
</style>