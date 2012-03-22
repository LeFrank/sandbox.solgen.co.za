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
        <script>
            var processingCode = "...";
            var jsCode = Processing.compile(processingCode).sourceCode;
        </script>
</body>
</html>