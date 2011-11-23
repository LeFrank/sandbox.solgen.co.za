<!doctype html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Solgen Sandbox  :) </title>
        <link rel="stylesheet" type="text/css" media="all" href="/css/style.css" />
        <link href="http://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet" type="text/css"/>
        <script src="/js/third_party/modernizr-latest.js"></script>
        <script src="/js/third_party/jquery-1.6.4.min.js"></script>
        <script src="/js/default.js"></script>
    </head>
        <body class="body" style="overflow:hidden;width:270px;">
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

//$nav = build_tree();
include 'nav_xml.php';

$navigation = new SimpleXMLElement($navigation_xml);
foreach($navigation->nav->projects->project_category as $item) {
    $str .= "<div id='".$item->name."'  class='main_nav'  target ='showframe' >".$item->name;
    $str.= "<span id='main_nav_drop'><img src='/images/bg_images/down.png' /></span><div id='sub_nav'>&nbsp;<br/></div></div><br/>";
}
echo $str;
?></div>
</div>
</body>
</html>