@extends('layout')
@section('title', 'The CBL | Player Information')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/userProfile.css">
</head>
<body class="mb-3">
    <h2 class="text-center text-decoration-underline">My Profile</h2>
    <form action="#">
    <div class="d-flex justify-content-center mt-2">
        <div class="picture-container">
            <div class="picture">
                <img src="/index.png" class="picture-src" id="wizardPicturePreview" title="">
                <input type="file" id="wizard-picture" class="">
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row g-sm-3">
            <div class="col-sm-3 mt-1">
                <label for="firstName" class="form-label fw-bold">First Name :</label>
                <input type="text" name="firstName" id="firstName" class="form-control" value="{{ auth()->user()->name }}" required disabled/>
            </div>
            <div class="col-sm-3 mt-1">
                <label for="middleName" class="form-label fw-bold">Middle Name :</label>
                <input type="text" name="middleName" id="middleName" class="form-control" value="Null" required disabled/>
            </div>
            <div class="col-sm-3 mt-1">
                <label for="lastName" class="form-label fw-bold">Last Name :</label>
                <input type="text" name="lastName" id="lastName" class="form-control" value="Null" required disabled/>
            </div>
            <div class="col-sm-3 mt-1">
                <label for="email" class="form-label fw-bold">Email :</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ auth()->user()->email }}" required disabled/>
            </div>
        </div>
        <div class="row g-sm-3 mt-1">
            <div class="col-sm-3 mt-1">
                <label for="mobileNumber" class="form-label fw-bold">Mobile Number :</label>
                <input type="tel" name="mobileNumber" id="mobileNumber" class="form-control" value="{{ auth()->user()->mobile }}" required disabled/>
            </div>
            <div class="col-sm-3 mt-1">
                <label for="whatappNumber" class="form-label fw-bold">WhatsApp Number :</label>
                <input type="tel" name="whatappNumber" id="whatappNumber" class="form-control" value="Null" required disabled/>
            </div>
            <div class="col-sm-6 mt-1">
                <label for="address" class="form-label fw-bold">Address :</label>
                <!-- <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required disabled/> -->
                <textarea name="address" id="address" rows="1" class="form-control" disabled></textarea>
            </div>
        </div>
        <div class="row g-sm-3 mt-1">
            <div class="col-sm-3 mt-1">
                <label for="pincode" class="form-label fw-bold">Pin-Code :</label>
                <input type="tel" maxlength="6" name="pincode" id="pincode" class="form-control" value="Null" required disabled/>
            </div>
            <div class="col-sm-3 mt-1">
                <label for="city" class="form-label fw-bold">City :</label>
                <input type="text" name="city" id="city" class="form-control" value="Null" required disabled/>
            </div>
            <div class="col-sm-3 mt-1">
                <label for="state" class="form-label fw-bold">State :</label>
                <input type="text" name="state" id="state" class="form-control" value="Null" required disabled/>
            </div>
        </div>
    </div>
    <h3 class="text-center mt-3 fw-bold">Team Details</h3>
    <div class="container border rounded-2">
        <div class="row g border-bottom rounded-2 m-1">
            <div class="col-sm-2 mt-3">
                <div class="picture-container">
                    <div class="pictureLogo">
                        <img src="/index.png" class="picture-src" id="wizardPicturePreview" title="">
                        <input type="file" id="wizard-picture" class="">
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <h5 class="text-center border border-3 border-light mt-3 p-1 rounded-2">Team Name</h5>
            </div>
            <div class="col-sm-2">
                <h5 class="text-center border border-3 border-light mt-3 p-1 rounded-2">Owner Name</h5>
            </div>
            <div class="col-sm-2">
                <h5 class="text-center border border-3 border-light mt-3 p-1 rounded-2">Owner Number</h5>
            </div>
            <div class="col-sm-3">
                <h5 class="text-center border border-3 border-light mt-3 p-1 rounded-2">Match Win/Total Match</h5>
            </div>
        </div>
        <div class="row g border-bottom rounded-2 m-1">
            <div class="col-sm-2 mt-3">
                <div class="picture-container">
                    <div class="pictureLogo">
                        <img src="/index.png" class="picture-src" id="wizardPicturePreview" title="">
                        <input type="file" id="wizard-picture" class="">
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <h5 class="text-center border border-3 border-light mt-3 p-1 rounded-2">Team Name</h5>
            </div>
            <div class="col-sm-2">
                <h5 class="text-center border border-3 border-light mt-3 p-1 rounded-2">Owner Name</h5>
            </div>
            <div class="col-sm-2">
                <h5 class="text-center border border-3 border-light mt-3 p-1 rounded-2">Owner Number</h5>
            </div>
            <div class="col-sm-3">
                <h5 class="text-center border border-3 border-light mt-3 p-1 rounded-2">Match Win/Total Match</h5>
            </div>

        </div>
    </div> 
    <div class="container mt-3">
        <button class="btn btn-light col-sm-2 fw-bold">Edit</button>
    </div>
</form>
    <script>
        document.getElementById("address").value = "Address"; 
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

@endsection