$(document).ready(function() {
    $("#response_div").hide();
    $("#response_register_div").hide();

    $("#contact_form").submit(function()
    {
        var baseURL = window.location.protocol + '//' + window.location.host;
        if(baseURL.indexOf("localhost") > -1){
            baseURL=baseURL + '/cccuon.org';
        }
        var url = baseURL + "/index.php/index/message";
        $.ajax({
            type: "POST",
            url: url,
            data: {name: $("#name").val(), email: $("#email_contact").val(), subject: $("#subject").val(), message: $("#message").val()},
            dataType: "text",
            cache: false,
            success:
                    function(data) {
                        $("#response").text(data);
                        $("#response_div").show();
                    }
        });
        return false;
    });

     $("#register_form").submit(function()
    {
        var baseURL = window.location.protocol + '//' + window.location.host;
        if(baseURL.indexOf("localhost") > -1){
            baseURL=baseURL + '/cccuon.org';
        }
        var url = baseURL + "/index.php/index/register";
        $.ajax({
            type: "POST",
            url: url,
            data: {first_name: $("#first_name").val(),
                    last_name: $("#last_name").val(), 
                    phone_no: $("#phone_no").val(),
                     email: $("#email").val(),
                     course: $("#course").val(),
                      reg_no: $("#reg_no").val(),
                       gender: $("#gender").val(),
                        hall: $("#hall").val()},
            dataType: "text",
            cache: false,
            success:
                    function(data) {
                        $("#response_register").text(data);
                        $("#response_register_div").show();
                    }
        });
        return false;
    });
});