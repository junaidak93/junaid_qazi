var signup = (function () {
    function signup() { }

    signup.createUser = function () {
        debugger
        utility.resetErrorDivs();
        var isError = true;
        var name = $("#name").val();
        var email = $("#email").val();
        var pass = $("#pass").val();
        var pass2 = $("#pass2").val();
        
        if (!email || !pass) {
            /*$('#login_password_error').show();*/
            isError = false;
        }

        else if (!utility.validateEmail(email)) {
            isError = false;
        }

        else if (pass != pass2) {
            isError = false;
        }

        else if (email && pass) {
            debugger
            var isAggrementCheck = false;
            $('input[name="customControlAutosizing"]:checked').each(function () {
                isAggrementCheck = true;
            });

            if (isAggrementCheck) {
                var requestStatus = request.doAjaxRequest('GET', '', {}, JSON.stringify({ 'key': '1' }), 'json', false);
                if (requestStatus) {
                    //Send one time password
                    requestStatus = request.doAjaxRequest('GET', '', {}, JSON.stringify({ 'key': '1' }), 'json', false);
                    if (requestStatus) {
                        window.location.href = utility.hostUrl + "one-time-password/";
                    }

                } else {

                }
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