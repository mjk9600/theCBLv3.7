
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
   
<!--         .btn-class:hover-->
<!--        {-->
<!--            color: #e40a10;-->
<!--            border: solid #e40a10 1px;-->
<!--        }-->

<!--        .sideline {-->
<!--        width: 100%;-->
<!--        display: flex;-->
<!--        justify-content: center;-->
<!--        align-items: center;-->
<!--        text-align: center;-->
<!--        color: #ccc;-->
<!--        }-->

<!--        .sideline:before,-->
<!--        .sideline:after {-->
<!--        content: "";-->
<!--        border-top: 1px solid #ebebeb;-->
<!--        margin: 0 20px 0 0;-->
<!--        flex: 1 0 20px;-->
<!--        }-->
        
<!--        .sideline:after {-->
<!--        margin: 0 0 0 20px;-->
<!--        }-->
<!-- .fa-google {-->
<!--  background: conic-gradient(from -45deg, #ea4335 110deg, #4285f4 90deg 180deg, #34a853 180deg 270deg, #fbbc05 270deg) 73% 55%/150% 150% no-repeat;-->
<!--  -webkit-background-clip: text;-->
<!--  background-clip: text;-->
<!--  color: transparent;-->
<!--  -webkit-text-fill-color: transparent;-->
<!--  text-decoration:none;-->
<!--}-->
<!--  </style>-->
<!--    </head>-->
<!--    <body >-->
<!--     <div id="register">-->
   
<!--     <div class="row m-1">-->
     
<!--     <div class="col-sm-6 d-none d-md-block">-->
         <!-- <img src="/Login3/img/pixlr-bg-result(4.png" class="img-fluid" style="min-height:100%;" /> -->
<!--     </div>-->

<!--     <div class="col-md-6 p-2 form-style" >-->
<!--     <form action="{{route('login')}}"  method="post"  style="margin-top:5vh;" autocomplete="off">-->
<!--             @if(Session::has('success'))-->
<!--                        <div class="alert alert-success alert-dismissible fade show">-->
<!--                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>  -->
<!--                          {{Session::get('success')}}-->
<!--                      </div>-->
<!--              @endif-->
<!--               @if(Session::has('fail'))-->
<!--                        <div class="alert alert-danger alert-dismissible fade show">-->
<!--                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>  -->
<!--                              {{Session::get('fail')}}-->
<!--                      </div>-->
<!--                 @endif-->
<!--     {{ csrf_field() }}-->
<!--         <h1 class="pb-3 text-center"style="font-weight:bold">Login</h1>-->
    
<!--           <div class="  input-group">-->
<!--             <label for="email"></label>-->
<!--                    <input type="text" name="email" placeholder="Enter Email" class="form-control form-label-group inputBorder" id="exampleInputEmail1" id="exampleInputEmail1" value="{{old('email')}}"  >-->
<!--                    <i class="input-group-text fa-solid fa-envelope bg-change" style="cursor: pointer; display: block; "></i>-->
<!--           </div>-->
<!--           <span class="text-danger">@error('email') {{$message}} @enderror</span>-->
       
          
<!--           <div class="input-group">-->
<!--             <label for="password"></label>-->
<!--                      <input type="password" name= "password" placeholder="Enter password" id="pass" class="form-control inputBorder">-->
<!--                      <i id="eye" class="input-group-text fa-solid fa-eye bg-change" style="cursor: pointer; display: block;"></i>-->
<!--                      <i id="eyeClose" class="input-group-text fa-solid fa-eye-slash bg-change" style="cursor: pointer;display: none;"></i>     -->
<!--           </div> -->
<!--           <span class="text-danger">@error('password') {{$message}} @enderror</span>-->
<!--           <div class="d-flex align-items-center justify-content-end">-->
<!--                <div><a href="{{ route('forgot') }}" ><h5>Forget Password?</h5></a></div>-->
<!--              </div>-->
<!--               <div class="mt-3 pb-3 input-group">-->
<!--           <button type="submit" class="btn btn-light w-100 font-weight-bold btn-class "> <h3><strong>Login</strong> </h3></button>-->
<!--            </div>  -->
   
<!--            <div class="sideline">OR</div>-->
<!--            <div class="mt-3">-->
<!--              <a type="submit" href="{{ route('google.login') }}" class="btn btn-outline-light w-100 font-weight-bold"><i class="fab fa-google fa-2x" style=" border-bottom:none;margin-right:1rem;"></i>-->
               
<!--                 <strong>-->
<!--              Login With google-->
<!--                </strong>-->
            
<!--            </a>-->
<!--            </div>-->
<!--            <div class="pt-4 text-center ">-->
<!--              Don't have an account? <a href="{{ route('register') }}" >   <strong>Register</strong></a>-->
<!--            </div>-->
<!--</form>-->
     

    

<!--          </div>   -->
<!--       </div>-->
<!--     </div>-->
  
<!--    </body>-->

<!--    <script>-->
<!--  const eye1=document.getElementById('eye1');-->
<!--  const eyeClose1=document.getElementById('eyeClose1');-->

   
<!--  eye.addEventListener('click',()=>{-->
<!--    if(eye.style.display==='block'){-->
<!--      eye.style.display='none'-->
<!--      eyeClose.style.display='block';-->
<!--      document.getElementById('pass').type='text';    -->
<!--    }-->
<!--  })-->
<!--  eyeClose.addEventListener('click',()=>{-->
  
<!--  if(eyeClose.style.display==='block'){-->
<!--    eyeClose.style.display='none'-->
<!--    eye.style.display='block';-->
<!--    document.getElementById('pass').type='password';-->
<!--    }-->
<!--  })-->
  
<!--</script>-->

    
<!--</html>-->


@extends('layout')
@section('title', 'The CBL | login')
@section('content')
<!DOCTYPE html>
<html>
    <head>
        <title>TheCBL</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href={{url('css/bootstrap.css')}}>
        <link rel="stylesheet" href={{url('css/layout.css')}}>
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
     <!-- <script   src={{url('js/bootstrap.bundle.js')}}></script> -->

     <style>
   
  /* button{
    height:50px;
  } */
         .btn-class:hover
        {
            color: #e40a10;
            border: solid #e40a10 1px;
        }

        .sideline {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: #ccc;
        }

        .sideline:before,
        .sideline:after {
        content: "";
        border-top: 1px solid #ebebeb;
        margin: 0 20px 0 0;
        flex: 1 0 20px;
        }
        
        .sideline:after {
        margin: 0 0 0 20px;
        }
 .fa-google {
  background: conic-gradient(from -45deg, #ea4335 110deg, #4285f4 90deg 180deg, #34a853 180deg 270deg, #fbbc05 270deg) 73% 55%/150% 150% no-repeat;
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
  -webkit-text-fill-color: transparent;
  text-decoration:none;
  margin-top:1vh;
}
  </style>
    </head>
    <body >
     <div class="register">
   
     <div class="row m-1">
     
     <div class="col-sm-6 d-none d-md-block">
         <!-- <img src="/Login3/img/pixlr-bg-result(4.png" class="img-fluid" style="min-height:100%;" /> -->
     </div>

     <div class="col-md-5 p-2 form-style" >
     <form action="{{route('login')}}"  method="post"  style="margin-top:5vh;" autocomplete="off">
             @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>  
                          {{Session::get('success')}}
                      </div>
              @endif
               @if(Session::has('fail'))
                        <div class="alert alert-danger alert-dismissible fade show">
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>  
                              {{Session::get('fail')}}
                      </div>
                 @endif
     {{ csrf_field() }}
         <h1 class="pb-3 text-center"style="font-weight:bold">Login</h1>
    
           <div class="  input-group    ">
             <label for="email"></label>
                    <input type="email" name="email" placeholder="Enter Email" class="form-control form-label-group inputBorder" id="exampleInputEmail1" id="exampleInputEmail1" value="{{old('email')}}"  >
                    <i class="input-group-text fa-solid fa-envelope bg-change" style="cursor: pointer; display: block; "></i>
           </div>
           <span class="text-danger">@error('email') {{$message}} @enderror</span>
       
          
           <div class="input-group">
             <label for="password"></label>
                      <input type="password" name= "password" placeholder="Enter Password" id="pass" class="form-control inputBorder">
                      <i id="eye" class="input-group-text fa-solid fa-eye bg-change" style="cursor: pointer; display: block;"></i>
                      <i id="eyeClose" class="input-group-text fa-solid fa-eye-slash bg-change" style="cursor: pointer;display: none;"></i>     
           </div> 
           <span class="text-danger">@error('password') {{$message}} @enderror</span>
           <div class="d-flex align-items-center justify-content-end">
                <div><a href="{{ route('forgot') }}" ><h5>Forget Password?</h5></a></div>
              </div>
               <div class="mt-3 pb-3 input-group">
           <button type="submit" class="btn btn-light w-100 fw-bold btn-class p-2"><strong>Login</strong></button>
            </div>  
   
            <div class="sideline">OR</div>
            <div class="mt-3">
              <a type="submit" href="{{ route('google.login') }}" class="btn btn-outline-light w-100 font-weight-bold"><i class="fab fa-google fa-2x" style=" border-bottom:none;margin-right:1rem;margin-top:0;margin-bottom:0;padding-bottom: 0 !important;padding-top: 2px !important;"></i>
    
                 <b>
              Login With GOOGLE
                </b>
        
            </a>
            </div>
            <div class="pt-4 text-center ">
              Don't have an account? <a href="{{ route('register') }}" >   <strong>Register</strong></a>
            </div>
</form>
     

    

          </div>   
       </div>
     </div>
  
    </body>

    <script>
  const eye1=document.getElementById('eye1');
  const eyeClose1=document.getElementById('eyeClose1');

   
  eye.addEventListener('click',()=>{
    if(eye.style.display==='block'){
      eye.style.display='none'
      eyeClose.style.display='block';
      document.getElementById('pass').type='text';    
    }
  })
  eyeClose.addEventListener('click',()=>{
  
  if(eyeClose.style.display==='block'){
    eyeClose.style.display='none'
    eye.style.display='block';
    document.getElementById('pass').type='password';
    }
  })
  
</script>

    
</html>
@endsection