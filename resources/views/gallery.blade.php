@extends('layout')
@section('title', 'The CBL | Gallery')
@section('content')
<!--<html>-->
<!--    <head>-->
<!--        <link rel="stylesheet" href={{url('css/bootstrap.css')}}>-->
<!--        <link rel="stylesheet" href={{url('css/layout.css')}}>-->
<!--        <link rel="stylesheet" href={{url('css/gallery.css')}}>-->
<!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />-->
<!--     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">-->
<!--     <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>-->
<!--        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>-->
<!--        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.2.2/swiper-bundle.min.js"></script>-->
<!--     <script   src={{url('js/bootstrap.bundle.js')}}></script>-->
     <!--<html>-->
<!--     </head>-->
<!--     <body>-->
<!--<h1 style ="color:white"> Image Gallery</h1><hr>-->
<!--<div id="gallery" class="container-fluid">  -->

<!--  <video class="vid" controls>-->
<!--    <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4">-->
<!--    </source>-->
<!--  </video>-->
<!--  <img src="images/img1.jpg" class="img-responsive">-->
<!--  <img src="images/img2.jpg" class="img-responsive">-->
<!--  <img src="images/logo2.png" class="img-responsive">-->
<!--  <img src="images/playerReg.jpg" class="img-responsive">-->
<!--  <img src="images/img2.webp" class="img-responsive">-->
<!--  <img src="images/img3.webp" class="img-responsive">-->
<!--  <img src="images/img4.webp" class="img-responsive">-->
<!--  <img src="images/img5.webp" class="img-responsive">-->
<!--  <img src="images/img6.webp" class="img-responsive">-->


<!--</div>-->

<!--<div id="myModal" class="modal fade" role="dialog">-->
<!--  <div class="modal-dialog">-->

    <!-- Modal content-->
<!--    <div class="modal-content">-->
<!--      <div class="modal-body">-->
<!--      </div>-->
<!--    </div>-->

<!--  </div>-->
<!--</div>-->
<!--</body>-->
<!--</html>-->
     
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery- Images</title>
    <link rel="stylesheet" href={{url('css/gallery.css')}}>
    <!--<link rel="stylesheet" href={{url('css/bootstrap.css')}}>-->
    <!--<link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">-->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />-->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />-->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <style>
    body{
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        @media only screen and (max-width: 540px) {
            .underLine{
                width: 80vw;
            }
            .btnWidth{
                width: fit-content !important;
            }
        }
        .btnWidth{
            font-weight: bold;
            width: 25%;
        }
        .imageSlide>img{
            height: 20vh;
        }
        img{
            height:50vh;
            width:35vh;
        }
        .slick-slide img{
            border: 2px solid gray;
            height: 35vh;
            width: 55vh;
        }
        .btn:hover{
            color:#e40a10 !important;
            border: 2px solid #e40a10 !important;
            box-sizing: border-box;
        }
.slick-dots li {
    margin: 0;
}

.slick-dots {
    margin-top: 50px;
}

.slick-dots li button:before, .slick-dots li.slick-active button:before {
    color: transparent;
    opacity: 1;
}

.slick-dots li button:before {
    margin-top: 5px;
    background-color: transparent;
    border: 1px solid rgb(90, 90, 90);
    border-radius: 20%;
    display: inline-block;
    height: 5px;
    width: 10px;
}
.slick-dots li.slick-active button:before {
    background-color: #e40a10;
}
    </style>
</head>
<body class=" bg-black text-light">
    <h1 class=" text-center fw-bolder">Gallery - Images</h1>
    <div class=" container">
        <div class="row justify-content-center m-2 mt-4">
            <a href="#" class="btn border-2 border-white bg-light text-dark btnWidth fw-bolder me-2 borderButton">Images</a>
            <a href="#" class="btn border-2 border-white bg-light text-dark btnWidth fw-bolder borderButton">Videos</a>
        </div>
    </div>
    <hr>
    <div class="mt-3"></div>
    <div class="imageSlide container ">
        <div>
            <img src="images/playerImage/image1.jpg" >
        </div>
        <div>
            <img src="images/playerImage/image2.jpg" >
        </div>
        <div>
            <img src="images/playerImage/image3.jpg">
        </div>
        <div>
            <img src="images/playerImage/image4.jpg">
        </div>
        <div>  
            <img src="images/playerImage/image5.jpg">
        </div>
        <div>   
            <img src="images/playerImage/image6.jpg">
        </div>
        <div>
            <img src="images/playerImage/image1.jpg" >
        </div>
        <div>
            <img src="images/playerImage/image2.jpg" >
        </div>
        <div>
            <img src="images/playerImage/image3.jpg">
        </div>
        <div>
            <img src="images/playerImage/image4.jpg">
        </div>
        <div>  
            <img src="images/playerImage/image5.jpg">
        </div>
        <div>   
            <img src="images/playerImage/image6.jpg">
        </div>
    </div>
    

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!--<script src="./bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
    <script>
        $(document).ready(function(){
      $('.imageSlide').slick({
        // setting-name: setting-value
        dots:true,
        infinite: true,
        arrow:true,
        rows: 2,
        slidesPerRow: 3,
        arrow:true,
        adaptiveHeight: true,
        //  centerMode: true,
        // mobileFirst:true,
        pauseOnHover: true,
        responsive: [
        
        {
            breakpoint: 600,
            settings: {
                slidesPerRow: 2,
            }
        },
        {
            breakpoint: 480,
            settings: {
            slidesPerRow: 1    
            }
        }

  ]   
      });
    });
    </script>
</body>
</html>

@endsection