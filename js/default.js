
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
            //ajax function to get content for now just putting something in to triger frameset activation.
            $("#"+this.id+" #sub_nav").toggle().attr("inline", "none").html("<a href='/projects/css/index.php' target='content_frame' >CSS Project home page.</a>");
    });
});
function show_drop_down(ele){
}

