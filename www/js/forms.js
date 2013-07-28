$(document).ready(function() {
	/* Checkboxes */

	$(".select_users label.checkbox").mouseup(function(){

    if($(this).hasClass("checked-box")){
			$(this).removeClass("checked-box");
    }else{
			$(this).addClass("checked-box");
    }
	});
});