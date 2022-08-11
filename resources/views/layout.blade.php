<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href={{url('css/bootstrap.css')}}>
        <link rel="stylesheet" href={{url('css/layout.css')}}>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
        <!--<script type="text/javascript"  src={{url('js/bootstrap.bundle.js')}}></script>-->
        <style>
        
        @media screen and (max-width: 576px) {
          .marginTop{
          margin-top:-5% !important;
        }
        .marginBottom{
          padding-bottom:-5% !important;
          margin-bottom:-5% !important;
        }
        }
        
        </style>
    </head>
    <body>
    
      <div style='position:sticky;top: 0;z-index:2;'>
        <a  onclick="location.href='{{ url('/dashboard') }}'"><img src="../images/logo2.webp" class="logo-img"></a>
      </div>
      <!-- Nav Bar -->
      <nav class="navbar navbar-expand-sm navbar-dark navbar-style" style='position:sticky;top:0;z-index:1;'>
        <div class="container-fluid">
          <div class="navbar-brand" style="width: 10%;"></div>
          <button class="navbar-toggler dark-text" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon dark-text"></span>
          </button>
          <!-- Links -->
          <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
            <ul class="navbar-nav">    

            
              <li class="nav-item" >
                <a class="nav-text" onclick="location.href='{{ url('/dashboard') }}'">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-text" href="news">News</a>
              </li>
              <li class="nav-item">
                <a class="nav-text" href="gallery">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-text" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-text" onclick="location.href='{{ url('/chooseYourReg') }}'">Register As</a>
              </li>
             
              @guest
              <li class="nav-item">
              <a class="nav-text dropdown" href="{{ route('login') }}">Login</a>
              </li>
              <li class="nav-item">
              <a class="nav-text dropdown" href="{{ route('register') }}">Register</a>
              </li>
              @else
              <li class="nav-item">
                <a class="nav-text dropdown" href="profile">Profile</a>
              </li>
              <li class="nav-item">
              <a class="nav-text dropdown" href="{{ route('signOut') }}">Logout</a>
              </li>
              @endguest

            </ul>
          </div>
        </div>
      </nav>

      @yield('content')
      <!-- footer section -->


      <!--<footer class="page-footer py-4">-->
      <!--      <div class="container">-->
      <!--          <div class="row">-->
      <!--              <div class="col-md-4 text-start">-->
      <!--                  Powered by LJISM-->
      <!--              </div>-->
      <!--              <div class="col-md-4 text-center">-->
      <!--                  © All Rights Reserved By LJKU-->
      <!--              </div>-->
      <!--              <div class="col-md-4 text-end">-->
      <!--                  Developed by LJICA-->
      <!--              </div>-->
      <!--          </div>-->
      <!--      </div>-->
      <!--  </footer>-->
      <footer class="page-footer mt-5" >
            <div class="container">
                <div class="row g-sm-4 text-center">
                    <div class="col-sm-4" >
                        <p>Powered by LJISM</p>
                    </div>
                    <div class="col-sm-4 marginTop">
                    <p>© All Rights Reserved By LJKU</p>
                    </div>
                    <div class="col-sm-4 marginTop marginBottom">
                    <p> Developed by LJICA</p>
                    </div>
                </div>
            </div>
        </footer>
        
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
    <script src="https://code.jquery.com/jquery-3.0.0.js" integrity="sha256-jrPLZ+8vDxt2FnE1zvZXCkCcebI/C8Dt5xyaQBjxQIo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
    <script src="https://code.jquery.com/jquery-3.0.0.js" integrity="sha256-jrPLZ+8vDxt2FnE1zvZXCkCcebI/C8Dt5xyaQBjxQIo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
    <script src="https://code.jquery.com/jquery-3.0.0.js" integrity="sha256-jrPLZ+8vDxt2FnE1zvZXCkCcebI/C8Dt5xyaQBjxQIo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>


// Prepare the preview for profile picture
    $("#wizard-picture").change(function(){
        readURL(this);
        console.log(this)
    });

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
    </script>
    </body>
</html>