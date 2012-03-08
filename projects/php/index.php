<?php
//require_once("../../init.php");
//echo str_replace(DOC_ROOT , "" , __FILE__)."<br/>";
    define("DOC_ROOT" ,  getenv("DOCUMENT_ROOT"));
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sandbox</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" media="all" href="/css/black_and_yellow.css" />
        <link href='http://fonts.googleapis.com/css?family=Sarina' rel='stylesheet' type='text/css'>
        <script src="/js/third_party/jquery-1.6.4.min.js"></script>
    </head>
    <body>
        <div class="header"><a href="/">Solgen Sandbox</a></div>
        <div class="content_wrap">
            <div class="left_nav">
                <ul>
                    <li><a href="/">← Back</a></li>
                    <li><a href="./get_folders">Get Folders</a></li>
                    <li><a href="./palette_renderer">Palette Renderer</a></li>
                    <li><a href="./project_crud">Project CRUD</a></li>
                    <li><a href="./Zipper">Zipper</a></li>
                </ul>
            </div>
            <div class="center_content">
                <h3>php Section</h3>


                <strong>Cool php command : highlight_string.</strong>

               <p>Defined as syntax highlighted version of the given PHP code using the colors defined in the built-in syntax highlighter for PHP.
                       Quite nifty.<br/><br/>
                       Example :
                       <?
                       $str = "highlight_string('<a href=\"#\" >highlight it!</a>' ,false);";
                       highlight_string("$str",false); ?>
                </p>
            </div>
            <div class="right_hot_stuff">
                <p>Hot stuff and alerts go here</p>
            </div>
        </div>
        <div class="clearer" />
        <div class="footer">
            Footer goes here
        </div>

    </body>
</html>