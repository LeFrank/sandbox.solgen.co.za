<?
require_once("../../init.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>HTML projects</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" type="text/css" media="all" href="/css/black_and_yellow.css" />
        <link href='http://fonts.googleapis.com/css?family=Sarina' rel='stylesheet' type='text/css'>
        <script src="/js/third_party/jquery-1.6.4.min.js"></script>
        <script src="/js/third_party/jquery.masonry.min.js"></script>
    </head>
    <body>
        <? include(DOC_ROOT."/header.php"); ?>
        <div class="content_wrap">
            <div class="left_nav">
                <ul>
                    <li><a href="/"  >← Back</a></li>
                    <li><a href="./canvas"  >Canvas</a></li>
                    <li><a href="./pull_down_menu"  >pull down menu</a></li>
                    <li><a href="./web_sockets"  >web sockets</a></li>
                    <li><a href="http://subtlepatterns.com/" target="_blank" >Subtle Patterns</a></li>
                </ul>
            </div>
            <div class="center_content">
                <h2>HTML Projects</h2>
                <h3>Meta Charset</h3>
                    Ever have weird characters show up on your web pages? <br/>
                    I don't think your character encoding is correct try adding the meta tag below, to the head section of your pages/template.<br/>

                <?= highlight_string('<meta http-equiv="Content-Type" content="text/html; charset=utf-8">' ,true); ?>
            </div>
            <div class="right_hot_stuff">
                Hot stuff and alerts go here
            </div>
        </div>
        <div class="clearer" />
        <? include(DOC_ROOT."/footer.php")?>

    </body>
</html>
