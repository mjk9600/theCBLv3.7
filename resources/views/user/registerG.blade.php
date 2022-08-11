<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Register Info</title>
    <link rel="stylesheet" href={{url('css/bootstrap.css')}}>
        <link rel="stylesheet" href={{url('css/layout.css')}}>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
     <script   src={{url('js/bootstrap.bundle.js')}}></script>
</head>
<style>
    body{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        background: #000000;
        color: white;
    }   
    li{
        list-style: none;
    }
    li label{
        margin-top: 1rem;
    }
    li input[type='text'],input[type='date'],input[type='tel'],input[type='file'],input[type='number'],select{
        border: none;
        outline: none;
        background:transparent;
        border:3px solid #ffffff;
        border-radius: 5px;
        color: #ffffff;
        
    }
    li input[type='text']:focus,input[type='date']:focus,input[type='file']:focus,input[type='tel']:focus,input[type='number']:focus,select:focus
    {
        border: 3px solid #ffffff;
        box-shadow: none;
        outline: none;
        background: transparent;
        color: #ffffff;
    }
    select option{
        background: black;
        
    }
    .btns{
        display: inline-block;
        overflow: auto;
        width: 30vh;
        /* background-color: aliceblue; */
        white-space: nowrap;
        margin: 0 auto;
    }
    #cancelBtn{
        float: left;
        margin-left: 5.7rem;
        width: 10%;
        height: 2.5rem;
        color: #000000;
        background-color: #ffffff;
        border: none;
        border-radius: 4px;
    }
    #submitBtn{
        float: right;
        margin-right: 3.7rem;
        width: 10%;
        height:2.5rem;
        color: black;
        background-color: #ffffff;
        border: none;
        border-radius: 4px;
    }
    .title-1{
        /* margin: 10px; */
        text-align: center;
        font-size: 3vw;
        font-weight: bold;
        width: max-content;
        margin: auto;
        border-bottom: 1px solid #ffffff;
    }
    .op{
        display: flex;
        flex-direction: row;
    }
    .title-2{
        text-align: center;
        margin-top: 3px;
        font-size: 1.7vmax;
        font-weight: bold;
    }
    @media only screen and (max-width: 550px) {
        .wrapExtra{
            display: flex;
            justify-content: space-around;
            flex-direction: column;
            flex-wrap: wrap;
        }
        .title-1,.title-2{
            font-size: larger;
        }
        .Btn{
            width: 4rem !important;
            height: 2rem;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            margin: 10px 10px 10px 10px;
            font-size: 0.7rem !important;
        }
        .check{
            font-size: 15px !important;
        }
        .olMargin{
            margin-left: -30px !important;
        }
        .t-width{
            width: 250px !important;
        }
        
    }
    @media only screen and (min-width:768px){
        .olMargin{
            margin-left: -20px !important;
        }
    }
    .option-color{
        background: #00000000;
    }
    .option-menu{
        display: flex;
        width: 100%;
        height: 2.7rem;
        border-radius: 0.375rem;
        /* background-color: black; */
    }
    .option-size{
    /* display: block; */
    width: 15rem;
    font-weight: 400;
    color: #212529;
    background-color:transparent;
    }
    ::-webkit-calendar-picker-indicator {
    filter: invert(1);
    }
    .bg-remove-input{
        border: 3px solid white;
        background: transparent;
        border:solid white;
        }
        .bg-remove-input:focus{
        background: transparent;
        border:3px solid white;
        color: white;
        outline: 0;
        }
        td{
        padding-bottom: 2vw;
        padding-left: 7vw;
        }
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
</style>
<body>
    <h1 class="title-1">Player Registration</h1>
    <h2 class="title-2">Game Related</h2>
    <form name= "playerReg" action="{{route('user.store')}}" method='post' enctype="multipart/form-data" class="form-style w-100">
    @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
    @csrf
    <div class="d-flex justify-content-around mt-5 flex-column wrapExtra">
        <div class="d-flex justify-content-around flex-row wrapExtra">

        <input type="hidden" name="p_firstName" />
        <input type="hidden" name="p_middleName" />
        <input type="hidden" name="p_lastName" />
        <input type="hidden" name="p_whatsapp_num" />
        <input type="hidden" name="p_alt_num" />
        <input type="hidden" name="p_email" />
        <input type="hidden" name="dateOfbirth" />
        <select name="p_gender" class="option-menu"  hidden>
                    <option value="none" selected>Select Gender</option>  
                    <option value="male" class="op">Male</option>
                    <option value="female">Female</option>
    </select>
         <input type="hidden" name="p_pincode" />
         <select name="p_city" class="option-menu" hidden>
                        <option value="none" selected>Select City</option>
                        <option value="ahmedabad">Ahmedabad</option>
                        <option value="vadodara">Vadodara</option>
                        <option value="Surat">Surat</option>
            </select>
            <select name="p_state" class="option-menu"  hidden>
                        <option value="none" selected>Select State</option>
                        <option value="gujarat">Gujarat</option>
                        <option value="mumbai">Mumbai</option>
                        <option value="delhi">Delhi</option>
             </select>
             <select name="p_country" class="option-menu"   hidden>
                        <option value="none" selected>Select Country</option>
                        <option value="in">India</option>
                        <option value="en">England</option>
                        <option value="au">Europe</option>
                    </select>


            <ol>
                <li><label for="p_height" class="label-title">Height (CM) *</label></li>
                <li><input type="number" name="p_height" class="form-control" placeholder="Enter Height in CM" ></li>
            </ol>
            <ol>
                <li><label for="p_weight" class="label-title">Weight (KG.) *</label></li>
                <li><input type="number" name="p_weight" class="form-control" placeholder="Enter Weight in KG." ></li>
            </ol>
            <ol>
                <li><label for="p_position" class="label-title">Player Position *</label></li>
                <li class="option-size"><select name="p_position" class="option-menu">
                    <option value="none" selected>Select Type</option>
                    <option value="captan">Captan</option>    
                </select></li>
            </ol>
        </div>

        <div class="d-flex justify-content-around flex-row wrapExtra">            
            <ol>    
                <li><label for="p_level" class="form-label">Player Level *</label></li>
                <li class="option-size">
                    <select name="p_level" class="option-menu">
                        <option value="none" selected>Select Level</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </li>
            </ol>
            <ol class="mt-1">
                <li><label for="p_file" class="label-title ">Document *</label></li>          
                <li><input type="file" id="p_document" name="p_file" class="form-control option-size" accept="image/*,.pdf"></li>
            </ol>
            <ol>    
                <li><label for="p_jersy" class="label-title">Prefered Jersey Number *</label></li>
                <li><input type="number" name="p_jersy" id="p-jersy" class="form-control bg-remove-input set-width "  placeholder="Enter Jersey Number" ></li>
            </ol>
        </div>
        <div class="d-flex justify-content-around flex-row wrapExtra ">
            <ol class="olMargin">
                <li><label for="p_experiance" class=" ms-5">Experiance (Achievement) *</label></li>
                <li><textarea  class="form-control bg-remove-input t-width ms-5" style="width: 53vw;" id="p_experiance" name="p_experiance" ></textarea></li>
            </ol>
            

        </div>
        <div class="d-flex justify-content-around flex-row wrapExtra ">
           
            <ol>
                <li style="margin-top:2vw;">
                    <li><input type="checkbox" name="termId">  <label for="checkbox" style="margin-right: 2rem;font-size: 1.5vw;" class="check"> I accept All Term And Condition</label></li>
                </li>
            </ol>

        </div>
        <table>
            <tr>
                <td>
                    <div class="cancel">
                        <a class="btn btn-light w-50 font-weight-bold mt-2 Btn ms-3" onclick="location.href='{{ url('/playerInfo') }}'" style="font-size:1.5vw; font-weight:bold">Back</a>
                    </div>
                </td>
                <td align="center">   
                    <div class="cancel">
                        <button type="reset" onclick="location.href='{{ url('/') }}'" class="btn btn-light w-50 font-weight-bold mt-2 Btn" style="font-size:1.5vw; font-weight:bold">Cancel</button>
                    </div>
                </td>
                <td align="center">
                    <div class="submit">
                        <a type="submit" onclick="location.href='{{ url('/dashboard') }}'" class="btn btn-light w-50 font-weight-bold mt-2 Btn" style="font-size:1.5vw;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-weight:bold ; ">Submit</a>
                    </div>
                </td>   
            </tr>
        </table> 
    </div> 
    </form>
    <!-- <script src="../Register/bootstrap-5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>