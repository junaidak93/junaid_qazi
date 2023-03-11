var createNewPass = (function () {
    function createNewPass() { }

    createNewPass.generatePassword = function () {
        debugger
        utility.resetErrorDivs();
        var isError = true;
        var pass = $("#pass").val();
        var pass2 = $("#pass2").val();
        
        if (!pass || !pass2) {
            /*$('#login_password_error').show();*/
            isError = false;
        }

        else if (pass != pass2) {
            isError = false;
        }

        else if (pass && pass2) {
            debugger
            var requestStatus = request.doAjaxRequest('GET', '', {}, JSON.stringify({ 'key': '1' }), 'json', false);
            if (requestStatus) {
                $('#password_notification').show();

                setTimeout(function () {
                    window.location.href = utility.hostUrl + "login/";
                }, 2000);
            }
            else {

            }
        }
        debugger
        return isError;
    }

    return createNewPass;
})();

/********createNewPass Functions Calling********/