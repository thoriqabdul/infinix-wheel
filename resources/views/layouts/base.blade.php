<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regist</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
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
            position: relative;
            z-index: 1;
            height: 755px;
        }
        .bg {
            position: absolute;
            z-index: -1;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-image: url('/image/backkgrounf.png');
            width: 100%;
            height: 100%;
            opacity: 0.26;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover
        }
        
        .font-size{
            font-size: 10px;
        }

        #wrapper {
          position: relative;
          width: 300px;
      }
 
      #canvas {
          z-index: 1;
      }
      
      #prizePointer {
          position: absolute;
          left: 129px;
          top: 45px;
          z-index: 999;
      }
        .kalah {
          top: -30px;
          position: relative;
      }
 
      .baner {
          z-index: 1;
      }
      
      .ket {
          position: absolute;
          text-align: center;
          left: 144px;
          top: 50px;
          z-index: 999;
      }

      @media only screen and (max-width: 600px) {
        .foot {
        position: absolute;
        bottom: 0;
        width: 100%;
      }
    }

    @media only screen and (min-width: 605px) {
      .foot {
        position: absolute;
        bottom: 0;
        width: 50%;
        z-index: 0;
      }
}

        
       
    </style>
</head>
<body style="background-color: #0D1228">
    @include('layouts.header')
    <header class="masthead">
        <div class="bg"></div>
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-12 mt-5">
            @stack('googd_heade')
          </div>
            @yield('content')
          
        </div>
        <div class="row">
          <div class="col-12 pt-5">
            <div class="text-center font-size">
                <img src="{{asset('image/x.png')}}" alt="" width="100" height="30"><br><br>
                <span class="text-white">© 2020 by INFINIX., All Rights Reserved.</span> <br>
                <p style="color: #6775AF">Sports betting is associated with problem gambling. Play responsibly. As a player, you are required to comply with the norms and laws of government institutions and authorities in your country. Cota365 cannot, in any way, assume responsibility for unlawful or unauthorized use of its contents and services. Minors are prohibited from participating in sports betting or other games on this website. All information on this website is subject to change at any time without prior notice.</p>
            </div>
          </div>
        </div>
      </div>
    </header>






    <script src="{{asset('js/jquery.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{asset('js/Winwheel.js')}}"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    @stack('js_push')
</body>
</html>