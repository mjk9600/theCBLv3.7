@extends('layout')
@section('title', 'The CBL | welcome')
@section('content')
<!DOCTYPE html>
<html>
    <head>
        <title>TheCBL</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href={{url('css/bootstrap.css')}}>
        <link rel="stylesheet" href={{url('css/layout.css')}}>
        <style>
        @media screen and (max-width: 576px) {
         .centerButton{
             margin-left:3% !important;
         }
        }
        </style>
    </head>
    <body style='overflow:none;'>

    <div id="welcome">
            <div class="row m-1" >
                <div class="col-md-5 landing-text d-flex flex-column" style='margin-top:20vh;position: fixed;'>
                    <div class="" style="text-transform: uppercase;">
                            <h1>Take It To The Net</h1>
                    </div>
                    <div class="text-left">
                        <p>
                            Are You Ready For The Most Fun League In Basketball
                        </p>
                    </div>
                    <div class="row btn-login-register centerButton">
                        <div class="col-6">
                            <button type="submit" onclick="location.href='{{ url('loginPage') }}'" class="btn btn-light w-75 font-weight-bold " > <strong>Login</strong> </button>
                        </div>
                        <div class="col-6">
                            <button type="submit" onclick="location.href='{{ url('register') }}'" class="btn btn-light w-75 font-weight-bold"> <strong>Register</strong> </button>
                              
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
        <!-- <script   src={{url('js/bootstrap.bundle.js')}}></script> -->
    </body>
    <style>
            .btn:hover{
                    color:#e40a10;
                    border: 2px solid #e40a10;
            }
    </style>
    
</html>
@endsection