var signup = (function () {
    function signup() { }

    signup.createUser = function () {

        utility.resetErrorDivs();
        var isError = true;
        var name = $("#name").val();
        var email = $("#email").val();
        var pass = $("#pass").val();
        var pass2 = $("#pass2").val();
        
        if (!email || !pass) {
            $('#login_password_error').show();
            isError = false;
        }

        else if (!utility.validateEmail(email)) {
            $('#email_error').show();
            isError = false;
        }

        else if (pass != pass2) {
            $('#password_error').show();
            isError = false;
        }

        else if (email && pass) {
            
            var isAggrementCheck = false;
            $('input[name="customControlAutosizing"]:checked').each(function () {
                isAggrementCheck = true;
            });

            if (isAggrementCheck) {
                request.doAjaxRequest("POST", utility.SuperAdminRegisterUrl, JSON.stringify({ "username": name,"contact_number": "+923323564667", "email": email, "password": pass, "city_id": 1, "is_active": true }), function (d) {
                    
                    if (d.status) {
                        window.location.href = utility.hostUrl + "login/";
                    } else {
                        $('#password_error').show();
                    }
                });
            }
            else {
                alert('Please check to agree term and services');
                isError = false;
            }
        }
        debugger
        return isError;
    }

    return signup;
})();

/********Signup Functions Calling********/

$("body").on('click', '.toggle-password', function () {
    var input = $("#" + this.previousElementSibling.id);
    if (input.attr("type") === "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});