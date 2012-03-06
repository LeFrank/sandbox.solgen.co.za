<?php
//require_once("../../init.php");
//echo str_replace(DOC_ROOT , "" , __FILE__)."<br/>";
    define("DOC_ROOT" ,  getenv("DOCUMENT_ROOT"));
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sandbox</title>
        <link rel="stylesheet" type="text/css" media="all" href="/css/black_and_yellow.css" />
        <link href='http://fonts.googleapis.com/css?family=Sarina' rel='stylesheet' type='text/css'>
        <script src="/js/third_party/jquery-1.6.4.min.js"></script>
    </head>
    <body>
        <div class="header"><a href="/">Solgen Sandbox</a></div>
        <div class="content_wrap">
            <div class="left_nav">
                <? include(DOC_ROOT."/nav_ul.php"); ?>
            </div>
            <div class="center_content">
                <h3>php Section</h3>
                <a href="./get_folders">Get Folders</a><br/>
                <a href="./palette_renderer">Palette Renderer</a><br/>
                <a href="./project_crud">Project CRUD</a><br/>
                <a href="./Zipper">Zipper</a><br/>
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