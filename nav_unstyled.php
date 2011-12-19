<?php
include 'nav_xml.php';

$navigation = new SimpleXMLElement($navigation_xml);
$str = "<div id='nav_container'>";
foreach($navigation->nav->projects->project_category as $item) {
    $str2 = "";
    if(isset($item->project)) {
//        $str2 .="<ul>";
        foreach($item->project as $proj) {
            $str2 .= "<a href='".$proj->path."'>".$proj->name."</a><br/>";
        }
//        $str2 .="</ul>";
    }
    $str .= "<div  id='nav_cat_item' class='nav_cat_item'><a href='".$item->path."'>".trim($item->name)."</a><br/>".$str2."</div>";
}
$str.='</div>';
echo $str;

?>
