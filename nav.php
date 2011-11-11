<!doctype html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Solgen Sandbox  :) </title>
        <link rel="stylesheet" type="text/css" media="all" href="/css/style.css" />
        <link href="http://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet" type="text/css"/>
        <script src="/js/third_party/modernizr-latest.js"></script>
        <script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
        <script src="/js/default.js"></script>
    </head>
        <body class="body" style="overflow:hidden;">
        <div class="body_content">
            <div class="content">
<?php
function build_tree($dir="projects"){
    $excpts_arr = array(".",".." , "nbproject" , ".git" , ".svn");
    // Open a known directory, and proceed to read its contents
    if (is_dir($dir)) {
        $dh = opendir($dir);
        if ($dh) {
            while (($file = readdir($dh)) !== false) {
//                    echo $file."<br/>".((is_dir($file))?"+":"-")."<br/>";
                if(!in_array("$file" ,$excpts_arr ) && is_dir($dir."/".$file)) {
                    $nar_arr[$file] = $dir."/".$file;
                }
            }
            closedir($dh);
        }
    }
    return $nar_arr;
}

$nav = build_tree();
foreach($nav as $dir_name=>$dir_path) {
    echo "<div id='".$dir_name."'  class='main_nav'  target ='showframe' >".$dir_name."<span id='main_nav_drop'><img src='/images/bg_images/down.png' /></span><div id='sub_nav'>&nbsp;<br/></div></div><br/>";
}
?></div>
</div>
</body>
</html>