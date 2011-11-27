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
        <link rel="stylesheet" type="text/css" media="all" href="http://<?= $path_to_resources."/css/".$cur_folder.".css" ?>"" />
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
        <div style="position:relative;border:solid 2px #ccc;">
<?php
include_once  DOC_ROOT.'/nav_xml.php';
$navigation = new SimpleXMLElement($navigation_xml);
$project_name_error = "";
if(!empty($_POST)){
    $post=$_POST;
    if($post["project_name"] == ""){
        $project_name_error = "Please bang in a project name.";
    }else{
        //create project copy the selected template
        //under the selected project Category and
        //rename it and the placeholders in the files.
        try{
         exec("cp -ap ".DOC_ROOT."/projects/".$post["project_template"] . " ".DOC_ROOT.$post["project_category"]."/".str_replace(" ", "_",$post["project_name"]) , $resp);
         //TODO: update xml to reflect this new entry
         echo "Sucessfully created the ".$post["project_name"]." project";
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }
}
?>
<h2>Create a new project</h2>
<form action="" method="POST" name="project_crud_form">
<br/>
<span class="input_label">
    Select Project Category 
</span><br/>
<select id="project_category" name="project_category" >
<?
foreach($navigation->nav->projects->project_category as $item) {
    echo "<option value='".$item->path."'>".trim($item->name)."</option>";
}
?>
</select>
<br/><br/>
<span class="input_label">
    Select Project Category 
</span><br/>
<select id="project_template" name="project_template" >
    <option value='php/project_crud/project_template/default' >default</option>
</select>
<br/><br/>
<span class="input_label">
    Project Name <span id="project_name_error"><? echo (($project_name_error != "")? " - <span style='color:red;'>".$project_name_error."</span>": "");?></span>
</span><br/>
<input name="project_name" id="project_name" type="text" value="" />
<br/><br/>
<input type="submit" value="Create Project" id="project_create" name="project_create" />
</form>
</div>
    </body>
    </html>
