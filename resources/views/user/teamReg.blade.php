
<!--<!DOCTYPE html>-->
<!--<html>-->
<!--    <head>-->
<!--        <title>TheCBL</title>-->
<!--        <meta charset="utf-8">-->
<!--        <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--        <link rel="stylesheet" href={{url('css/bootstrap.css')}}>-->
<!--        <link rel="stylesheet" href={{url('css/layout.css')}}>-->
<!--        <link rel="stylesheet" href={{url('css/teamregistration.css')}}>-->
<!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />-->
<!--     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">-->
<!--     <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">-->
<!--     <script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>-->
<!--    <script src="https://code.jquery.com/jquery-3.0.0.js" integrity="sha256-jrPLZ+8vDxt2FnE1zvZXCkCcebI/C8Dt5xyaQBjxQIo=" crossorigin="anonymous"></script>-->
<!--    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>-->

<!--    </head>-->
<!--    <body >-->
<!--    <h1 class="text-center">Team Registration</h1>-->
<!--    <hr style="width: 50%;margin-left: 25%;margin-top: -1vh;border: 2px solid white;color: white;">-->
<!--    <form action="#" method="get">-->
<!--    <div class="d-flex justify-content-center flex-row wrapExtra" >-->
<!--        <div class="d-flex justify-content-center mx-5 flex-column px-5 wrapExtra">-->
<!--            <div class="d-flex justify-content-center mx-5 flex-column px-5 wrapExtra">-->
            
<!--            <ol>-->
<!--                <li><label for="team-name" class="form-label">Team Name *</label></li>-->
<!--                <li><input type="text" name="team-name" class="form-control" placeholder="Enter Team Name" required/></li>-->
<!--            </ol>-->
<!--            <ol>-->
<!--                <li><label for="first-name" class="form-label">Owner Name * </label></li>-->
<!--                <li><input type="text" name="first-name" class="form-control" placeholder="Owner First Name" required/></li>-->
<!--            </ol>-->
<!--            <ol>-->
<!--                <li><label for="middle-name" class="form-label">Owner Middle Name </label></li>-->
<!--                <li><input type="text" name="middle-name" class="form-control" placeholder="Owner Middle Name" required/></li>-->
<!--            </ol>-->
<!--            <ol>-->
<!--                <li><label for="last-name" class="form-label">Owner Last Name *</label></li>-->
<!--                <li><input type="text" name="last-name" class="form-control" placeholder="Owner Last Name" required/></li>-->
<!--            </ol>-->
<!--            <ol>-->
<!--                <li><label for="email" class="form-label">Owner Email *</label></li>-->
<!--                <li><input type="email" name="email" class="form-control" placeholder="Owner Email" required/></li>-->
<!--            </ol>-->
<!--            <ol>-->
<!--                <li><label for="contact" class="form-label">Owner Contact *</label></li>-->
<!--                <li><input type="tel" name="contact" class="form-control" placeholder="Owner Contact Number" maxlength="10" required/></li>-->
<!--            </ol>-->
<!--            <ol>-->
<!--                <li class="d-flex justify-content-between mt-3  ">-->
<!--                    <button class="btn btn-light ">Cancel</button>-->
<!--                    <button class="btn btn-light  ms-1" type="submit" onclick="location.href='{{ url('dashboard') }}'">Submit</button>-->
<!--                </li>-->
<!--            </ol>-->
<!--        </div>-->
<!--        <div class="container-fluid mx-5" style="border-radius:5px ;background-color: #080808;border-style: inset;">-->
<!--            <div class="m-0">-->
           
<!--                <div class="form-group input-group">-->
<!--                    <input type="text" placeholder="Search Player by Name,Email,Mobile" id="search" class="form-control " style="border-radius: 10px;" onchange="onValidation()">-->
<!--                    <i class="input-group-text fa-solid fa-search mt-2" style="cursor: pointer; display: block;border-radius: 10px;"></i>-->
<!--                </div>-->
                <!-- <hr style="color: black;"> -->
