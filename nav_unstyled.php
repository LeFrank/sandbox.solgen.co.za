<?php
include 'nav_xml.php';

$navigation = new SimpleXMLElement($navigation_xml);
$str = "<div style='text-align:left;'>";
foreach($navigation->nav->projects->project_category as $item) {
    $str2 = "";
    if(isset($item->project)) {
        $str2 .="<ul>";
        foreach($item->project as $proj) {
            $str2 .= "<li>".$proj->name."</li>";
        }
        $str2 .="</ul>";
    }
    $str .= "<div style='width:200px;float:left;position:relative;border:solid 2px #ccc;'>".trim($item->name)."<br/>".$str2."</div>";
}
$str.'</div>';
echo $str;

?>
