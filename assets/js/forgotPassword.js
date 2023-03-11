var forgotPassword = (function () {
    function forgotPassword() { }

    forgotPassword.emailSend = function () {
        debugger
        utility.resetErrorDivs();
        var isError = true;
        var email = $("#email").val();

        if (!email) {
            isError = false;
            /*$('#login_password_error').show();*/
        }

        else if (!utility.validateEmail(email)) {
            isError = false;
        }

        else if (email) {
            debugger
            var requestStatus = request.doAjaxRequest('GET', '', {}, JSON.stringify({ 'key': '1' }), 'json', false);

            if (requestStatus) {
                $('#email_notification').show();

                setTimeout(function () {
                    window.location.href = utility.hostUrl + "login/";
                }, 2000);
            }
            else {

            }
        }
        return isError;
    }
    return forgotPassword;
})();

/********forgotPassword Functions Calling********/