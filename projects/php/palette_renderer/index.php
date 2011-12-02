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
        <link rel="stylesheet" type="text/css" media="all" href="http://<?= $path_to_resources."/css/".$cur_folder.".css" ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="./css/ui-darkness/jquery-ui-1.8.16.custom.css" />
        <script src="/js/third_party/jquery-1.6.4.min.js"></script>
        <script src="./js/jquery-ui-1.8.16.custom/js/jquery-ui-1.8.16.custom.min.js"></script>
	<style>
	#demo-frame > div.demo { padding: 10px !important; }
	</style>
	<script>
	$(function() {
		$( "#slider" ).slider({
                   slide : alert('asdasd') ,
                   change: rrr
                });
	});
        function rrr(){
            alert("3464b46");
        }
	</script>
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
        <?
        //slider controlls
        ?>
<div class="demo">

<div id="slider"></div>

</div><!-- End demo -->
<?
        $width = "50px";
        $height = "50px";
        for($i =0;$i <= 255;$i++) {
            echo "<div style='width:".$width.";height:".$height.";background-color: rgb(".$i." , 0, 0);margin:5px;float:left;' onclick='alert($(this).css(\"background-color\"));'></div>";
        }
        for($j =0;$j<= 255;$j++) {
            echo "<div style='width:".$width.";height:".$height.";background-color: rgb(0 , ".$j.", 0);margin:5px;float:left;'></div>";
        }
        for($k =0;$k<= 255;$k++) {
            echo "<div style='width:".$width.";height:".$height.";background-color: rgb(0,0, ".$k.");margin:5px;float:left;'></div>";
        }

        ?>
        <!--
             Close content :)
        -->
    </body>
</html>