<!--            </div>-->
<!--            <div class="m-auto table-responsive"  > -->
<!--              <table class="table table-light m-1 tableBorder " style="width: 98%;border-style:  groove  !important;" id="sampleTbl">-->
<!--                <thead>-->
<!--                    <tr>-->
<!--                        <th>Sr.No</th>-->
<!--                        <th>Profile</th>-->
<!--                        <th>Player </th>-->
<!--                        <th>Position</th>-->
<!--                        <th>Height</th>-->
<!--                        <th>Add</th>-->
<!--                        <th>Remove</th>-->
<!--                    </tr>-->
<!--                </thead>-->
<!--                <tbody>-->
<!--                    <tr>-->
<!--                        <td>1</td>-->
<!--                        <td>parth</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>2</td>-->
<!--                        <td>rajan</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>3</td>-->
<!--                        <td>Nisarg</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>4</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>4</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>5</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>6</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>7</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>8</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>9</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>10</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                        <td>asd</td>-->
<!--                    </tr>-->
<!--              </tbody>-->
<!--              </table>-->

<!--            </div>       -->
<!--        </div>-->
<!--    </div>-->
    
<!--    </form>-->
<!--    <script>-->
<!--        var table = $('#sampleTbl').DataTable({-->
<!--            rowGroup: true,-->
<!--            "dom": 'ftipr',-->
<!--            pageLength:10,-->
<!--            language: {-->
<!--            oPaginate: {-->
<!--            sNext: '<i class="fa fa-forward text-light"></i>',-->
<!--            sPrevious: '<i class="fa fa-backward text-light" ></i>',-->
<!--            sFirst: '<i class="fa fa-step-backward text-light"></i>',-->
<!--            sLast: '<i class="fa fa-step-forward text-light"></i>'-->
<!--                    }-->
<!--            }  -->
            <!--// ordering:false-->
<!--        });-->
        <!--// table.rowGroup().disable().draw();-->
<!--        var search = $.fn.dataTable.util.throttle(-->
<!--        function(val) {-->
<!--            table.search(val).draw();-->
<!--        },-->
        <!--400  // Search delay in ms-->
<!--        );-->

<!--        $('#search').keyup(function() {-->
<!--        search(this.value);-->
<!--        });-->
        


<!--// Prepare the preview for profile picture-->
<!--    $("#wizard-picture").change(function(){-->
<!--        readURL(this);-->
<!--        console.log(this)-->
<!--    });-->

<!--function readURL(input) {-->
<!--    if (input.files && input.files[0]) {-->
<!--        var reader = new FileReader();-->

<!--        reader.onload = function (e) {-->
<!--            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');-->
<!--        }-->
<!--        reader.readAsDataURL(input.files[0]);-->
<!--    }-->
<!--}-->
<!--    </script>-->
<!--</body>-->
<!--</html>-->
@extends('layout')
@section('title', 'The CBL | Team Registration')
@section('content')
<!DOCTYPE html>
<html>
    <head>
        <title>TheCBL</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href={{url('css/bootstrap.css')}}>
        <link rel="stylesheet" href={{url('css/layout.css')}}>
        <link rel="stylesheet" href={{url('css/teamregistration.css')}}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
     <script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
    <script src="https://code.jquery.com/jquery-3.0.0.js" integrity="sha256-jrPLZ+8vDxt2FnE1zvZXCkCcebI/C8Dt5xyaQBjxQIo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <style>
        input[type=text] {
    padding: 6px;
    margin-top: 8px;
    font-size: 17px;
    border: none;
  }
        li input[type='text'],input[type='date'],input[type='tel'],input[type='number'],input[type='email'],select{
    border: none;
    outline: none;
    background:transparent;
    border:3px solid #ffffff;
    border-radius: 10;
    color: #ffffff;
    
}
li input[type='text']:focus,input[type='date']:focus,input[type='number']:focus,input[type='tel']:focus,input[type='email']:focus,select:focus
{
    border: 3px solid #ffffff;
    box-shadow: none;
    outline: none;
    background: transparent;
    color: #ffffff;
}
            .picture-container{
    position: relative;
    cursor: pointer;
    text-align: center;
}
.picture{
    width: 70px;
    height: 70px;
    background-color: #999999;
    border: 4px solid #CCCCCC;
    color: #FFFFFF;
    border-radius: 50%;
    margin: 0px auto;
    /* margin-right: -7vh; */
    /* padding: -2vh; */
    overflow: hidden;
    transition: all 0.2s;
    -webkit-transition: all 0.2s;
}
.picture:hover{
    border-color: #f80000;
}
.content.ct-wizard-green .picture:hover{
    border-color: #05ae0e;
}
.content.ct-wizard-blue .picture:hover{
    border-color: #3472f7;
}
.content.ct-wizard-orange .picture:hover{
    border-color: #ff9500;
}
.content.ct-wizard-red .picture:hover{
    border-color: #ff3b30;
}
.picture input[type="file"] {
    cursor: pointer;
    display: block;
    height: 100%;
    left: 0;
    opacity: 0 !important;
    position: absolute;
    top: 0;
    width: 100%;
}

