$('#form-button-submit').on('click', function(e){
    e.preventDefault();
    var valid;	
    valid = validateContact();
    if(valid) {
        jQuery.ajax({
            url: "process.php",
            data:'userName='+$("#userName").val()+'&userEmail='+
            $("#userEmail").val()+'&content='+
            $(content).val(),
            type: "POST",
            success:function(data){
                $("#mail-status").html(data);
            },
            error:function (){}
        });
    }
});


function validateContact() {
    var valid = true;	
    $(".demoInputBox").css('background-color','');
    $(".info").html('');
    if(!$("#userName").val()) {
        $("#userName").css('background-color','#FFFFDF');
        valid = false;
    }
    if(!$("#userEmail").val()) {
        $("#userEmail").css('background-color','#FFFFDF');
        valid = false;
    }
    if(!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        $("#userEmail").css('background-color','#FFFFDF');
        valid = false;
    }
    if(!$("#content").val()) {
        $("#content").css('background-color','#FFFFDF');
        valid = false;
    }
    return valid;
}


