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
    </style>
</head>
<body style="background-color: #0D1228">
    @include('layouts.header')
    <header class="masthead">
        <div class="bg"></div>
      <div class="container h-100 pb-0">
        <div class="row h-100 align-items-center p-0 text-center">
          <div class="col-12 mt-5">
            @stack('googd_heade')
          </div>
          <div class="col-12">
            @yield('content')
          </div>
          <div class="col-12 pt-5">
            <div class="col-12 text-center font-size">
                <span class="text-white">© 2020 by INFINIX., All Rights Reserved.</span> <br>
                <p style="color: #6775AF">Sports betting is associated with problem gambling. Play responsibly. As a player, you are required to comply with the norms and laws of government institutions and authorities in your country. Cota365 cannot, in any way, assume responsibility for unlawful or unauthorized use of its contents and services. Minors are prohibited from participating in sports betting or other games on this website. All information on this website is subject to change at any time without prior notice.</p>
            </div>
          </div>
        </div>
      </div>
    </header>






    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<script type="text/javascript">	
    var svgns = "http://www.w3.org/2000/svg"; // SVG Namespace (in case we need it)
    var slices = []; // Array of wheel slice objects
    var numSlices = 8;  // Size of the circle slices
    var isSpinning = false; // Is the arrow spinning?
    var rotation = 0; // Arrow rotation
    var currentSlice = 0; // Current slice the arrow is over
    var wheel; // DOM Object for the spinner board
    var arrow; // DOM Object for the spinner arrow
    var spinButton; // DOM Object for the spin wheel <button>
    
    // Basic wheel "slice" object for drawing SVG
    function Slice(num, parent) {
        // Set instance vars
        this.parent = parent;
        this.size = 360/numSlices;
        this.offset = num * this.size;
        this.id = "slice_"+num;
        console.log(this.id);
        // Draw the object
        this.object = this.create();
        this.parent.appendChild(this.object);
    }

    Slice.prototype = {
        create:function() {
            // Create a group to store the slice in
            var g = document.createElementNS(svgns, "g");
            // Create the slice object
            var slice = document.createElementNS(svgns, "path");
            slice.setAttributeNS(null, "id", this.id);
            var x1 = 200 + 180 * Math.cos(Math.PI*(-90+this.offset)/180);
            var y1 = 200 + 180 * Math.sin(Math.PI*(-90+this.offset)/180);
            var x2 = 200 + 180 * Math.cos(Math.PI*(-90+this.size+this.offset)/180);
            var y2 = 200 + 180 * Math.sin(Math.PI*(-90+this.size+this.offset)/180);
            slice.setAttributeNS(null, "d", "M 200 200 L "+x1+" "+y1+" A 180 180 0 0 1 "+x2+" "+y2+"  Z");
            // Randomize the color of the slice and finish styling
            var red = Math.floor(Math.random() * 215) + 20;
            var green = Math.floor(Math.random() * 215) + 20;
            var blue = Math.floor(Math.random() * 215) + 20;
            slice.setAttributeNS(null, "fill", "#A84B02");
            slice.setAttributeNS(null, "stroke", "#222222");
            slice.setAttributeNS(null, "style", "stroke-width:2px");
            // Add the slice to the group
            g.appendChild(slice);
            // Create the highlight for the slice
            var overlay = document.createElementNS(svgns, "path");
            overlay.setAttributeNS(null, "d", "M 200 200 L "+x1+" "+y1+" A 180 180 0 0 1 "+x2+" "+y2+"  Z");
            overlay.setAttributeNS(null, "fill", "#F7A31B");
            overlay.setAttributeNS(null, "stroke", "#222222");
            overlay.setAttributeNS(null, "style", "stroke-width:1px");
            overlay.setAttributeNS(null, "opacity", "0");
            // Add the highlight for the slice to the group
            g.appendChild(overlay);
            return g;
        },
        toggleOverlay:function() {
            var overlay = this.object.childNodes[1];
            if (overlay.getAttribute("opacity") == 0) {
                overlay.setAttributeNS(null, "opacity", 1);
            }
            else {
                overlay.setAttributeNS(null, "opacity", 0);
            }
        }
    };

    // Toggle the spinning of the wheel
    function toggleSpinning() {
        // Toggle the spinning animation
        if (isSpinning) {
            // Stop the arrow
            isSpinning = false;
            // console.log(2222, isSpinning, currentSlice)
            clearInterval(toggleSpinning.spinInt);
            spinButton.removeAttribute("disabled");
            // currentSlice = currentSlice == 1 || currentSlice == 3 || currentSlice == 5 || currentSlice == 7  ? currentSlice : currentSlice + 1;
        }
        else {
            // Start spinning the arrow
            isSpinning = true;
            toggleSpinning.spinInt = setInterval(spinWheel, 1000/60);
            // Set how long the wheel will be spinning
            var duration = Math.floor(Math.random() * 2000) + 1000;

            setTimeout(toggleSpinning, duration);
            // Disable the spin button
            spinButton.setAttribute("disabled", "true");
        }
    }

    // Animation step for spinning the wheel arrow
    function spinWheel() {
        // Rotate the spinner arrow
        rotation = (rotation + 12) % 360;
        // console.log(rotation);
        arrow.setAttributeNS(null, "transform", "rotate("+rotation+",200,200)");
        // Highlight the slice the arrow is above
        var newSlice = Math.floor(rotation / (360/numSlices));
        if (newSlice != currentSlice) {
            console.log(22, isSpinning);
            if(isSpinning){
                slices[currentSlice].toggleOverlay();
                slices[newSlice].toggleOverlay();
                currentSlice = newSlice;
            }else{
                

                // if(newSlice == 1 && newSlice == 3 && newSlice == 5 && newSlice == 7){
                //     console.log(22, isSpinning, currentSlice, 'genap');
                //     slices[currentSlice+1].toggleOverlay();
                //     slices[newSlice+1].toggleOverlay();
                //     currentSlice =  newSlice + 1;
                // }else{
                //     console.log(22, isSpinning, currentSlice, 'ganjil');
                //     slices[currentSlice].toggleOverlay();
                //     slices[newSlice].toggleOverlay();
                //     currentSlice = newSlice;
                // }
            }
        }
    }

    // Document ready event
    document.addEventListener("DOMContentLoaded", function() {
        // Get a handle to all necessary DOM elements
        wheel = document.getElementById("spinner-board"); // DOM Object for the spinner board
        arrow = document.getElementById("spinner-arrow"); // DOM Object for the spinner arrow
        spinButton = document.getElementById("spinner-button"); // DOM Object for the spin wheel <button>
        // Generate the wheel sections
        for (var i = 0; i < numSlices; i++) {
            slices[i] = new Slice(i, wheel);
        }
        // Highlight the first slice
        slices[0].toggleOverlay();
    }, false);
</script>
</body>
</html>