.picture-src{
    width: 100%;
    
}
.btn:hover{
            color:#e40a10 !important;
            border:1px solid #e40a10 !important;
        }
        </style>
    </head>
    <body class="bg-black text-light" >
    <h1 class="text-center">Team Registration</h1>
    <hr style="width: 50%;margin-left: 25%;margin-top: -1vh;border: 2px solid white;color: white;">
    <form action="#" method="get">
    <div class="d-flex justify-content-center flex-row wrapExtra" >
        <div class="d-flex justify-content-center flex-column wrapExtra">
            <ol>
                <div class="picture-container">
                    <div class="picture form-floating">
                        <img src="/user.png" class="picture-src" id="wizardPicturePreview" title="">
                        <input type="file" id="wizard-picture" class="" required/>
                        
                    </div>
                    <label for=""><h6>Team Logo</h6></label>
                </div>
            </ol>
            <ol>
                <li><label for="team-name" class="form-label">Team Name *</label></li>
                <li><input type="text" name="team-name" class="form-control" placeholder="Enter Team Name" required/></li>
            </ol>
            <ol>
                <li><label for="first-name" class="form-label">Owner Name * </label></li>
                <li><input type="text" name="first-name" class="form-control" placeholder="Owner First Name" required/></li>
            </ol>
            <ol>
                <li><label for="middle-name" class="form-label">Owner Middle Name </label></li>
                <li><input type="text" name="middle-name" class="form-control" placeholder="Owner Middle Name" required/></li>
            </ol>
            <ol>
                <li><label for="last-name" class="form-label">Owner Last Name *</label></li>
                <li><input type="text" name="last-name" class="form-control" placeholder="Owner Last Name" required/></li>
            </ol>
            <ol>
                <li><label for="email" class="form-label">Owner Email *</label></li>
                <li><input type="email" name="email" class="form-control" placeholder="Owner Email" required/></li>
            </ol>
            <ol>
                <li><label for="contact" class="form-label">Owner Contact *</label></li>
                <li><input type="tel" name="contact" class="form-control" placeholder="Owner Contact Number" maxlength="10" required/></li>
            </ol>
            <ol>
                <li class="d-flex justify-content-between mt-3  ">
                    <button class="btn btn-light fw-bold">Cancel</button>
                    <button class="btn btn-light  ms-1 fw-bold" type="submit" onclick="location.href='{{ url('dashboard') }}'">Submit</button>
                </li>
            </ol>
        </div>
        <div class="container-fluid mx-5 h-100" style="border-radius:5px ;background-color: #080808;border-style: inset;">
            <div class="m-0">
           
                <div class="form-group input-group">
                    <input type="text" placeholder="Search Player by Name,Email,Mobile" id="search" class="form-control " style="border-radius: 10px;" onchange="onValidation()">
                    <i class="input-group-text fa-solid fa-search mt-2" style="cursor: pointer; display: block;border-radius: 10px;"></i>
                </div>
                <!-- <hr style="color: black;"> -->
            </div>
            <div class="m-auto table-responsive"  > 
              <table class="table table-light m-1 tableBorder" style="width: 98%;border-style:  groove  !important;" id="sampleTbl">
                <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Profile</th>
                        <th>Player </th>
                        <th>Position</th>
                        <th>Height</th>
                        <th>Add</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>parth</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>rajan</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Nisarg</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                        <td>asd</td>
                    </tr>
              </tbody>
              </table>

            </div>       
        </div>
    </div>
    
    </form>
    <script>
        var table = $('#sampleTbl').DataTable({
            rowGroup: true,
            "dom": 'ftipr',
            pageLength:10,
            language: {
            oPaginate: {
            sNext: '<i class="fa fa-forward text-light"></i>',
            sPrevious: '<i class="fa fa-backward text-light" ></i>',
            sFirst: '<i class="fa fa-step-backward text-light"></i>',
            sLast: '<i class="fa fa-step-forward text-light"></i>'
                    }
            }  
            // ordering:false

        });
        // table.rowGroup().disable().draw();
        var search = $.fn.dataTable.util.throttle(
        function(val) {
            table.search(val).draw();
        },
        400  // Search delay in ms
        );

        $('#search').keyup(function() {
        search(this.value);
        });
        


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