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
        <title>#title </title>
        <link rel="stylesheet" type="text/css" media="all" href="http://<?= $path_to_resources."/css/".$cur_folder.".css" ?>"" />
    </head>
    <body class="body">
        <div class="hover_nav_bar">
            <div class="hover_nav_bar_header">Global Menu</div>
            <div class="hover_nav_bar_content">
                <? include_once(DOC_ROOT."/nav_unstyled.php"); ?>
            </div>
        </div>
        <br/><br/>
        <br/>
        <!--
            Open content  Do whatever :)
        -->
        <!--
             Close content :)
        -->
    </body>
</html>