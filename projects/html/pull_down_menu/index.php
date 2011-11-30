<?
define(DOC_ROOT,  getenv("DOCUMENT_ROOT"));
$path_to_resources = $_SERVER["SERVER_NAME"] .str_replace("/index.php", "", $_SERVER["PHP_SELF"]);
$cur_folder = explode("/",$path_to_resources);
$cur_folder = $cur_folder[count($cur_folder)-1];

?>
<!doctype html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Solgen Sandbox  HTML Stuff :) </title>
        <link rel="stylesheet" type="text/css" media="all" href="http://<?= $path_to_resources."/css/".$cur_folder.".css" ?>"" />
        <script src="/js/third_party/modernizr-latest.js"></script>
        <script src="/js/third_party/jquery-1.6.4.min.js"></script>
        <script src="/js/third_party/jquery.masonry.min.js"></script>
    </head>
    <body class="body">
                <!--
                    Open content  Do whatever :)
                -->
<div class="hover_nav_bar">
	<div class="hover_nav_bar_header">Hover over me to see something happen</div>
    <div class="hover_nav_bar_content">
        <? include_once(DOC_ROOT."/nav_unstyled.php"); ?>
    </div>
</div>
<br/><br/>
<br/>
                Special Chars go away - <code><?= htmlentities('<meta http-equiv="content-type" content="text/html; charset=utf-8">')?></code>
                <script type="text/javascript" >
                    $(function(){
                          $('#nav_container').masonry({
                            // options
                            itemSelector : '#nav_cat_item',
                            columnWidth : 240
                          });
                        });
                </script>
                <!--
                     Close content :)
                -->
    </body>
</html>