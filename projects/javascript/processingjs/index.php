<!DOCTYPE html>
<html>
    <head>
        <title>Hello Web - Processing.js Test</title>
        <script src="processing-1.3.6.min.js"></script>
    </head>
    <body>
        <h1>Processing.js Test</h1>
        <p>This is my first Processing.js web-based sketch:</p>
        <canvas data-processing-sources="basic-example.pde"></canvas>
<script type="text/processing" data-processing-target="mycanvas">
void setup()
{
  size(200,200);
  background(125);
  fill(255);
  noLoop();
  PFont fontA = loadFont("courier");
  textFont(fontA, 14);
}

void draw(){
  text("Hello Web!",20,20);
  println("Hello ErrorLog!");
}
</script>
<canvas id="mycanvas"></canvas>
</body>
</html>