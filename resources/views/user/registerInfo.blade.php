@extends('layout')
@section('title', 'The CBL | Dashboard')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Register Info</title>
    <link rel="stylesheet" href={{url('css/bootstrap.css')}}>
    <link rel="stylesheet" href={{url('css/layout.css')}}>
    <link rel="stylesheet" href={{url('css/tournamentRegister.css')}}>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!--<script   src={{url('js/bootstrap.bundle.js')}}></script>-->
    </head>
<style>
/*    body{*/
/*        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;*/
/*        background: #000000;*/
/*        color: white;*/
/*    }*/
/*    li{*/
/*        list-style: none;*/
/*    }*/
/*    li label{*/
/*        margin-top: 1rem;*/
/*    }*/
/*    li input[type='text'],input[type='date'],input[type='tel'],input[type='email'],input[type='number'],select{*/
/*        border: none;*/
/*        outline: none;*/
/*        background:transparent;*/
/*        border:3px solid #ffffff;*/
/*        border-radius: 5px;*/
/*        color: #ffffff;*/
        
/*    }*/
/*    li input[type='text']:focus,input[type='date']:focus,input[type='tel']:focus,input[type='email']:focus,input[type='number']:focus,select:focus*/
/*    {*/
/*        border: 3px solid #ffffff;*/
/*        box-shadow: none;*/
/*        outline: none;*/
/*        background: transparent;*/
/*        color: #ffffff;*/
/*    }*/
/*   select option{*/
/*        background: black;*/
/*    }*/
/*    .btns{*/
/*        display: inline-block;*/
/*        overflow: auto;*/
/*        width: 30vh;*/
        /* background-color: aliceblue; */
/*        white-space: nowrap;*/
/*        margin: 0 auto;*/
/*    }*/
/*    #cancelBtn{*/
/*        float: left;*/
/*        margin-left: 5.7rem;*/
/*        width: 10%;*/
/*        height: 2.5rem;*/
/*        color: #000000;*/
/*        background-color: #ffffff;*/
/*        border: none;*/
/*        border-radius: 4px;*/
/*    }*/
/*    #submitBtn{*/
/*        float: right;*/
/*        margin-right: 3.7rem;*/
/*        width: 10%;*/
/*        height:2.5rem;*/
/*        color: black;*/
/*        background-color: #ffffff;*/
/*        border: none;*/
/*        border-radius: 4px;*/
/*    }*/
/*    .title-1{*/
        /* margin: 10px; */
/*        text-align: center;*/
/*        font-size: 3vw;*/
/*        font-weight: bold;*/
/*        width: max-content;*/
/*        margin: auto;*/
/*        border-bottom: 1px solid #ffffff;*/
/*    }*/
/*    .op{*/
/*        display: flex;*/
/*        flex-direction: row;*/
/*    }*/
/*    .title-2{*/
/*        text-align: center;*/
/*        margin-top: 3px;*/
/*        font-size: 1.7vmax;*/
/*        font-weight: bold;*/
/*    }*/
/*    @media only screen and (max-width: 540px) {*/
/*        .wrapExtra{*/
/*            display: flex;*/
/*            justify-content: space-around;*/
/*            flex-direction: column;*/
/*            flex-wrap: wrap;*/
/*        }*/
/*        .title-1,.title-2{*/
/*            font-size: larger;*/
/*        }*/
/*        .Btn{*/
/*            width: 6rem !important;*/
/*            height: 2.5rem;*/
/*            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;*/
/*            margin: 10px 10px 10px 10px;*/
            /* font-size: 1.2rem; */
/*        }*/
        
/*    }*/
/*    @media only screen and (max-width:820px){*/
/*        .option-menu{*/
/*            height: 2.5vh;*/
/*            width: 10rem;*/
/*        }*/
/*        .option-size{*/
/*            width: 10rem;*/
/*        }*/
/*    }*/
/*    .option-color{*/
/*        background: #00000000;*/
/*    }*/
/*    .option-menu{*/
/*        display: flex;*/
/*        width: 100%;*/
/*        height: 2.7rem;*/
/*        border-radius: 0.375rem;*/
        /* background-color: black; */
/*    }*/
   
/*    .option-size{*/
    /* display: block; */
/*    width: 15rem;*/
/*    font-weight: 400;*/
/*    color: #212529;*/
/*    background-color:transparent;*/
/*    }*/
/*    ::-webkit-calendar-picker-indicator {*/
/*    filter: invert(1);*/
/*    }*/
    /* Chrome, Safari, Edge, Opera */
/*input::-webkit-outer-spin-button,*/
/*input::-webkit-inner-spin-button {*/
/*  -webkit-appearance: none;*/
/*  margin: 0;*/
 
/*}*/

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
     
