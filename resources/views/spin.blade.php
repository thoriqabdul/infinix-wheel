@extends('layouts.base')

@push('googd_heade')
    
<h1 class="font-weight-light text-white" style="font-size: 60px;top: 154px;">LET'S LUCKY DRAW</h1>
@endpush
@section('content')
<div id="wrapper">
    <img id="prizePointer" src="{{asset('image/point.png')}}" alt="V" width="30" height="50" />
    <canvas id="canvas" width="315" height="418">
        <p style="{color: white}" align="center">Sorry, your browser doesn't support canvas. Please try another.</p>
    </canvas>
    
    <div id="button-holder">
        <button class="btn btn-info p-2 w-25 rounded" id="spin_button" onclick="startSpin();">Spin</button>
    </div>
</div>
@endsection

@push('js_push')
<script>
    // Create new wheel object specifying the parameters at creation time.
    var theWheel = new Winwheel({
        'numSegments'       : 8,         // Specify number of segments.
        'outerRadius'       : 120,       // Set outer radius so wheel fits inside the background.
        'drawMode'          : 'image',   // drawMode must be set to image.
        'drawText'          : true,      // Need to set this true if want code-drawn text on image wheels.
        'textFontSize'      : 12,        // Set text options as desired.
        'textOrientation'   : 'curved',
        'textDirection'     : 'reversed',
        'textAlignment'     : 'outer',
        'textMargin'        : 5,
        'textFontFamily'    : 'monospace',
        'textStrokeStyle'   : 'black',
        'textLineWidth'     : 2,
        'textFillStyle'     : 'white',
        'segments'     :                // Define segments.
        [
           {'text' : 'a'},
           {'text' : 'mamen'},
           {'text' : 'c'},
           {'text' : 'tikuy'},
           {'text' : 'd'},
           {'text' : 'thoriq'},
           {'text' : 'd'},
           {'text' : 'bimo'},
        ],
        'animation' :                   // Specify the animation to use.
        {
            'type'     : 'spinToStop',
            'duration' : 5,     // Duration in seconds.
            'spins'    : 8,     // Number of complete spins.
            'callbackFinished' : alertPrize,
            'callbackSound'    : playSound,   // Function to call when the tick sound is to be triggered.
            'soundTrigger'     : 'pin'  
        },'pins' :
                {
                    'number' : 16   // Number of pins. They space evenly around the wheel.
                }
    });

    // Create new image object in memory.
    var loadedImg = new Image();

    // Create callback to execute once the image has finished loading.
    loadedImg.onload = function()
    {
        theWheel.wheelImage = loadedImg;    // Make wheelImage equal the loaded image object.
        theWheel.draw();                    // Also call draw function to render the wheel.
    }

    // Set the image source, once complete this will trigger the onLoad callback (above).
    loadedImg.src = "image/real.png";



    // Vars used by the code in this page to do power controls.
    var wheelPower    = 0;
    var wheelSpinning = false;

    var audio = new Audio('tick.mp3');  // Create audio object and load tick.mp3 file.

            function playSound()
            {
                // Stop and rewind the sound if it already happens to be playing.
                audio.pause();
                audio.currentTime = 0;

                // Play the sound.
                audio.play();
            }

    // -------------------------------------------------------
    // Function to handle the onClick on the power buttons.
    // -------------------------------------------------------
    function powerSelected(powerLevel)
    {
        // Ensure that power can't be changed while wheel is spinning.
        if (wheelSpinning == false)
        {
            // Reset all to grey incase this is not the first time the user has selected the power.
            document.getElementById('pw1').className = "";
            document.getElementById('pw2').className = "";
            document.getElementById('pw3').className = "";

            // Now light up all cells below-and-including the one selected by changing the class.
            if (powerLevel >= 1)
            {
                document.getElementById('pw1').className = "pw1";
            }

            if (powerLevel >= 2)
            {
                document.getElementById('pw2').className = "pw2";
            }

            if (powerLevel >= 3)
            {
                document.getElementById('pw3').className = "pw3";
            }

            // Set wheelPower var used when spin button is clicked.
            wheelPower = powerLevel;

            // Light up the spin button by changing it's source image and adding a clickable class to it.
            document.getElementById('spin_button').src = "spin_on.png";
            document.getElementById('spin_button').className = "clickable";
        }
    }

    // -------------------------------------------------------
    // Click handler for spin button.
    // -------------------------------------------------------
    function startSpin()
    {
        const ray = [48, 50, 62, 80, 140, 149, 160, 170, 230, 246, 250,260, 320, 329, 336, 342]
        const random = Math.floor(Math.random() * ray.length);
const stoped = (ray[random]);
        // Ensure that spinning can't be clicked again while already running.
        if (wheelSpinning == false)
        {
            // Based on the power level selected adjust the number of spins for the wheel, the more times is has
            // to rotate with the duration of the animation the quicker the wheel spins.
            if (wheelPower == 1)
            {
                theWheel.animation.spins = 2;
            }
            else if (wheelPower == 2)
            {
                theWheel.animation.spins = 5;
            }
            else if (wheelPower == 3)
            {
                theWheel.animation.spins = 8;
            }

            // Disable the spin button so can't click again while wheel is spinning.
            // document.getElementById('spin_button').src       = "spin_off.png";
            document.getElementById('spin_button').className = "btn btn-info p-2 w-25 rounded disabled";
            // stop at 1 [1 - 45], 2 [48 - 90], 3 [91 -135]
            let stopAt = stoped
            // let stopAt = (30 + Math.floor((Math.random() * 43)))
            console.log(22, stopAt)

            // Important thing is to set the stopAngle of the animation before stating the spin.
            theWheel.animation.stopAngle = stopAt;

            // Begin the spin animation by calling startAnimation on the wheel object.
            theWheel.startAnimation();

            // Set to true so that power can't be changed and spin button re-enabled during
            // the current animation. The user will have to reset before spinning again.
            wheelSpinning = true;
        }
    }

    // -------------------------------------------------------
    // Function for reset button.
    // -------------------------------------------------------
    function resetWheel()
    {
        theWheel.stopAnimation(false);  // Stop the animation, false as param so does not call callback function.
        theWheel.rotationAngle = 0;     // Re-set the wheel angle to 0 degrees.
        theWheel.draw();                // Call draw to render changes to the wheel.

        document.getElementById('pw1').className = "";  // Remove all colours from the power level indicators.
        document.getElementById('pw2').className = "";
        document.getElementById('pw3').className = "";

        wheelSpinning = false;          // Reset to false to power buttons and spin can be clicked again.
    }

    // -------------------------------------------------------
    // Called when the spin animation has finished by the callback feature of the wheel because I specified callback in the parameters.
    // note the indicated segment is passed in as a parmeter as 99% of the time you will want to know this to inform the user of their prize.
    // -------------------------------------------------------
    function alertPrize(indicatedSegment)
    {
        // Do basic alert of the segment text. You would probably want to do something more interesting with this information.
        alert("The wheel stopped on " + indicatedSegment.text);
    }
    
</script>
@endpush