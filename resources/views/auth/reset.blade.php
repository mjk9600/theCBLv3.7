
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
<!--     <script   src={{url('js/bootstrap.bundle.js')}}></script>-->
<!--     <style>-->
      

<!--</style>-->

<!--    </head>-->

  
<!--<body class="container-fluid ">-->
 
<!--  <div class="row m-1" id="forgot">-->
<!--      <div class="col-sm-6 d-none d-md-block">-->
        <!-- <img src="/Login3/img/pixlr-bg-result(4.png" class="img-fluid" style="min-height:100%;" /> -->
<!--      </div>-->
<!--      <div class="col-md-6 p-5" style="color: white;">-->
<!--        <div class="form-style w-100 ">-->
<!--          <form action="{{ route('reset-password') }}" method="post" autocomplete="off">-->

      
<!--     @csrf-->
<!--     @method('PUT')-->
<!--     <div class="text-center">-->
<!--         @if(Session::has('success'))-->
<!--                        <div class="alert alert-success alert-dismissible fade show">-->
<!--                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>  -->
<!--                          {{Session::get('success')}}-->
<!--                      </div>-->
<!--              @endif-->
<!--               @if(Session::has('failed'))-->
<!--                        <div class="alert alert-danger alert-dismissible fade show">-->
<!--                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>  -->
<!--                              {{Session::get('failed')}}-->
<!--                      </div>-->
<!--                 @endif-->
          
<!--                    <h1 style="font-weight: bold;"  > Reset password?</h1>-->
<!--                   <h3> Enter your new password below, we’re bring extra safe</h3>-->
                
<!--          </div>-->

<!--          <input type="hidden" name="email" value="{{ $email }} "/>-->

<!--                    <div class="form-group pb-3 input-group mt-5">-->
<!--                      <input type="password" name="password" placeholder="New password" id="pass" class="form-control inputBorder" >-->
<!--                      <i id="eye" class="input-group-text fa-solid fa-eye bg-change" style="cursor: pointer; display: block;"></i>-->
<!--                      <i id="eyeClose" class="input-group-text fa-solid fa-eye-slash bg-change" style="cursor: pointer;display: none;"></i>-->
                  
<!--                  </div> -->
<!--                  <span class="text-danger">@error('confirm_password') {{$message}} @enderror</span> -->

<!--                  <div class="form-group pb-3 input-group mt-5">-->
<!--                    <input type="password"name="confirm_password" placeholder="Confirm password" id="pass1" class="form-control inputBorder" >-->
<!--                    <i id="eye1" class="input-group-text fa-solid fa-eye bg-change" style="cursor: pointer; display: block;;"></i>-->
<!--                    <i id="eyeClose1" class="input-group-text fa-solid fa-eye-slash bg-change" style="cursor: pointer;display: none;"></i>          -->
              
<!--                </div> -->
<!--                <span class="text-danger">@error('confirm_password') {{$message}} @enderror</span> -->

<!--            <div class="pb-2 mt-4">-->
<!--              <button type="submit" class="btn btn-light w-100 font-weight-bold mt-2 btn-class" ><h3><strong>Reset Password</strong></h3></button>-->
<!--            </div>-->
            
<!--            <h5 class="pb-2 mt-3 text-center"> -->
<!--              <a href="loginPage" class="link-class " >-->
<!--              <span class="fa-solid fa-arrow-left-long " style=" margin-right: 1em; ">  </span>-->
<!--             Back to Login page-->
<!--             </a>-->
<!--             </h5>-->
<!--          </form>-->
    

   
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</body>-->

<!--<script>-->
<!--  const eye=document.getElementById('eye');-->
<!--  const eyeClose=document.getElementById('eyeClose');-->
  
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
<!--  }-->
<!--  })-->
  
