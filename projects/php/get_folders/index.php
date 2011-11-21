<?php
define(DOC_ROOT,  getenv("DOCUMENT_ROOT"));

function build_tree($dir="projects") {
    $excpts_arr = array(".",".." , "nbproject" , ".git" , ".svn");
    // Open a known directory, and proceed to read its contents
    if (is_dir($dir)) {
        $dh = opendir($dir);
        if ($dh) {
            while (($file = readdir($dh)) !== false) {
                if(!in_array("$file" ,$excpts_arr ) && is_dir($dir."/".$file)) {
                    $nar_arr[$file] = $dir."/".$file;
                }
            }
            closedir($dh);
        }
    }
    return $nar_arr;
}
$str = "";
if( isset( $_GET['path'] ) ) {
    $tmp_arr = array();
    $tmp_arr =  build_tree(DOC_ROOT."/".$_GET[path] );
    if(count($tmp_arr) >= 1) {
        foreach($tmp_arr as $k=>$v) {
            $str .=  "<a href='http://".$_SERVER["HTTP_HOST"].$_GET['path']."/".$k."/index.php' target='content_frame' >$k</a><br/>";
        }
    }else{
        $str .=  "<a href='http://".$_SERVER["HTTP_HOST"].$_GET['path']."/index.php' target='content_frame' >Project Landing</a><br/>";
    }
    echo $str;

}
?>
