
<!--<!DOCTYPE html>-->
<!--<html>-->
<!--    <head>-->
<!--        <title>TheCBL</title>-->
<!--        <meta charset="utf-8">-->
<!--        <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--        <link rel="stylesheet" href={{url('css/bootstrap.css')}}>-->
<!--        <link rel="stylesheet" href={{url('css/layout.css')}}>-->
<!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />-->
<!--     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">-->
     <!--<script   src={{url('js/bootstrap.bundle.js')}}></script>-->
<!--     <style>-->
<!--     button {-->
<!--      height: 50px;-->
<!--      }-->
<!--</style>-->
<!--</head>-->
    

<!--<body class="container-fluid">-->

<!--  <div class="row m-1" id="forgot">-->
<!--      <div class="col-sm-6 d-none d-md-block">-->
           <!-- blank container  -->
<!--      </div>-->
<!--      <div class="col-md-6 p-5" >-->
<!--        <div class="form-style w-100 " style="margin-right: 90px;">-->

<!--        <form action="{{ route('forgot') }}" method="post" autocomplete="off">-->

<!--                        @if (Session::has("success"))-->
<!--                            <div class="alert alert-success alert-dismissible fade show">-->
<!--                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>-->
<!--                                {{ Session::get('success') }}-->
<!--                            </div>-->
<!--                        @elseif (Session::has("failed"))-->
<!--                            <div class="alert alert-danger alert-dismissible fade show">-->
<!--                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>-->
<!--                                {{ Session::get('failed') }}-->
<!--                            </div>-->
<!--                        @endif-->
<!--         {{ csrf_field() }}-->
<!--                <div class="text-center">  -->
<!--               <h1 style="font-weight: bold;" > Forgot your password ?</h1> -->
<!--              <h3>Enter your email below to receive your password reset instructions</h3>-->
<!--    </div>-->
<!--            <div class="form-group pb-3 w-100 input-group mt-5">-->
<!--            <label for="email"></label>-->
<!--              <input type="text"name='email' placeholder="Enter Email" class="form-control form-label-group inputBorder " id="exampleInputEmail1"  value="{{ old('email') }}">-->
<!--              <i class="input-group-text fa-solid fa-envelope bg-change" style="cursor: pointer; display: block; "></i>-->
             
<!--            </div>-->
<!--            <span class="text-danger">@error('email') {{$message}} @enderror</span>-->
       
<!--            <div class="pb-2 mt-5" >-->
<!--              <button type="submit" class="btn btn-light w-100 font-weight-bold mt-2 btn-class "  ><h3><strong>Send</strong></h3></button>-->
<!--            </div>-->
   
          
<!--           <h5 class="pb-2 mt-4 text-center"> -->
<!--             <a href="login"class="link-class" >-->
<!--             <span class="fa-solid fa-arrow-left-long " style=" margin-right: 1em; ">  </span>-->
<!--            Back to Login page-->
<!--            </a>-->
<!--            </h5>-->
         
          
<!--          </form>-->
   
        
<!--        </div>-->
   
<!--      </div>-->
<!--    </div>-->
  
<!--</body>-->
<!--</html>-->



@extends('layout')
@section('title', 'The CBL | forgot')
@section('content')
<!DOCTYPE html>
<html>
    <head>
        <title>TheCBL</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href={{url('css/bootstrap.css')}}>
        <link rel="stylesheet" href={{url('css/layout.css')}}>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
     <!-- <script   src={{url('js/bootstrap.bundle.js')}}></script> -->
     <style>
     button {
      height: 50px;
      }
</style>
</head>
    

<body class="container-fluid">

  <div class="row m-1" id="forgot">
      <div class="col-sm-6 d-none d-md-block">
           <!-- blank container  -->
      </div>
      <div class="col-md-6 p-5" >
        <div class="form-style w-100 " style="margin-right: 90px;">

        <form action="{{ route('forgot') }}" method="post" autocomplete="off">

                        @if (Session::has("success"))
                            <div class="alert alert-success alert-dismissible fade show">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                {{ Session::get('success') }}
                            </div>
                        @elseif (Session::has("failed"))
                            <div class="alert alert-danger alert-dismissible fade show">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                {{ Session::get('failed') }}
                            </div>
                        @endif
         {{ csrf_field() }}
                <div class="text-center">  
               <h1 style="font-weight: bold;" > Forgot your password ?</h1> 
              <h3>Enter your email below to receive your password reset instructions</h3>
    </div>
            <div class="form-group pb-3 w-100 input-group mt-5">
            <label for="email"></label>
              <input type="text"name='email' placeholder="Enter Email" class="form-control form-label-group inputBorder " id="exampleInputEmail1"  value="{{ old('email') }}">
              <i class="input-group-text fa-solid fa-envelope bg-change" style="cursor: pointer; display: block; "></i>
             
            </div>
            <span class="text-danger">@error('email') {{$message}} @enderror</span>
       
            <div class="pb-2 mt-5" >
              <button type="submit" class="btn btn-light w-100 font-weight-bold mt-2 btn-class "  ><h3><strong>Send</strong></h3></button>
            </div>
   
          
           <h5 class="pb-2 mt-4 text-center"> 
             <a href='{{ url('loginPage') }}'class="link-class" >
             <span class="fa-solid fa-arrow-left-long " style=" margin-right: 1em; ">  </span>
            Back to Login page
            </a>
            </h5>
         
          
          </form>
   
        
        </div>
   
      </div>
    </div>
  
</body>
</html>
@endsection