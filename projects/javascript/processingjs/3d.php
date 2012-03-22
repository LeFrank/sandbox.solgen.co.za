<html>
<head>
  <script src="processing-1.3.6.min.js"></script>
</head>
<body><h1>Processing.js</a></h1>
<h2>Advanced processing.js via JavaScript</h2>
<p>Processing.js Cube</p>
<em>Note: runs via a web server or requres local files access in the web browser settings.</em>
Converted to the JavaScript language from the Processing code<br>
Original souce code:<a href="http://processing.org/learning/3d/texturecube.html">TexturedCube</a>
by Dave Bollinger.

<canvas id="canvas1" width="200" height="200"></canvas>

<script id="script1" type="text/javascript">

// Attaching js code to the canvas by using a sketch object

var sketch = new Processing.Sketch();
// define 3D context
sketch.use3DContext = true;
// preload the images
sketch.imageCache.add("pjs.png");
// attach function (also, can be specified as the single parameter
// in the Processing.Sketch object constructor)
sketch.attachFunction = function(processing) {
  var tex;
  var rotx = Math.PI/4;
  var roty = Math.PI/4;

  processing.setup = function() {
    processing.size(640, 360, processing.P3D);
    tex = processing.loadImage("pjs.png");
    processing.textureMode(processing.NORMALIZED);
    processing.fill(255);
    processing.stroke(processing.color(44,48,32));
  };

  processing.draw = function() {
    processing.background(0);
    processing.noStroke();
    processing.translate(processing.width/2.0,
                         processing.height/2.0, -100);
    processing.rotateX(rotx);
    processing.rotateY(roty);
    processing.scale(90);
    texturedCube(tex);
  }

  function texturedCube(tex) {
    processing.beginShape(processing.QUADS);
    processing.texture(tex);

    // Given one texture and six faces, we can easily set up the uv coordinates
    // such that four of the faces tile "perfectly" along either u or v, but the other
    // two faces cannot be so aligned.  This code tiles "along" u, "around" the X/Z faces
    // and fudges the Y faces - the Y faces are arbitrarily aligned such that a
    // rotation along the X axis will put the "top" of either texture at the "top"
    // of the screen, but is not otherwised aligned with the X/Z faces. (This
    // just affects what type of symmetry is required if you need seamless
    // tiling all the way around the cube)

    // +Z "front" face
    processing.vertex(-1, -1,  1, 0, 0);
    processing.vertex( 1, -1,  1, 1, 0);
    processing.vertex( 1,  1,  1, 1, 1);
    processing.vertex(-1,  1,  1, 0, 1);

    // -Z "back" face
    processing.vertex( 1, -1, -1, 0, 0);
    processing.vertex(-1, -1, -1, 1, 0);
    processing.vertex(-1,  1, -1, 1, 1);
    processing.vertex( 1,  1, -1, 0, 1);

    // +Y "bottom" face
    processing.vertex(-1,  1,  1, 0, 0);
    processing.vertex( 1,  1,  1, 1, 0);
    processing.vertex( 1,  1, -1, 1, 1);
    processing.vertex(-1,  1, -1, 0, 1);

    // -Y "top" face
    processing.vertex(-1, -1, -1, 0, 0);
    processing.vertex( 1, -1, -1, 1, 0);
    processing.vertex( 1, -1,  1, 1, 1);
    processing.vertex(-1, -1,  1, 0, 1);

    // +X "right" face
    processing.vertex( 1, -1,  1, 0, 0);
    processing.vertex( 1, -1, -1, 1, 0);
    processing.vertex( 1,  1, -1, 1, 1);
    processing.vertex( 1,  1,  1, 0, 1);

    // -X "left" face
    processing.vertex(-1, -1, -1, 0, 0);
    processing.vertex(-1, -1,  1, 1, 0);
    processing.vertex(-1,  1,  1, 1, 1);
    processing.vertex(-1,  1, -1, 0, 1);

    processing.endShape();
  }

  // mouse event
  processing.mouseDragged = function() {
    var rate = 0.01;
    rotx += (processing.pmouseY-processing.mouseY) * rate;
    roty += (processing.mouseX-processing.pmouseX) * rate;
  };
};

var canvas = document.getElementById("canvas1");
// attaching the sketch to the canvas
var p = new Processing(canvas, sketch);

</script>