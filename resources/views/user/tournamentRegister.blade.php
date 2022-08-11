@extends('layout')
@section('title', 'The CBL | Tournament Register')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tournament Register</title>
    <link rel="stylesheet" href={{url('css/bootstrap.css')}}>
    <link rel="stylesheet" href={{url('css/layout.css')}}>
    <link rel="stylesheet" href={{url('css/tournamentRegister.css')}}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  
</head>
<body>
    <h1 class="text-center underLine">Tournament Registration</h1>

    <h3 class="text-center underLine mt-1">Host Information</h3>
    <br>

        <form  action="{{route('tournament')}}"  method="POST" enctype="multipart/form-data">
        <div class="container">

@if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
{{ csrf_field() }}
        <div class=" row g-sm-4">
            <div class="col-sm-4">
                <label for="name" class="form-label">Name *</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name"  >
                <span class="text-danger " >@error ('name') {{$message}} @enderror</span>
            </div>
            
            
            <div class="col-sm-4">
                <label for="email" class="form-label">Email *</label>
                <input type="email" name="email" id="e-mail" class="form-control" placeholder="Enter Email" >
                <span class="text-danger " >@error ('email') {{$message}} @enderror</span>
            </div>
            <div class="col-sm-4">
                <label for="mobileNumber" class="form-label">Mobile Number *</label>
                <input type="tel" name="mobileNumber" id="mobileNumber" class="form-control" placeholder="Enter Mobile Number"  >
                <span class="text-danger " >@error ('mobileNumber') {{$message}} @enderror</span>
            </div>
        </div>
    </div>
        <div class="container">
            <div class="row col-12 mt-5 mb-3">
                <h3 class="text-center underLine ">Tournament Information</h3>
                <br><br>
            </div>
            <div class="row g-sm-4">
                <div class="col-sm-4">
                    <div class="picture-container">
                        <div class="picture form-floating">
                            <img src="/user.png" class="picture-src" id="wizardPicturePreview" title="">
                            <label for="logo" class="form-label"></label>
                            <input type="file" name="logo" id="wizard-picture" class="form-control" >
                            <span class="text-danger " >@error ('logo') {{$message}} @enderror</span>
                        </div>
                    <h6>Tournament Logo</h6>
                       
                    </div>
                </div>
                <div class="col-sm-4">
                    <label for="tournament_name" class="form-label">Tournament Name *</label>
                    <input type="text" name="tournament_name" id="mobileNumber" class="form-control" placeholder="Enter Tournament Name" >
                    <span class="text-danger " >@error ('tournament_name') {{$message}} @enderror</span>
                </div>
                <div class="col-sm-4">
                    <label for="tournament_location" class="form-label">Tournament Location *</label>
                    <input type="text" name="tournament_location" id="mobileNumber" class="form-control" placeholder="Enter Tournament Location" >
                    <span class="text-danger " >@error ('tournament_location') {{$message}} @enderror</span>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-sm-4">
                <div class="col-sm-4">
                    <label for="startDate" class="form-label">Start Date *</label>
                    <input type="date" name="startDate" id="startDate" class="form-control" >
                    <span class="text-danger " >@error ('startDate') {{$message}} @enderror</span>
                </div>
                <div class="col-sm-4">
                    <label for="endDate" class="form-label">End Date *</label>
                    <input type="date" name="endDate" id="endDate" class="form-control" >
                    <span class="text-danger " >@error ('endDate') {{$message}} @enderror</span>
                </div>
                <div class="col-sm-4">
                    <label for="tournamentCategory" class="form-label">Tournament Category *</label>
                    <select name="tournamentCategory" id="tournamentCategory" class="form-control" >
                        <option value="none" selected disabled>Select Tournament Category</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <span class="text-danger " >@error ('tournamentCategory') {{$message}} @enderror</span>
                    <!-- <input type="tel" name="mobileNumber" id="mobileNumber" class="form-control"> -->
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row g-sm-4">
                <div class="col-sm-4">
                    <label for="tournamentType" class="form-label">Tournament Type *</label>
                    <select name="tournamentType" id="tournamentType" class="form-control" >
                        <option value="none" selected disabled>Select Tournament Type</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <span class="text-danger " >@error ('tournamentType') {{$message}} @enderror</span>
                </div>
                <div class="col-sm-4">
                    <label for="ageRestriction" class="form-label">Age Restriction *</label>
                    <select name="ageRestriction" id="ageRestriction" class="form-control" required>
                        <option value="none" selected disabled>Select Age Restriction</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <span class="text-danger " >@error ('ageRestriction') {{$message}} @enderror</span>
                </div>
                <div class="col-sm-4">
                    <label for="ageCutOff" class="form-label">Age Cutoff *</label>
                    <select name="ageCutOff" id="ageCutOff" class="form-control" >
                        <option value="none" selected disabled>Select Age</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <span class="text-danger " >@error ('ageCutOff') {{$message}} @enderror</span>
                </div>
            </div>
        </div>
        <div class=" container mt-3">
            <div class="row g-sm-4">
                <div class="col-sm-8">
                    <label for="aboutTournament">About Tournament </label>
                    <textarea name="aboutTournament" id="aboutTournament" class="form-control" rows="3" placeholder="Enter About Tournament"></textarea>
                    <span class="text-danger " >@error ('aboutTournament') {{$message}} @enderror</span>
                </div>
            </div>
        </div>
        <div class="container mt-3 mb-2">
            <div class="row g-3" >
                <div class=" row g-3 justify-content-between">
                    <div class=" col-4">
                        <button type="reset" class="btn btn-light Btn col-sm-6 fw-bold">Reset</button>
                    </div>
                    <div class=" col-4"></div>
                    <div class=" col-4 ">
                        <button type="submit" class="btn btn-light Btn col-sm-6 fw-bold">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    
 

   
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
    <script src="https://code.jquery.com/jquery-3.0.0.js" integrity="sha256-jrPLZ+8vDxt2FnE1zvZXCkCcebI/C8Dt5xyaQBjxQIo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>   
    <script src="../Score/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
    <script src="https://code.jquery.com/jquery-3.0.0.js" integrity="sha256-jrPLZ+8vDxt2FnE1zvZXCkCcebI/C8Dt5xyaQBjxQIo=" crossorigin="anonymous"></script>
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
@endsection