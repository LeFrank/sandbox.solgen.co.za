function show_colour(ele){
    alert($(ele).css("background-color"));
}

function validate_range_limits(){
    var range_limit = 300;
    var ele_val_arr1 = $("#slider1").slider("values");
    var ele_val_arr2 = $("#slider2").slider("values");
    var ele_val_arr3 = $("#slider3").slider("values");
    var ele1 =  ele_val_arr1[1]  - $ele_val_arr1[0];
    var ele2 =  ele_val_arr2[1]  - $ele_val_arr2[0];
    var ele3 =  ele_val_arr3[1]  - $ele_val_arr3[0];
    if((ele1 + ele2 + ele3) >= range_limit ){
        $("#msg").html("The range selections are too dam high , make the selections smalller and try again").addClass("error").show();
        return false;
    }else{
        $("#msg").html("Executing...").addClass("success").hide();
        return true;
    }
}

//function set_val(){
//    var ele_val_arr1 = $("#slider1").slider("values");
//    var ele_val_arr2 = $("#slider2").slider("values");
//    var ele_val_arr3 = $("#slider3").slider("values");
//    $("#slider1_val").val(ele_val_arr1[0] +", "+ele_val_arr1[1]);
//    $("#slider2_val").val(ele_val_arr2[0] +", "+ele_val_arr2[1]);
//    $("#slider3_val").val(ele_val_arr3[0] +", "+ele_val_arr3[1]);
//}