var login = (function () {
    function login() { }

    login.Authenticate = function () {
        utility.resetErrorDivs();
        var isError = true;
        var email = $("#email").val();
        var pass = $("#pass").val();

        if (!email || !pass) {
            isError = false;
            $('#login_password_error').show();
        }

        else if (!utility.validateEmail(email)) {
            $('#email_error').show();
            isError = false;
        }

        else if (email && pass) {
            request.doAjaxRequest("POST", utility.SuperAdminLoginUrl, JSON.stringify({ "username": email, "email": email, "password": pass }), function (d) {
                if (d.status) {
                    utility.setCookie('email', email, 7);
                    utility.setCookie('pass', pass, 7);
                    utility.setCookie('logged_in', true, 7);
                    
                    $('input[name="customControlAutosizing"]:checked').each(function () {
                        utility.setCookie('rememberme', 1, 7);
                    });
                    utility.redirect("profile");
                } else {
                    $('#login_error').show();
                }
            });
        }
        return isError;
    }

    return login;
})();

/********Login Functions Calling********/

if (utility.getCookie("rememberme") == 1) {
    $("#email").val(utility.getCookie("email"));
    $("#pass").val(utility.getCookie("pass"));
}

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