<!--  eye1.addEventListener('click',()=>{-->
  
<!--  if(eye1.style.display==='block'){-->
<!--    eye1.style.display='none'-->
<!--    eyeClose1.style.display='block';-->
<!--    document.getElementById('pass1').type='text';    -->
<!--  }-->
<!--})-->
<!--eyeClose1.addEventListener('click',()=>{-->

<!--if(eyeClose1.style.display==='block'){-->
<!--  eyeClose1.style.display='none'-->
<!--  eye1.style.display='block';-->
<!--  document.getElementById('pass1').type='password';-->
<!--}-->
<!--}) -->
<!--  </script>-->
<!--</html>-->

@extends('layout')
@section('title', 'The CBL | reset')
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
      

</style>

    </head>

  
<body class="container-fluid ">
 
  <div class="row m-1" id="forgot">
      <div class="col-sm-6 d-none d-md-block">
        <!-- <img src="/Login3/img/pixlr-bg-result(4.png" class="img-fluid" style="min-height:100%;" /> -->
      </div>
      <div class="col-md-6 p-5" style="color: white;">
        <div class="form-style w-100 ">
          <form action="{{ route('reset-password') }}" method="post" autocomplete="off">

      
     @csrf
     @method('PUT')
     <div class="text-center">
         @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>  
                          {{Session::get('success')}}
                      </div>
              @endif
               @if(Session::has('failed'))
                        <div class="alert alert-danger alert-dismissible fade show">
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>  
                              {{Session::get('failed')}}
                      </div>
                 @endif
          
                    <h1 style="font-weight: bold;"  > Reset password?</h1>
                   <h3> Enter your new password below, we’re bring extra safe</h3>
                
          </div>

          <input type="hidden" name="email" value="{{ $email }} "/>

                    <div class="form-group pb-3 input-group mt-5">
                      <input type="password" name="password" placeholder="New password" id="pass" class="form-control inputBorder" >
                      <i id="eye" class="input-group-text fa-solid fa-eye bg-change" style="cursor: pointer; display: block;"></i>
                      <i id="eyeClose" class="input-group-text fa-solid fa-eye-slash bg-change" style="cursor: pointer;display: none;"></i>
                  
                  </div> 
                  <span class="text-danger">@error('confirm_password') {{$message}} @enderror</span> 

                  <div class="form-group pb-3 input-group mt-5">
                    <input type="password"name="confirm_password" placeholder="Confirm password" id="pass1" class="form-control inputBorder" >
                    <i id="eye1" class="input-group-text fa-solid fa-eye bg-change" style="cursor: pointer; display: block;;"></i>
                    <i id="eyeClose1" class="input-group-text fa-solid fa-eye-slash bg-change" style="cursor: pointer;display: none;"></i>          
              
                </div> 
                <span class="text-danger">@error('confirm_password') {{$message}} @enderror</span> 

            <div class="pb-2 mt-4">
              <button type="submit" class="btn btn-light w-100 font-weight-bold mt-2 btn-class" ><h3><strong>Reset Password</strong></h3></button>
            </div>
            
            <h5 class="pb-2 mt-3 text-center"> 
              <a href="loginPage" class="link-class " >
              <span class="fa-solid fa-arrow-left-long " style=" margin-right: 1em; ">  </span>
             Back to Login page
             </a>
             </h5>
          </form>
    

   
      </div>
    </div>
  </div>
</body>

<script>
  const eye=document.getElementById('eye');
  const eyeClose=document.getElementById('eyeClose');
  
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
  
  eye1.addEventListener('click',()=>{
  
  if(eye1.style.display==='block'){
    eye1.style.display='none'
    eyeClose1.style.display='block';
    document.getElementById('pass1').type='text';    
  }
})
eyeClose1.addEventListener('click',()=>{

if(eyeClose1.style.display==='block'){
  eyeClose1.style.display='none'
  eye1.style.display='block';
  document.getElementById('pass1').type='password';
}
}) 
  </script>
</html>
@endsection

