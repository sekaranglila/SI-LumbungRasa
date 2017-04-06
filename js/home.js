/* Functions */

//Dropdown menu
$(document).ready(function () {
$('.navbar .dropdown').hover(function () {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(105)
    });
});

//Form Validation
function validateEmail(email) {
  var e = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return e.test(email);
}

$('form').on('submit', function (e) {
    var focusSet = false;
    //Check nama
     if (!$('#name').val()) {
        if ($("#name").parent().next(".validation").length == 0) // only add if not added
        {
            $("#name").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>This field is required.</div>");
        }
        e.preventDefault(); // prevent form from POST to server
        if (!focusSet) {
            $("#name").focus();
        } 
    } else {
        $("#name").parent().next(".validation").remove(); // remove it
    }

    //Check Email
    var email = $("#email").val();
    if (!$('#email').val()) {
        if ($("#email").parent().next(".validation").length == 0) // only add if not added
        {
            $("#email").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>This field is required.</div>");
        }
        e.preventDefault(); // prevent form from POST to server
        $('#email').focus();
        focusSet = true;
    } else if (validateEmail(email) == false){ //if email not valid
    	if ($("#email").parent().next(".validation") == 0) // only add if not added
        {
    		$("#email").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Invalid email address.</div>");
    	} else {
    		$("#email").parent().next(".validation").remove();
    		$("#email").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>Invalid email address.</div>");
    	} 
    	e.preventDefault(); // prevent form from POST to server
        $('#email').focus();
        focusSet = true;
    } else {
        $("#email").parent().next(".validation").remove(); // remove it
    }

    //Check Message
    if (!$('#message').val()) {
        if ($("#message").parent().next(".validation").length == 0) // only add if not added
        {
            $("#message").parent().after("<div class='validation' style='color:red;margin-bottom: 20px;'>This field is required.</div>");
        }
        e.preventDefault(); // prevent form from POST to server
        if (!focusSet) {
            $("#message").focus();
        }
    } else {
        $("#message").parent().next(".validation").remove(); // remove it
    }
}); 