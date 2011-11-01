<?php
<<<<<<< HEAD
define(DOC_ROOT,  getenv("DOCUMENT_ROOT"));
function build_tree($dir="./projects") {
=======
function build_tree($dir="projects"){
>>>>>>> 77d64baea62421ae497773dded5cf2713a2d3023
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
    echo "<a href='".str_replace(DOC_ROOT , "" ,$dir_path)."/index.php'>".$dir_name."</a>";
}
?>