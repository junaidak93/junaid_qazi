var login = (function () {
    function login() { }

    login.Authenticate = function () {
        debugger
        utility.resetErrorDivs();
        var isError = true;
        var email = $("#email").val();
        var pass = $("#pass").val();
        
        if (!email || !pass) {
            isError = false;
            /*$('#login_password_error').show();*/
        }

        else if (!utility.validateEmail(email)) {
            isError = false;
        }

        else if (email && pass) {
            var requestStatus = request.doAjaxRequest('GET', '', {}, JSON.stringify({ 'key': '1' }), 'json', false);
            if (requestStatus) {
                $('input[name="customControlAutosizing"]:checked').each(function () {
                    utility.setCookie('email', email, 7);
                    utility.setCookie('pass', pass, 7);
                });

                //Send one time password
                requestStatus = request.doAjaxRequest('GET', '', {}, JSON.stringify({ 'key': '1' }), 'json', false);
                if (requestStatus) {
                    window.location.href = utility.hostUrl + "one-time-password/";
                }
               
            } else {

            }
        }
        return isError;
    }

    return login;
})();

/********Login Functions Calling********/

$("#email").val(utility.getCookie("email"));
$("#pass").val(utility.getCookie("pass"));


$("#customControlAutosizing").change(function () {
    if (!this.checked) {
        utility.eraseCookie('email');
        utility.eraseCookie('pass');
    }
});

$("body").on('click', '.toggle-password', function () {
    var input = $("#pass");
    if (input.attr("type") === "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});

