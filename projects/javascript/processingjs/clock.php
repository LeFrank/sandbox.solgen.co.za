<?
require_once("../../../init.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Js</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" media="all"
	href="/css/black_and_yellow.css" />
<link href='http://fonts.googleapis.com/css?family=Sarina'
	rel='stylesheet' type='text/css'>
<script src="/js/third_party/jquery-1.6.4.min.js"></script>
<script src="processing-1.3.6.min.js"></script>
</head>
<body>
	<? include(DOC_ROOT."/header.php"); ?>
	<div class="content_wrap">
		<div class="left_nav">
			<ul>
				<li><a href='/'>← back</a></li>
			</ul>
		</div>
		<div class="center_content">
			<p>Clock</p>

			<p>
				<canvas id="canvas1" width="200" height="200"></canvas>
			</p>

			<script id="script1" type="text/javascript">

// Simple way to attach js code to the canvas is by using a function
function sketchProc(processing) {
  // Override draw function, by default it will be called 60 times per second
  processing.draw = function() {
    // determine center and max clock arm length
    var centerX = processing.width / 2, centerY = processing.height / 2;
    var maxArmLength = Math.min(centerX, centerY);

    function drawArm(position, lengthScale, weight) {
      processing.strokeWeight(weight);
      processing.line(centerX, centerY,
        centerX + Math.sin(position * 2 * Math.PI) * lengthScale * maxArmLength,
        centerY - Math.cos(position * 2 * Math.PI) * lengthScale * maxArmLength);
    }

    // erase background
    processing.background(224);

    var now = new Date();

    // Moving hours arm by small increments
    var hoursPosition = (now.getHours() % 12 + now.getMinutes() / 60) / 12;
    drawArm(hoursPosition, 0.5, 5);

    // Moving minutes arm by small increments
    var minutesPosition = (now.getMinutes() + now.getSeconds() / 60) / 60;
    drawArm(minutesPosition, 0.80, 3);

    // Moving hour arm by second increments
    var secondsPosition = now.getSeconds() / 60;
    drawArm(secondsPosition, 0.90, 1);
  };

}

var canvas = document.getElementById("canvas1");
// attaching the sketchProc function to the canvas
var p = new Processing(canvas, sketchProc);
// p.exit(); to detach it
</script>

</div>
            <div class="right_hot_stuff">
               Hot stuff and alerts go here, get pulled from xml cache
            </div>
        </div>
        <div class="clearer" />
    <? include(DOC_ROOT."/footer.php")?>

    </body>
 </html>
