<?
    define("DOC_ROOT" ,  getenv("DOCUMENT_ROOT"));
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sandbox</title>
        <link rel="stylesheet" type="text/css" media="all" href="/css/black_and_yellow.css" />
        <link href='http://fonts.googleapis.com/css?family=Sarina' rel='stylesheet' type='text/css'>
        <script src="/js/third_party/jquery-1.6.4.min.js"></script>
        <script src="js/canvas.js"></script>
    </head>
    <body>
        <div class="header"><a href="/">Solgen Sandbox</a></div>
        <div class="content_wrap">
            <div class="left_nav">
                <? include(DOC_ROOT."/nav_ul.php"); ?>
            </div>
            <div class="center_content">
                <h3>Lets get our canvas on.</h3>
                <canvas id="myDrawing" width="200" height="200">
                    <p>Your browser doesn't support canvas.</p>
                </canvas>
                <script type="text/javascript" >
                    drawCanvasStuff();
                </script>
            </div>
            <div class="right_hot_stuff">
                Hot stuff and alerts go here
            </div>
        </div>
        <div class="clearer" />
        <div class="footer">
            Footer goes here
        </div>

    </body>
</html>