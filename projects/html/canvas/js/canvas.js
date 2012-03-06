

function drawCanvasStuff(){
    var drawingCanvas  = document.getElementById('myDrawing');
    //Check the elment is in the DOM and the browser supports canvas
    if(drawingCanvas.getContext){
        //Initialise a 2 Dimensional drawing context
        var context = drawingCanvas.getContext('2d');
        //Canvas commands go here

        //create a yellow face
        context.strokeStyle = "#000000";
        context.fillStyle = "#FFFF00";
        context.beginPath();
        context.arc(100 , 100 , 50 , 0 , Math.PI * 2,true);
        context.closePath();
        context.stroke();
        context.fill();
        
        context.strokeStyle = "#000000";
        context.fillStyle = "#FFFFFF";
        context.beginPath();
        context.arc(120 , 80 , 8 , 0 , Math.PI * 2,true);
        context.closePath();
        context.stroke();
        context.fill();

        context.fillStyle = "#00A400";
        context.beginPath();
        context.arc(120 , 80 , 5 , 0 , Math.PI * 2,true);
        context.closePath();
        context.stroke();
        context.fill();

        context.strokeStyle = "#000000";
        context.fillStyle = "#FFFFFF";
        context.beginPath();
        context.arc(80 , 80 , 8 , 0 , Math.PI * 2,true);
        context.closePath();
        context.stroke();
        context.fill();

        context.fillStyle = "#00A400";
        context.beginPath();
        context.arc(80 , 80 , 5 , 0 , Math.PI * 2,true);
        context.closePath();
        context.stroke();
        context.fill();

        context.strokeStyle = "#000000";
        context.fillStyle = "#000000";
        context.beginPath();
        context.rect(96 , 90 , 10 , 10);
        context.closePath();
        context.stroke();
        context.fill();
        context.rotate(0.05);
    }
}