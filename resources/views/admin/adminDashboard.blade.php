<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Scorer Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href={{url('css/adminScorer.css')}}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <h3 class="text-center mt-5 underLine">Scorer Admin Panel</h3>
    <div class="container">
        <div class="row justify-content-between m-2 mt-4">
            <button class="btn btn-primary btnWidth">Start Match</button>
            <button class="btn btn-danger btnWidth">End Match</button>
        </div>
        <div class="container  bgGradiant" style="box-sizing: border-box;">
            <div class="d-flex justify-content-between flex-row ">
                <!-- <i class="fa-solid fa-circle-plus"></i> -->
                        <div class=" marginNon mt-3" style="width: fit-content !important; ">
                            <i class="fa-solid fa-circle-plus text-black" style="margin-top:5vh;" id="teamAScore"></i>
                        </div>
                        <div class=" marginNon mt-3" style="width: fit-content !important;cursor: pointer;float: left !important;" id="showTeamA">
                            <img src="images/user.png" alt="Team Logo" class="rounded-circle teamLogo">
                            <p class="text-center text-black fw-bolder" style="font-size: 3vh;">Team A</p>
                        </div>
                        <div class=" marginNon mt-3" style="width: fit-content !important;">
                            <div class="d-flex justify-content-center ">
                                <p class="border border-dark bg-black heading">Game 1</p>
                            </div>
                           <div class="text-center marginNon fw-bolder text-black">
                            <p>V/S</p>
                           </div>
                           <div class="d-flex justify-content-between flex-row fw-bolder text-black">
                                <p style="font-size:3.5vh;" id="teamA">0</p>
                                <p style="font-size:3.5vh;">S</p>
                                <p style="font-size:3.5vh;" id="teamB">0</p>
                           </div>
                        </div>
                        <div class=" marginNon mt-3" style="width: fit-content !important;cursor: pointer;" id="showTeamB">
                            <img src="images/user.png" alt="Team Logo" class="rounded-circle teamLogo">
                            <p class="text-center text-black fw-bolder" style="font-size: 3vh;">Team A</p>
                        </div>
                        <div class=" marginNon mt-3" style="width: fit-content !important;">
                            <i class="fa-solid fa-circle-plus text-black" style="margin-top:5vh;" id="teamBScore"></i>
                        </div>
            </div>
            <div class="container">
                <h6 class="text-center underLine fw-bolder">Final Game-1 (Team B leads 1-0)</h6>
                    <table class="table table-borderless text-light">
                        <thead>
                            <tr>
                                <th scope="col">Team</th>
                                <th></th>
                                <th></th>
                                <th scope="col">1</th>
                                <th scope="col">2</th>
                                <th scope="col">3</th>
                                <th scope="col">4</th>
                                <th scope="col">T</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>Team A</td>
                            <td></td>
                            <td></td>
                            <td>58</td>
                            <td>58</td>
                            <td>58</td>
                            <td>58</td>
                            <td>200</td>
                        </tr>
                        <tr>
                            <td>Team B</td>
                            <td></td>
                            <td></td>
                            <td>58</td>
                            <td>58</td>
                            <td>58</td>
                            <td>58</td>
                            <td>200</td>
                        </tr>
                    </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="/../bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <script>
        //Start Add Score Popup Menu
        let teamAScore=document.getElementById('teamAScore');
        let teamBScore=document.getElementById('teamBScore');
        teamAScore.addEventListener('click',async ()=>{
            const {value:inputValue} =await Swal.fire({
            title: 'Select field validation',
            input: 'select',
            inputOptions: {
                    'Fouls': {
                    one: 'Back',
                    two: 'Front',
                    three: 'Three Step',
                    four: 'one Step'
                    }
                },
                inputPlaceholder: 'Select Type',
                showCancelButton: true,
                inputValidator:(value)=>{
                    return new Promise((resolve)=>{
                        if(value){
                            resolve();
                        }
                        else{
                            resolve('empty');
                        }
                    })
                }
            })
            if(inputValue)
                Swal.fire(`Selected: ${inputValue}`)
        });
        teamBScore.addEventListener('click',async ()=>{
            const {value:inputValue} =await Swal.fire({
                title:'point table',
                input: 'select',
                inputOptions: {
                    'Fouls': {
                    one: 'Back',
                    two: 'Front',
                    three: 'Three Step',
                    four: 'one Step'
                    }
                },
                inputPlaceholder: 'Select Type',
                showCancelButton: true,
                inputValidator:(value)=>{
                    return new Promise((resolve)=>{
                        if(value){
                            resolve();
                        }
                        else{
                            resolve('empty');
                        }
                    })
                }
            })
            if(inputValue)
                Swal.fire(`Selected: ${inputValue}`)
        });
        //End Add Score Popup Menu

        //Start Show team Popup Menu
        let showTeamA=document.getElementById('showTeamA');
        let showTeamB=document.getElementById('showTeamB');
        showTeamA.addEventListener('click',async ()=>{
            Swal.fire({
            position: 'top-start',
            title:'Team A Points',
            html:`<table class="table table-borderless table-responsive text-light" style='font-size:2vh;'>
                    <thead>
                        <tr>
                        <th scope="col" colspan=2>Player</th>
                        <th scope="col">Min</th>
                        <th scope="col">Rib</th>
                        <th scope="col">Ast</th>
                        <th scope="col">Pts</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                        <th scope="row">1</th>
                        <td>Parth</td>
                        <td>332</td>
                        <td>24</td>
                        <td>435</td>
                        <td>44</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Rock</td>
                        <td>25</td>
                        <td>55</td>
                        <td>42</td>
                        <td>45</td>
                        </tr>
                        <tr>
                            <th>
                            </th>
                        </tr>
                        <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                            <td><button onClick='popupClose()' class='btn-sm btn-danger'>Close</button></td>
                        </tr>
                    </tbody>
                    </table>`,
            color:'#ffffff',
            background:'#000000',
            showConfirmButton: false,
            showCancelButton:false
            // timer: 1500
            })
        })
        showTeamB.addEventListener('click',async ()=>{
            Swal.fire({
            position: 'top-end',
            title:'Team B Points',
            html:`<table class="table table-borderless  text-light" style='font-size:2vh;'>
                    <thead>
                        <tr>
                        <th scope="col" colspan=2>Player</th>
                        <th scope="col">Min</th>
                        <th scope="col">Rib</th>
                        <th scope="col">Ast</th>
                        <th scope="col">Pts</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                        <th scope="row">1</th>
                        <td>Parth</td>
                        <td>332</td>
                        <td>24</td>
                        <td>435</td>
                        <td>4w4</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Rock</td>
                        <td>25</td>
                        <td>55</td>
                        <td>42</td>
                        <td>45</td>
                        </tr>
                        <tr>
                            <th>
                            </th>
                        </tr>
                        <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                            <td><button onClick='popupClose()' class='btn-sm btn-danger'>Close</button></td>
                        </tr>
                    </tbody>
                    </table>`,
            color:'#ffffff',
            background:'#000000',
            showConfirmButton: false,
            showCancelButton:false
            // timer: 1500
            })
        })
        const popupClose = ()=>{
                Swal.close();
        }
        //End Show team Popup Menu
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>