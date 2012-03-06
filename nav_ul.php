<?php
include 'nav_xml.php';

$navigation = new SimpleXMLElement($navigation_xml);
$str = "";
foreach($navigation->nav->projects->project_category as $item) {
        $str .="<ul>";
//        foreach($item->project as $proj) {
//            $str .= "<li><a href='".$proj->path."'>".$proj->name."</a></li>";
//        }
//    }
    $str .= "<li><a href='".$item->path."'>".trim($item->name)."</a></li>";
    $str .= "</ul>";
}
echo $str;

?>