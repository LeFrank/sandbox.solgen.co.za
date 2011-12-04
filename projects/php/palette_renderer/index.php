<?
define(DOC_ROOT,  getenv("DOCUMENT_ROOT"));
$path_to_resources = $_SERVER["SERVER_NAME"] .str_replace("/index.php", "", $_SERVER["PHP_SELF"]);
$cur_folder = explode("/",$path_to_resources);
$cur_folder = $cur_folder[count($cur_folder)-1];
$slider1_range = array("min" => 125 , "max" => 170);
$slider2_range = array("min" => 125 , "max" => 170);
$slider3_range = array("min" => 125 , "max" => 170);
$colour_group = 0;
$post = "";
if(isset($_POST)) {
    $post = $_POST;
    if($post["colour_group"]){
        $colour_group = 1;
    }
    if($post["slider1_val"] != '') {
        $post["slider1_val"]  = explode(",",$post["slider1_val"]);
        $slider1_range["min"] = $post["slider1_val"][0];
        $slider1_range["max"] = $post["slider1_val"][1];
    }
    if($post["slider2_val"] != '') {
        $post["slider2_val"]  = explode(",",$post["slider2_val"]);
        $slider2_range["min"] = $post["slider2_val"][0];
        $slider2_range["max"] = $post["slider2_val"][1];
    }
    if($post["slider3_val"] != '') {
        $post["slider3_val"]  = explode(",",$post["slider3_val"]);
        $slider3_range["min"] = $post["slider3_val"][0];
        $slider3_range["max"] = $post["slider3_val"][1];
    }
}

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
        <script src="./js/default.js"></script>
        <style>
            #demo-frame > div.demo { padding: 10px !important; }
        </style>
        <script>
            $(function() {
                $( "#slider1" ).slider({
                    animate: true,
                    max:255,
                    min:0,
                    values:[<?= $slider1_range["min"]?>, <?= $slider1_range["max"]?>],
                    slide:function(event,ui){
                        set_val();
                    },
                    change:function(event,ui){
                        set_val();
                    }
                });
                $( "#slider2" ).slider({
                    animate: true,
                    max:255,
                    min:0,
                    values:[<?= $slider2_range["min"]?>, <?= $slider2_range["max"]?>],
                    slide:function(event,ui){
                        set_val();
                    },
                    change:function(event,ui){
                        set_val();
                    }
                });
                $( "#slider3" ).slider({
                    animate: true,
                    max:255,
                    min:0,
                    values:[<?= $slider3_range["min"]?>, <?= $slider3_range["max"]?>],
                    slide:function(event,ui){
                        set_val();
                    },
                    change:function(event,ui){
                        set_val();
                    }
                });
            });

            function set_val(){
                $ele_val_arr1 = $("#slider1").slider("values");
                $ele_val_arr2 = $("#slider2").slider("values");
                $ele_val_arr3 = $("#slider3").slider("values");
                $("#slider1_val").val($ele_val_arr1[0] +", "+$ele_val_arr1[1]);
                $("#slider2_val").val($ele_val_arr2[0] +", "+$ele_val_arr2[1]);
                $("#slider3_val").val($ele_val_arr3[0] +", "+$ele_val_arr3[1]);

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
        <br/>
        <!--
            Open content  Do whatever :)
        -->
        <h1>Colour Palette</h1>
        <h3>Objective : learn more about colour theory, what works and what does not.</h3>
        <ol>
            <li>
                Q : What colour range do pastels live in?<br/>
                A : My Theory is that a pastel must have an agregate value higher than 

            </li>
        </ol>
        <?
        //slider controlls
        ?>
        <div id="msg" style="display:none;" ></div>
        <form name="palette_renderer" id="palette_renderer" action=""  method="POST" >
        <div class="demo" style="width:90%;">
            <div style="float:left;width:100px;" >Red : </div>
            <input type ="input" id="slider1_val" name="slider1_val"  value="<? echo $slider1_range["min"] .",".$slider1_range["max"]; ?>" />&nbsp;&nbsp;&nbsp;
            <div id="slider1" style="width:80%;float:right;"></div><br/>

            <div style="float:left;width:100px;" >Green : </div>
            <input type ="input" id="slider2_val" name="slider2_val" value="<? echo $slider2_range["min"] .",".$slider2_range["max"]; ?>" />&nbsp;&nbsp;
            <div id="slider2" style="width:80%;float:right;"></div><br/>

            <div style="float:left;width:100px;" >Blue : </div>
            <input type ="input" id="slider3_val" name="slider3_val" value="<? echo $slider3_range["min"] .",".$slider3_range["max"]; ?>"  />&nbsp;&nbsp;
            <div id="slider3" style="width:80%;float:right;"></div><br/>
            
        </div><!-- End demo -->
        <br/>
        Group by Colour ?
        <input type="checkbox" id="colour_group" name="colour_group"  <? echo ($colour_group)?"checked":""; ?> />
        <br/>
            <input type="submit" id="render_rgb_palette" name="render_rgb_palette"  value="Render Palette" onclick="return validate_range_limits();" />
        </form>
        <br/>
        <?
        $width = "50px";
        $height = "50px";

        //default action
        if($post == "") {
            for($i =0;$i <= 255;$i++) {
                echo "<div style='width:".$width.";height:".$height.";background-color: rgb(".$i." , 0, 0);margin:5px;float:left;' onclick='alert($(this).css(\"background-color\"));'></div>";
            }
            for($j =0;$j<= 255;$j++) {
                echo "<div style='width:".$width.";height:".$height.";background-color: rgb(0 , ".$j.", 0);margin:5px;float:left;'></div>";
            }
            for($k =0;$k<= 255;$k++) {
                echo "<div style='width:".$width.";height:".$height.";background-color: rgb(0,0, ".$k.");margin:5px;float:left;'></div>";
            }
        }else {
            //evaluate post variables
            if($colour_group){
                for($i = $slider1_range["min"];$i <= $slider1_range["max"];$i++) {
                    for($j = $slider2_range["min"] ;$j <= $slider2_range["max"];$j++) {
                        for($k = $slider3_range["min"];$k<= $slider3_range["min"];$k++) {
                            echo "<div style='width:".$width.";height:".$height.";background-color: rgb(".$i." ,".$j.", ".$k.");margin:5px;float:left;' onclick='alert($(this).css(\"background-color\"));'></div>";
                        }
                    }
                }
                echo "<div style='clear:both;' /><br/><hr/><br/>";
                for($j = $slider2_range["min"] ;$j <= $slider2_range["max"];$j++) {
                    for($i = $slider1_range["min"];$i <= $slider1_range["max"];$i++) {
                        for($k = $slider3_range["min"];$k<= $slider3_range["min"];$k++) {
                            echo "<div style='width:".$width.";height:".$height.";background-color: rgb(".$i." ,".$j.", ".$k.");margin:5px;float:left;' onclick='alert($(this).css(\"background-color\"));'></div>";
                        }
                    }
                }
                echo "<div style='clear:both;' /><br/><hr/><br/>";
                for($k = $slider3_range["min"];$k<= $slider3_range["min"];$k++) {
                    for($i = $slider1_range["min"];$i <= $slider1_range["max"];$i++) {
                        for($j = $slider2_range["min"] ;$j <= $slider2_range["max"];$j++) {
                            echo "<div style='width:".$width.";height:".$height.";background-color: rgb(".$i." ,".$j.", ".$k.");margin:5px;float:left;' onclick='alert($(this).css(\"background-color\"));'></div>";
                        }
                    }
                }
                echo "<br/><br/>";
            }else{
                for($i = $slider1_range["min"];$i <= $slider1_range["max"];$i++) {
                    for($j = $slider2_range["min"] ;$j <= $slider2_range["max"];$j++) {
                        for($k = $slider3_range["min"];$k<= $slider3_range["min"];$k++) {
                            echo "<div style='width:".$width.";height:".$height.";background-color: rgb(".$i." ,".$j.", ".$k.");margin:5px;float:left;' onclick='alert($(this).css(\"background-color\"));'></div>";
                        }
                    }
                }
            }
        }

        ?>
        <!--
             Close content :)
        -->
    </body>
</html>