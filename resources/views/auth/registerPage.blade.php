@extends('layout')
@section('title', 'The CBL | register')
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
    </head>
    <body >
     <div class="register">
     <div class="row m-1">
     <div class="col-sm-6 d-none d-md-block">
     </div>
     <div   class="col-md-5 p-2 form-style" >
     <form  action="{{route('register')}}"  method="post"  >
                        @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
     {{ csrf_field() }}
         <h1 class="pb-3 text-center "style="font-weight:bold " >Registration</h1>
    

           <div class=" input-group" >
           <label for="name"></label>
               <input type="text" placeholder="Enter Name" class="form-control form-label-group inputBorder" name="name"  value="{{old('name')}}">
               <i class="input-group-text fa-solid fa-input-text bg-change"></i>
     
           </div>
           <span class="text-danger " >@error ('name') {{$message}} @enderror</span>
           <div class=" input-group">
           <label for="mobile"></label>
               <input type="number"  name="mobile"  placeholder="Enter Valid Mobile Number" class="form-control form-label-group inputBorder"   value="{{old('mobile')}}">
               <i class="input-group-text fa-solid fa-mobile-retro bg-change"></i>
               
           </div>
           <span class="text-danger">@error('mobile') {{$message}} @enderror</span>
           <div class=" input-group">
           <label for="email"></label>
                    <input type="email"  name="email" placeholder="Enter Email" class="form-control form-label-group inputBorder" id="exampleInputEmail1"  value="{{old('email')}}" >
                    <i class="input-group-text fa-solid fa-envelope bg-change" style="cursor: pointer; display: block; "></i>
                    
           </div>
           <span class="text-danger">@error('email') {{$message}} @enderror</span>
           <div class=" input-group">
           <label for="password"></label>
                      <input type="password" name= "password" placeholder="Enter Password" id="pswd1" class="form-control inputBorder" >
                      <i id="eye1" class="input-group-text fa-solid fa-eye bg-change" style="cursor: pointer; display: block;"></i>
                      <i id="eyeClose1" class="input-group-text fa-solid fa-eye-slash bg-change" style="cursor: pointer;display: none;"></i>   
                      
           </div> 
           <span class="text-danger">@error('password') {{$message}} @enderror</span>  
           <div class=" input-group">
           <label for="confirm_password"></label>
                    <input type="password"name= "confirm_password"  placeholder="Confirm Password" id="pswd2" class="form-control inputBorder" >
                    <i id="eye2" class="input-group-text fa-solid fa-eye bg-change" style="cursor: pointer; display: block;;"></i>
                    <i id="eyeClose2" class="input-group-text fa-solid fa-eye-slash bg-change" style="cursor: pointer;display: none;"></i>      
                          
           </div class>
           <span class="text-danger">@error('confirm_password') {{$message}} @enderror</span> 


           <h4 class=" text-center ">Register As</h4>
      
          <div class="flex-box">
              <div class="column">
                <div class="wrapper">
                  <button class="reg-btn" type = "submit" onclick="location.href='{{ url('loginPage') }}'"><span class="fa-solid fa-user" style="font-size:6vh"></span></button>
                    <h6>Visitor</h6>
                </div>
              </div>
              <div class="column">
                <div class="wrapper">
                  <button class="reg-btn"><span class="playerReg"></span></button>
                    <h6>Player</h6>
                </div>
              </div>
              <div class="column">
                <div class="wrapper">
                  <button class="reg-btn"><span class="fa-solid fa-users" style="font-size:6vh"></button>
                    <h6>Team</h6>
                </div>
              </div>
              <div class="column">
                <div class="wrapper">
                  <button class="reg-btn"><span class="fa-solid fa-trophy" style="font-size:6vh"></button>
                    <h6>Tournament</h6>
                </div>
              </div>
          </div>

</form>

     




             <!-- <div class="container">
                    <div class="row">
                          <div class="col">
                                    <a href="/login" class="reg-btn font-weight-bold bg-change "> <i class=" fa-solid fa-user "></i> </a>
                           </div>
                           <div class="col-sm">
                                     <a href="/login" class="btn btn-light w-50 font-weight-bold "> <strong></strong> </a>
                           </div>
                           <div class="col-sm">
                                      <a href="/login" class="btn btn-light w-50 font-weight-bold "> <strong>Login</strong> </a>
                            </div>
                           <div class="col-sm">
                                       <a href="/login" class="btn btn-light w-50 font-weight-bold "> <strong>Login</strong> </a>
                            </div>
                   </div>
             </div> -->

          </div>   
       </div>
     </div>
  
    </body>
    <style>
             /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
 
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
input[type='number']:focus{
  background:transparent;
}
      </style>

    <script>
                  const eye1=document.getElementById('eye1');
                  const eyeClose1=document.getElementById('eyeClose1');
                  const eye2=document.getElementById('eye2');
                  const eyeClose2=document.getElementById('eyeClose2');
                  const pw1 = document.getElementById("pswd1");  
                  const pw2 = document.getElementById("pswd2"); 
                  
                  eye1.addEventListener('click',()=>{
                    if(eye1.style.display==='block'){
                      eye1.style.display='none'
                      eyeClose1.style.display='block';
                      document.getElementById('pswd1').type='text';    
                    }
                  })
                  eyeClose1.addEventListener('click',()=>{
                  
                  if(eyeClose1.style.display==='block'){
                    eyeClose1.style.display='none'
                    eye1.style.display='block';
                    document.getElementById('pswd1').type='password';
                  }
                  })
                  
                  eye2.addEventListener('click',()=>{
                  
                  if(eye2.style.display==='block'){
                    eye2.style.display='none'
                    eyeClose2.style.display='block';
                    document.getElementById('pswd2').type='text';    
                  }
                })
                eyeClose2.addEventListener('click',()=>{

                if(eyeClose2.style.display==='block'){
                  eyeClose2.style.display='none'
                  eye2.style.display='block';
                  document.getElementById('pswd2').type='password';
                }
                })
/*
function matchPassword() {  
 
  if(pw1 != pw2)  
  {   
    alert("Passwords did not match");  
  } else {  
    alert("Password created successfully");  
  }  
}  
*/

</script>
    
</html>
@endsection