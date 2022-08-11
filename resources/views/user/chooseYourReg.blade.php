@extends('layout')
@section('title', 'The CBL | Dashboard')
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
     <!--<script   src={{url('js/bootstrap.bundle.js')}}></script>-->

    </head>
    <body >
    <body class="bg">
        <div class="container pt-3 pb-5">
            <div class="row pt-3 pb-3">
                <div class="col-lg-4 d-flex flex-column align-items-center justify-content-around py-5">
                    <div class="block-design d-flex flex-column align-items-center justify-content-around pt-2 pb-2" onclick="location.href='{{ url('player') }}'">
                        <span class="fa-5x fa-solid fa-user pt-2 pb-2 f-icon">
                        </span>
                        <button class="btn btn-light btn-hover fw-bold" onclick="location.href='{{ url('player') }}'" >Player Registation</button>
                    </div>
                </div>
                <div class="col-lg-4 d-flex flex-column align-items-center justify-content-around py-5">
                    <div class="block-design d-flex flex-column align-items-center justify-content-around pt-2 pb-2" onclick="location.href='{{ url('teamReg') }}'">
                        <span class="fa-5x fa-solid fa-users pt-2 pb-2 f-icon">
                        </span>
                        <button class="btn btn-light btn-hover fw-bold" onclick="location.href='{{ url('teamReg') }}'">Team Registation</button>
                    </div>
                </div>
                <div class="col-lg-4 d-flex flex-column align-items-center justify-content-around py-5">
                    <div class="block-design d-flex flex-column align-items-center justify-content-around pt-2 pb-2" onclick="location.href='{{ url('tournament') }}'">
                        <span  class="fa-5x fa-solid fa-trophy pt-2 pb-2 f-icon">
                        </span>
                        <button class="btn btn-light btn-hover fw-bold" onclick="location.href='{{ url('tournament') }}'">Tournament Registration</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
<style>
     .block-design
        {
            color: #ffffff;
            height: 40vh;
            width: 80%;
            border: #ffffff solid 5px;
            border-radius: 40px;
            align-items: center;
            justify-content: space-around;
        }
        .block-design:hover
        {
            color: #e40a10;
            border: solid #e40a10 7px;
        }
        .block-design:hover .btn-hover
        {
            color: #e40a10;
            border: solid #e40a10 3px;
        }
 </style>
</html>
@endsection