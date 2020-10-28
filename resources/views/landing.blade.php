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
          background-image: url('/image/spin.png'), url('/image/backkgrounf.png');
          background-size: cover;
          background-position: center;
          background-repeat: no-repeat;
        }
    </style>
</head>
<body style="background-color: #0D1228">
    <nav class="navbar navbar-expand-lg" style="background: #19203C; height: 70px;">
        <div class="container">
            <a class="navbar-brand" href="#" style="color:#fff; font-size:40px">Infinix</a>
            <div class="collapse navbar-collapse" id="navbarText">
                <span class="ml-auto" style="color:#fff; font-size:40px">
                    NOTE 8
                </span>
            </div>
        </div>
    </nav>
    <header class="masthead">
      <div class="container h-100 pb-0">
        <div class="row h-100 align-items-center p-0">
          <div class="col-12 mt-5">
            <h1 class="font-weight-light text-white" style="font-size: 60px">#ANTIKALAH</h1>
            <h1 class="font-weight-light" style="font-size: 48px; color:#27ECDC">LUCKY WHEEL</h1>
            <div class="row align-items-center w-25">
              <div class="col-lg-6 col-6 p-1">
                <a href="{{route('login')}}" class="btn btn-info w-100" style="border-radius: 50px">Login</a>
              </div>
              <div class="col-lg-6 col-6 p-1">
                  <a href="{{route('register')}}" class="btn btn-outline-info w-100" style="border-radius: 50px">Register</a>
              </div>
            </div>
          </div>
          <div class="col-12 pt-5">
            <h5 class="power text-white">Powered By</h5>
            <img src="{{asset('image/x')}}" alt="" width="157">
            <br>
            <br>
            <p style="color: #6775AF">PARTICIPAN ALL TIME</p>
            <h3  style="color: #31EEDA">2,000,000</h3>
          </div>
        </div>
      </div>
    </header>
    {{-- <div class="jumbotron jumbotron-fluid" style="background-image:url('/image/backkgrounf'); background-size: cover; height:794px">
        <div class="container-fluid" style="background-image:url('/image/spin'); background-size: cover;">
          <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <h1 class="text-white roobot">#ANTIKALAH</h1>
                    <h1 class="rooboot" style="color: #31EEDA">LUCKY WHEEL</h1>
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-6 p-1">
                            <button class="btn btn-info w-100" style="border-radius: 50px">Login</button>
                        </div>
                        <div class="col-lg-4 col-6 p-1">
                            <button class="btn btn-outline-info w-100" style="border-radius: 50px">Register</button>
                        </div>
                    </div>
                    <div class="position-absolute text-white mt-5">
                        <h5 class="power">Powered By</h5>
                        <img src="{{asset('image/x')}}" alt="" width="157">
                        <br>
                        <br>
                        <br>
                        <p style="color: #6775AF">PARTICIPAN ALL TIME</p>
                        <h3  style="color: #31EEDA">2,000,000</h3>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-sm-block">
                    <img src="{{asset('image/jerapah.png')}}" alt="" width="600">
                </div>
            </div>
            <div class="row">
                <div class="col-6" style="border:1px solid white">
                    <h1 class="text-white">aaaa</h1>
                </div>
            </div>
          </div>
        </div>
      </div> --}}

          <div class="container">
              <div class="row">
                  <div class="col-lg-4 col-12">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                          <a class="btn btn-info nav-link active rounded-0" href="#">All</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link rounded-0" href="#" style="color: #6775AF">This Weeks</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link rounded-0" href="#" style="color: #6775AF">Last Weeks</a>
                        </li>
                      </ul>
                      <table class="table borderless float-left" style="border:none;">
                        <thead>
                          <tr>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                          <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                          <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                          <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                          <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                          <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                          <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                          <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                          <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>

                  </div>
                  <div class="col-lg-6 mt-5">
                        <div class="position-absolute" style="margin-left: 150px; margin-top:80px;">
                            <img src="{{asset('image/p-back')}}" alt="" width="279" height="612">
                        </div>
                        <div class="position-absolute" style="margin-left: 380px">
                            <img src="{{asset('image/p-front')}}" alt="" width="247" height="724">
                        </div>
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
        // console.log(a)
    })
</script>
</body>
</html>