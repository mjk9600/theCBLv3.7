@extends('layout')
@section('title', 'The CBL | Player Register')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Player Register</title> 
    <!-- <link rel="stylesheet" href="..//player.css"> -->
    <link rel="stylesheet" href={{url('css/playerRegister.css')}}>
    <!--<link rel="stylesheet" href={{url('css/bootstrap.css')}}>-->
        <link rel="stylesheet" href={{url('css/layout.css')}}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        .btn:hover{
            color:#e40a10;
            border:1px solid #e40a10;
        }
    </style>
</head>
<body>
    
    <form action="{{route('player')}}" method="POST" enctype="multipart/form-data">
        <div class="container">
            <h1 class="text-center underLine">Player Registration</h1>
             @if(Session::has('success'))
                <div class="alert alert-success m-2">{{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class="alert alert-danger m-2">{{Session::get('fail')}}</div>
                @endif
            {{ csrf_field() }}
            <div class=" row g-sm-4">
                <div class="col-sm-4 ">
                    <label for="fname" class="form-label fw-bold mt-2">First Name * </label>
                    <input type="text" name="fname" class="form-control" placeholder="Enter First Name" value="{{old('fname')}}" required>
                     <span class="text-danger " >@error ('fname') {{$message}} @enderror</span> 
                </div>
                <div class="col-sm-4">
                    <label for="mname" class="form-label fw-bold mt-2">Middle Name </label>
                    <input type="text" name="mname" class="form-control" placeholder="Enter Middle Name" value="{{old('mname')}}">
                </div>
                <div class="col-sm-4">
                    <label for="lname" class="form-label fw-bold mt-2">Last Name *</label>
                    <input type="text" name="lname" class="form-control" placeholder="Enter Last Name" value="{{old('lname')}}" required>
                     <span class="text-danger " >@error ('lname') {{$message}} @enderror</span> 
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-sm-4 mt-0">
                <div class="col-sm-4">
                    <label for="whatsapp_num" class="form-label fw-bold mt-1">Mobile No.(WhatsApp) * </label>
                    <input type="tel" name="whatsapp_num" maxlength="10" class="form-control" placeholder="Enter Mobile Number" value="{{old('whatsapp_num')}}" required>
                     <span class="text-danger " >@error ('whatsapp_num') {{$message}} @enderror</span> 
                </div>
                <div class="col-sm-4">
                    <label for="alt_num" class="form-label fw-bold mt-1">Alternative No.</label>
                    <input type="tel" name="alt_num" class="form-control" maxlength="10" placeholder="Enter Alternative No." value="{{old('alt_num')}}" >
                     <span class="text-danger " >@error ('alt_num') {{$message}} @enderror</span> 
                </div>
                <div class="col-sm-4">
                    <label for="email" class="form-label fw-bold mt-1">Email *</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Email" value="{{old('email')}}" required>
                     <span class="text-danger " >@error ('email') {{$message}} @enderror</span> 
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-sm-4 mt-0">
                <div class="col-sm-4">
                    <label for="dateOfbirth" class="form-label fw-bold mt-1">Date Of Birth *</label>
                    <input type="date" name="dateOfBirth" class="form-control" placeholder="Enter Date of Birth" value="{{old('dateOfBirth')}}" required>
                     <span class="text-danger " >@error ('dateOfBirth') {{$message}} @enderror</span> 
                </div>
                <div class="col-sm-4">
                    <label for="gender" class="form-label fw-bold mt-1">Gender *</label>
                    <select name="gender" class="form-control" value="{{old('gender')}}" >
                        <option value="none" selected disabled>Select Gender</option>  
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                     <span class="text-danger " >@error ('gender') {{$message}} @enderror</span> 
                </div>
                <div class="col-sm-4">
                    <label for="pincode" class="form-label fw-bold mt-1">Pincode *</label>
                    <input type="text" name="pincode" id="pincode" class="form-control" placeholder="Enter Pincode"  onkeypress="getDetails()" required/ >
                     <span class="text-danger " >@error ('pincode') {{$message}} @enderror</span> 
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-sm-4 mt-0">
                <div class="col-sm-4">
                    <label for="city" class="form-label fw-bold mt-1">City * </label>
                    <input type="text" name="city" id="city" class="form-control" placeholder="Enter City Name" value="{{old('city')}}" required>
                     <span class="text-danger " >@error ('city') {{$message}} @enderror</span> 
                </div>
                <div class="col-sm-4">
                    <label for="state" class="form-label fw-bold mt-1">State *</label>
                    <input type="text" name="state"  id="state" class="form-control" placeholder="Enter State Name" value="{{old('state')}}" required>
                     <span class="text-danger " >@error ('state') {{$message}} @enderror</span> 
                </div>
                <div class="col-sm-4">
                    <label for="country" class="form-label fw-bold mt-1">Country*</label>
                    <input type="text" name="country"  id="country" class="form-control" placeholder="Enter Country Name" value="{{old('country')}}" required>
                     <span class="text-danger " >@error ('country') {{$message}} @enderror</span> 
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-sm-4 mt-1">
                <div class="col-sm-4">
                    <label for="height" class="form-label fw-bold mt-1">Height (CM) *</label>
                    <input type="number" name="height" class="form-control" placeholder="Enter Height in CM" value="{{old('height')}}" required>
                     <span class="text-danger " >@error ('height') {{$message}} @enderror</span> 
                </div>
                <div class="col-sm-4">
                    <label for="weight" class="form-label fw-bold mt-1">Weight (KG.) *</label>
                    <input type="number" name="weight" class="form-control" placeholder="Enter Weight in KG." value="{{old('weight')}}"  required>
                     <span class="text-danger " >@error ('weight') {{$message}} @enderror</span> 
                </div>
                <div class="col-sm-4">
                    <label for="position" class="form-label fw-bold mt-1">Player Position *</label>
                    <select name="position" class="form-control" value="{{old('position')}}" required>
                        <option value="none" selected disabled>Select Type</option>
                        <option value="captan">Captan</option>    
                    </select>
                     <span class="text-danger " >@error ('position') {{$message}} @enderror</span> 
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-sm-4 mt-0">
                <div class="col-sm-4">
                    <label for="level" class="form-label fw-bold mt-1">Player Level *</label>
                    <select name="level" class="form-control" value="{{old('level')}}" required>
                        <option value="none" selected disabled>Select Level</option>
                        <option value="elementary">Elementary</option>
                        <option value="intermediate">Intermediate</option>
                        <option value="veryadvanced">Very Advanced</option>
                    </select>
                     <span class="text-danger " >@error ('level') {{$message}} @enderror</span> 
                </div>
                <div class="col-sm-4">
                    <label for="document" class="form-label fw-bold mt-1">Document *</label>
                    <input type="file" id="p_document" name="document" class="form-control" value="{{old('document')}}" required>
                     <span class="text-danger " >@error ('document') {{$message}} @enderror</span> 
                </div>
                <div class="col-sm-4">
                    <label for="jersy" class="form-label fw-bold mt-1">Prefered Jersey Number *</label>
                    <input type="number" name="jersy" id="p-jersy" class="form-control" placeholder="Enter Jersey Number" value="{{old('jersy')}}" required>
                     <span class="text-danger " >@error ('jersy') {{$message}} @enderror</span> 
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-sm-4 mt-0">
                <div class="col-sm-8">
                    <label for="experiance" class="form-label fw-bold mt-1">Experience (Achievement) *</label>
                    <textarea name="experiance"  class="form-control" rows="3" id="p_experiance" value="{{old('experiance')}}"  required></textarea>
                     <span class="text-danger col-sm-4" >@error ('experiance') {{$message}} @enderror</span> 
                </div>
                <div class="col-sm-4 ">
                    <input type="checkbox" id="check" name="termId"><label for="check" class="ms-1" required> <h6>i accept all Term And Condition</h6></label>
                     <span class="text-danger " >@error ('termId') {{$message}} @enderror</span> 
                </div>
            </div>
        </div>
        <div class="container mt-1 mb-2">
            <div class="row justify-content-between" >
                <div class="row g-3 justify-content-between">
                    <div class=" col-4 ">
                        <button  class="btn btn-light fw-bolder col-sm-6">Cancel</button>
                    </div>
                    <div class="col-4 ">
                        <button type="reset" class="btn btn-light fw-bolder col-sm-6">Reset</button>
                    </div>
                    <div class="col-4 ">
                        <button type="submit" class="btn btn-light fw-bolder col-sm-6">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
        var showing = [1, 0];
        var pages = ['firstPage', 'secondPage'];
        function next() {
            var pElems = [];
            for (var i = 0; i < pages.length; i++) {
                pElems.push(document.getElementById(pages[i]));   
            }
            for (var i = 0; i < showing.length; i++) {
                if (showing[i] == 1) {
                    pElems[i].style.display = 'none';
                    showing[i] = 0;
                    if (i == showing.length - 1) {
                        pElems[0].style.display = 'block';
                        showing[0] = 1;
                    } else {
                        pElems[i + 1].style.display = 'block';
                        showing[i + 1] = 1;
                    }
                    break;
                }
            }      
        }
    </script>
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>-->
    <script   src={{url('js/zipcode.js')}}></script>
    <!--<script   src={{url('js/bootstrap.bundle.js')}}></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>
@endsection



        