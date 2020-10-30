<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regist</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <style>
      @font-face {
            font-family: OptimusPrinceps;
            src: url('font/HelveticaNeueCyr-Thin/HelveticaNeueCyr-Thin.woff');
        }
        .borderless td, .borderless th {
            border: none;
        }
        .borderless thead th {
            border-bottom: none;
            color: #27ECDC;
        }
        .roobot{
          font-family: 'Roboto', serif;
          font-size: 60px;
        }
        .rooboot{
          font-family: 'Roboto', serif;
          font-size: 48px;
        }
        .power{
          font-family: 'HelveticaNeueCyr', serif;
        }
        .masthead {
          height: 700px;
          background-image: url('/image/backkgrounf.png');
          background-size: cover;
          background-position: center;
          background-repeat: no-repeat;
        }

        @media screen and (min-width: 601px) {
      .header-1 {
        font-size: 60px;
        }
        .header-2{
          font-size: 48px; 
          color:#27ECDC
        }
      }

    /* If the screen size is 600px wide or less, set the font-size of <div> to 30px */
    @media screen and (max-width: 600px) {
      .header-1 {
        font-size: 40px;
      }
      .header-2{
          font-size: 30px; 
          color:#27ECDC
        }
    }

    .nav-item .active {

    background-color: #31EEDA !important;
    border-radius: 0;
    color : #1D114F !important;

    }

    .nav-item a{
      color: #6775AF !important;
    }
    </style>
</head>
<body style="background-color: #0D1228">
    <nav class="navbar navbar-expand-lg" style="background: #19203C; height: 70px;">
        <div class="container">
          <a class="navbar-brand" href="{{route('landing')}}" style="color:#fff; font-size:40px">Infinix</a>
            <div class="collapse navbar-collapse" id="navbarText">
                <span class="ml-auto" style="color:#fff; font-size:40px">
                    NOTE 8
                </span>
            </div>
        </div>
    </nav>
    <header class="masthead">
      <div class="container h-100 pb-0 p-2">
        <div class="row h-100 align-items-center">
          <div class="col-lg-4 col-12 mt-5">
            <h1 class="font-weight-light text-white header-1">#ANTIKALAH</h1>
            <h1 class="font-weight-light header-2">LUCKY WHEEL</h1>
            <div class="row align-items-center m-0">
              @if (!Auth::check())
              <div class="col-lg-6 col-12 p-1 text-center">
                <a href="{{route('login')}}" class="btn btn-info btn-block" style="border-radius: 50px">Login</a>
              </div>
              <div class="col-lg-6 col-12 p-1 text-center">
                  <a href="{{route('register')}}" class="btn btn-outline-info btn-block" style="border-radius: 50px">Register</a>
              </div>
              @endif
             
            </div>
          </div>
          <div class="col-12 pt-5">
            <h5 class="power text-white">Powered By</h5>
            <img src="{{asset('image/x.png')}}" alt="" width="157">
            <br>
            <br>
            <p style="color: #6775AF">PARTICIPAN ALL TIME</p>
            <h3  style="color: #31EEDA">2,000,000</h3>
          </div>
          <div class="position-absolute d-none d-sm-block" style="left: 730px">
            <img src="{{asset('image/spin-gatot.png')}}" class="float-left" alt="" width="1000" height="700">
          </div>
        </div>
      </div>
      
    </header>

          <div class="container">
              <div class="row align-items-center">
                  <div class="col-lg-5 col-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" >All</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" >This Weeks</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" >Last Weeks</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <table class="table borderless float-left" style="border:none;">
                          <thead>
                            <tr>
                              <th scope="col">USER</th>
                              <th scope="col">TIME</th>
                              <th scope="col">WINNER</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($all as $a)
                            <tr>
                              <td>{{$a->user->username}}</td>
                              <td>{{date('h:i A', strtotime($a->created_at))}}</td>
                              <td><span style="color:#3CC513">Skin ML</span></td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <table class="table borderless float-left" style="border:none;">
                          <thead>
                            <tr>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($thisWeak as $a)
                            <tr>
                              <td>{{$a->user->username}}</td>
                              <td>{{date('h:i A', strtotime($a->created_at))}}</td>
                              <td><span style="color:#3CC513">Skin ML</span></td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <table class="table borderless float-left" style="border:none;">
                          <thead>
                            <tr>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($lastWeak as $a)
                            <tr>
                              <td>{{$a->user->username}}</td>
                              <td>{{date('h:i A', strtotime($a->created_at))}}</td>
                              <td><span style="color:#3CC513">Skin ML</span></td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-7 col-12 text-center">
                        <img src="{{asset('image/phone.png')}}" alt="" width="" class="img-fluid">
                            
                  </div>
              </div>

              <div class="container mt-5">
                  <div class="row">
                      <div class="col-12 text-center">
                          <span class="text-white">© 2020 by INFINIX., All Rights Reserved.</span> <br>
                          <p style="color: #6775AF">Sports betting is associated with problem gambling. Play responsibly. As a player, you are required to comply with the norms and laws of government institutions and authorities in your country. Cota365 cannot, in any way, assume responsibility for unlawful or unauthorized use of its contents and services. Minors are prohibited from participating in sports betting or other games on this website. All information on this website is subject to change at any time without prior notice.</p>
                      </div>
                  </div>
              </div>
           


          </div>







    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $(window).ready(function(){
        $("tr:even").css({"background-color": "#19203C", "color":'#6775AF'});
        $("tr:odd").css({"background-color": "transparent", "color":'#6775AF'});
        // $('.nav-item > .active').css({'background-color': '#31EEDA', 'border-radius' : 0})
        // console.log(a)
    })


    
</script>
</body>
</html>