</style>
<body>
    <!--<h1 class="title-1">Player Registration</h1>-->
    <!--<h2 class="title-2">Basic Information</h2>-->
    <!--<form name= "playerReg" action="{{route('user.store')}}" method='post'>-->
    <!--@if(Session::has('success'))-->
    <!--                    <div class="alert alert-success">{{Session::get('success')}}</div>-->
    <!--                    @endif-->
    <!--                    @if(Session::has('fail'))-->
    <!--                    <div class="alert alert-danger">{{Session::get('fail')}}</div>-->
    <!--                    @endif-->
    <!--@csrf-->
    <!--<div class="d-flex justify-content-around mt-5 flex-column wrapExtra">-->
    <!--    <div class="d-flex justify-content-around flex-row wrapExtra">-->
    <!--        <ol>-->
    <!--            <li><label for="p_firstName" class="form-label">First Name * </label></li>-->
    <!--            <li><input type="text" name="p_firstName" class="form-control" placeholder="Enter First Name" required/></li>-->
    <!--        </ol>-->
    <!--        <ol>-->
    <!--            <li><label for="p_middleName" class="form-label">Middle Name </label></li>-->
    <!--            <li><input type="text" name="p_middleName" class="form-control" placeholder="Enter Middle Name" required/></li>-->
    <!--        </ol>-->
    <!--        <ol>-->
    <!--            <li><label for="p_lastName" class="form-label">Last Name *</label></li>-->
    <!--            <li><input type="text" name="p_lastName" class="form-control" placeholder="Enter Last Name" required/></li>-->
    <!--        </ol>-->
    <!--    </div>-->

    <!--    <div class="d-flex justify-content-around flex-row wrapExtra">-->
    <!--        <ol>-->
    <!--            <li><label for="p_whatsapp_num" class="form-label">Mobile No.(WhatsApp) * </label></li>-->
    <!--            <li><input type="number" name="p_whatsapp_num" class="form-control" placeholder="Enter Mobile Number" required/></li>-->
    <!--        </ol>-->
            
    <!--        <ol>    -->
    <!--            <li><label for="p_alt_num" class="form-label">Alternative No.(Calling)</label></li>-->
    <!--            <li><input type="number" name="p_alt_num" class="form-control" placeholder="Enter Alternative No." required/></li>-->
    <!--        </ol>-->
    <!--        <ol>    -->
    <!--            <li><label for="p_email" class="form-label">Email </label></li>-->
    <!--            <li><input type="email" name="p_email" class="form-control" placeholder="Enter Email" required/></li>-->
    <!--        </ol>-->
    <!--    </div>-->

    <!--    <div class="d-flex justify-content-around flex-row wrapExtra">-->
    <!--        <ol>-->
    <!--            <li><label for="dateOfbirth" class="form-label">Date Of Birth *</label></li>-->
    <!--            <li class="option-size"><input type="date" name="dateOfbirth" class="form-control" placeholder="Enter Date of Birth" required/></li>-->
    <!--        </ol>-->
    <!--        <ol>-->
    <!--            <li><label for="p_gender" class="form-label">Gender *</label><li>-->
                <!-- <li><input type="text" name="gender" class="form-control" required/></li> -->
    <!--             <li class="option-size">   -->
    <!--                <select name="p_gender" class="option-menu">-->
    <!--                <option value="none" selected>Select Gender</option>  -->
    <!--                <option value="male" class="op">Male</option>-->
    <!--                <option value="female">Female</option>-->
    <!--            </select></li>-->
    <!--        </ol>-->
    <!--        <ol>-->
    <!--            <li><label for="p_pincode" class="form-label">Pincode *</label></li>-->
    <!--            <li><input type="text" name="p_pincode" class="form-control" placeholder="Enter Pincode" required/></li>-->
    <!--        </ol>            -->
    <!--    </div>-->
    <!--    <div class="d-flex justify-content-around flex-row wrapExtra">-->
    <!--        <ol> -->
    <!--            <li><label for="p_city" class="form-label">City *</label></li>-->
    <!--            <li class="option-size">-->
    <!--                <select name="p_city" class="option-menu">-->
    <!--                    <option value="none" selected>Select City</option>-->
    <!--                    <option value="ahmedabad">Ahmedabad</option>-->
    <!--                    <option value="vadodara">Vadodara</option>-->
    <!--                    <option value="Surat">Surat</option>-->
    <!--                </select>-->
    <!--            </li>-->
    <!--        </ol>-->
    <!--        <ol>-->
    <!--            <li><label for="p_state" class="form-label">State *</label></li>-->
    <!--            <li class="option-size">-->
    <!--                <select name="p_state" class="option-menu">-->
    <!--                    <option value="none" selected>Select State</option>-->
    <!--                    <option value="gujarat">Gujarat</option>-->
    <!--                    <option value="mumbai">Mumbai</option>-->
    <!--                    <option value="delhi">Delhi</option>-->
    <!--                </select>-->
    <!--            </li>-->
    <!--        </ol>-->
    <!--        <ol>    -->
    <!--            <li><label for="p_country" class="form-label">Country *</label></li>-->
    <!--            <li class="option-size">-->
    <!--                <select name="p_country" class="option-menu">-->
    <!--                    <option value="none" selected>Select Country</option>-->
    <!--                    <option value="in">India</option>-->
    <!--                    <option value="en">England</option>-->
    <!--                    <option value="au">Europe</option>-->
    <!--                </select>-->
    <!--            </li>-->
    <!--        </ol>-->
    <!--    </div>-->
    <!--    <div class="d-flex justify-content-around mt-1 flex-column wrapExtra">-->
    <!--    <table style="  margin-top: -1vw;">-->
    <!--        <tr>-->
    <!--                <td>-->
    <!--                    <div style="margin-left:18%;">-->
    <!--                        <button type="reset" onclick="location.href='{{ url('/') }}'" class="btn btn-light  mt-5 Btn" style="font-size:20px;font-weight:bold;width: 40%;">Cancel</button>-->
    <!--                    </div>-->
    <!--                </td>-->
    <!--                <td>-->

    <!--                </td>-->
    <!--                <td align="right">-->
    <!--                    <div style="margin-right: 12%;">-->
    <!--                        <button type="submit"  onclick="location.href='{{ url('playerGameInfo') }}'" class="btn btn-light mt-5 Btn" style="font-size:20px;font-weight:bold ;width: 40%; ">Next</button>-->
    <!--                    </div> -->
    <!--                </td>-->
    <!--        </tr>-->
    <!--    </table></div>-->
    <!--</div> -->
    <!--</form>-->
    <div class="container">
    <form name= "playerReg" action="{{route('user.store')}}" method='post'>
    <h1 class="text-center underLine">Player Registration</h1>
    <h2 class="text-center ">Basic Information</h2>
    @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
    @csrf
    <div class="row g-sm-4">
        <div class="col-sm-4 mt-3">
            <label for="p_firstName" class="form-label">First Name * </label>
            <input type="text" name="p_firstName" class="form-control" placeholder="Enter First Name" required/>
        </div>    
        <div class="col-sm-4 mt-3">
            <label for="p_middleName" class="form-label">Middle Name </label>
            <input type="text" name="p_middleName" class="form-control" placeholder="Enter Middle Name" required/>
        </div>
        <div class="col-sm-4 mt-3">    
            <label for="p_lastName" class="form-label">Last Name *</label>
            <input type="text" name="p_lastName" class="form-control" placeholder="Enter Last Name" required/>
        </div>
    </div>

    <div class="row g-sm-4 mt-2">
            <div class="col-sm-4 mt-3">
                <label for="p_whatsapp_num" class="form-label">Mobile No.(WhatsApp) * </label>
                <input type="number" name="p_whatsapp_num" class="form-control" placeholder="Enter Mobile Number" required/>
            </div>
            
            <div class="col-sm-4 mt-3">    
                <label for="p_alt_num" class="form-label">Alternative No.(Calling)</label>
                <input type="number" name="p_alt_num" class="form-control" placeholder="Enter Alternative No."/>
            </div>
            <div class="col-sm-4 mt-3">    
                <label for="p_email" class="form-label">Email </label>
                <input type="email" name="p_email" class="form-control" placeholder="Enter Email"/>
            </div>
        </div>

        <div class="row g-sm-4 mt-2">
            <div class="col-sm-4 mt-3">
                <label for="dateOfbirth" class="form-label">Date Of Birth *</label>
                <input type="date" name="dateOfbirth" class="form-control" placeholder="Enter Date of Birth" required/>
            </div>
            <div class="col-sm-4 mt-3">
                <label for="p_gender" class="form-label">Gender *</label>   
                <select name="p_gender" class="form-control" required>
                    <option value="none" selected>Select Gender</option>  
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="col-sm-4 mt-3">
                <label for="p_pincode" class="form-label">Pincode *</label>
                <input type="text" name="p_pincode" class="form-control" placeholder="Enter Pincode" required/>
            </div>            
        </div>
        <div class="row g-sm-4 mt-2">
            <div class="col-sm-4 mt-3"> 
                <label for="p_city" class="form-label">City *</label>
                    <select name="p_city" class="form-control">
                        <option value="none" selected>Select City</option>
                        <option value="ahmedabad">Ahmedabad</option>
                        <option value="vadodara">Vadodara</option>
                        <option value="Surat">Surat</option>
                    </select>
                
            </div>
            <div class="col-sm-4 mt-3">
                <label for="p_state" class="form-label">State *</label>
                    <select name="p_state" class="form-control">
                        <option value="none" selected>Select State</option>
                        <option value="gujarat">Gujarat</option>
                        <option value="mumbai">Mumbai</option>
                        <option value="delhi">Delhi</option>
                    </select>
                
            </div>
            <div class="col-sm-4 mt-3">    
                <label for="p_country" class="form-label">Country *</label>
                    <select name="p_country" class="form-control">
                        <option value="none" selected>Select Country</option>
                        <option value="in">India</option>
                        <option value="en">England</option>
                        <option value="au">Europe</option>
                    </select>
            </div>
        </div>
        <div class="row justify-content-between mt-3 mb-2" >
            <div class=" row g-3 justify-content-between">
                <div class=" col-4">
                    <button type="reset" class="btn btn-light Btn col-sm-6">Reset</button>
                </div>
                <div class=" col-4"></div>
                <div class=" col-4 ">
                    <button type="submit" class="btn btn-light Btn col-sm-6">Submit</button>
                </div>
            </div>
        </div>
    </div> 
    </form>
    </div> 
</body>
</html>
@endsection