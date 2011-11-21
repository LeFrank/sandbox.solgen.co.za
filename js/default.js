
$(document).ready(function() {
    // put all your jQuery goodness in here.
    $(".main_nav").mouseover(
        function (){
            $("#"+this.id+" #main_nav_drop").toggle().attr("inline", "none");
    });
    $(".main_nav").mouseout(
        function (){
            $("#"+this.id+" #main_nav_drop").toggle().attr("inline", "none");
    });
    $(".main_nav").click(
        function (){
                $("#"+this.id+" #sub_nav").toggle().attr("inline", "none").html("<a href='/projects/"+this.id+"/index.php' target='content_frame' >"+this.id+" Project home page.</a>");
            //ajax function to get content for now just putting something in to triger frameset activation.
            $.get("/projects/php/get_folders/index.php?path=/projects/"+this.id
            ,function(data)
            {
//                $("#"+this.id+" #sub_nav").toggle().attr("inline", "none").html(data);
            }); 
    });
});
//            $("#"+this.id+" #sub_nav").toggle().attr("inline", "none").html("<a href='/projects/css/index.php' target='content_frame' >CSS Project home page.</a>");
function get_folders(path){
    
}

