@extends('layout')
@section('title', 'The CBL | Dashboard')
@section('content')
<!DOCTYPE html>
<html>
    <head>
        <title>TheCBL</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href={{url('css/adminScorer.css')}}>
        <!--<link rel="stylesheet" href={{url('css/bootstrap.css')}}>-->
        <!--<link rel="stylesheet" href={{url('css/layout.css')}}>-->
        <link rel="stylesheet" href={{url('css/livematch.css')}}>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
     <!--<script   src={{url('js/bootstrap.bundle.js')}}></script>-->

    </head>
    
 <body>
    <div class="modal-dialog modal-dialog-centered" role="document">
      @if(Session::has('success'))
                      
                        <!--<div class="alert alert-success alert-dismissible fade show" >-->
                        <!--<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                        <!--<strong>Success!</strong>  Welcome <strong>{{Session('name')}}</strong> to the Corporate BasketBall Leag.-->
                        <!--</div>-->
                        <div class="alert alert-primary alert-dismissible fade show">
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>  
                          <strong>Success!</strong>  Welcome <strong>{{Session('name')}}</strong> to the Corporate BasketBall Leag.
                      </div>
              @endif
               @if(Session::has('fail'))
                        <div class="alert alert-danger alert-dismissible fade show">
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>  
                              {{Session::get('fail')}}
                      </div>
                 @endif
     {{ csrf_field() }}
     </div>
     
       <h1 class="text-center">Live Match</h1>
    <div class="container">
        
        <div class="container  bgGradiant" style="box-sizing: border-box;">
            <h3 class="text-center mt-0">Lok Jagruti(Live Match) </h3>
            <div class="d-flex justify-content-between flex-row ">

                        <div class=" marginNon mt-3" style="width: fit-content !important;cursor: pointer;float: left !important;" id="showTeamA">
                            <img src="images/user.png" alt="Team Logo" class="rounded-circle teamLogo">
                            <p class="text-center text-black fw-bolder" style="font-size: 3vh;">Team A</p>
                        </div>
                        <div class=" marginNon mt-3" style="width: fit-content !important;">
                            <div class="d-flex justify-content-center ">
                                <p class="border border-dark bg-black heading">V/s</p>
                            </div>
                           <div class="text-center marginNon fw-bolder text-black">
                            <!--<p>V/S</p>-->
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
   
      
    

     <!--Upcoming Matches -->
    <h4 class="text-center mt-5">Upcoming Matches</h4>
    <section>
    <div class="container">
        <div class="swiper mySwiper" >
            <div class="swiper-wrapper">
              <div class="swiper-slide" height=200px>Match 1</div>
              <div class="swiper-slide setHeight">Match 2</div>
              <div class="swiper-slide setHeight">Match 3</div>
              <div class="swiper-slide setHeight">Match 4</div>
              <div class="swiper-slide setHeight">Match 5</div>
              <div class="swiper-slide setHeight">Match 6</div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
          </div>     
    </div>
</section>


 <!--News -->
    <h4 class="text-center mt-5">News</h4>  
    <section class="mb-5">
        <div class="container">
            <div class="swiper mySwiper" >
                <div class="swiper-wrapper">
                  <div class="swiper-slide">News 1</div>
                  <div class="swiper-slide">News 2</div>
                  <div class="swiper-slide">News 3</div>
                  <div class="swiper-slide">News 4</div>
                  <div class="swiper-slide">News 5</div>
                  <div class="swiper-slide">News 6</div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
              </div>     
        </div>
    </section>
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>-->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 3,
          spaceBetween: 30,
        //   slidesPerGroup: 3,
          loop: true,
            autoHeight: true,
          loopFillGroupWithBlank: true,
        //   pagination: {
        //     el: ".swiper-pagination",
        //     clickable: true,
        //   },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          breakpoints:{
            320:{
                slidesPerView:1,
            }, 
            500:{
                slidesPerView:2,
            },    
            700:{
                slidesPerView:3,
    
            }
          },

        });
        
        /*  pop up */
        window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 3000);
      </script>
</body>
</html>


@endsection