<?php
include 'nav_xml.php';

$navigation = new SimpleXMLElement($navigation_xml);
$str = "<div style='text-align:left;-moz-column-width: 13em; -webkit-column-width: 13em; -moz-column-gap: 1em; -webkit-column-gap: 1em; o-column-gap: 1em; column-gap: 1em;'>";
foreach($navigation->nav->projects->project_category as $item) {
    $str2 = "";
    if(isset($item->project)) {
        $str2 .="<ul>";
        foreach($item->project as $proj) {
            $str2 .= "<li><a href='".$proj->path."'>".$proj->name."</a></li>";
        }
        $str2 .="</ul>";
    }
    $str .= "<div style='width:200px;float:left;position:relative;border:solid 2px #ccc;margin:5px 10px;'><a href='".$item->path."'>".trim($item->name)."</a><br/>".$str2."</div>";
}
$str.='</div>';
echo $str;

?>
