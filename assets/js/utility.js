var utility = (function () {
    function utility() { }

    utility.hostUrl = window.location.href.indexOf("localhost:8089") > 1 ? "http://localhost:8089/panopte/" : "https://panoptesan.thesuitchstaging.com/";
    utility.SuperAdminLoginUrl = "http://panoptesan.thesuitchstaging.com:4000/superadmin/login";
    utility.SuperAdminRegisterUrl = "http://panoptesan.thesuitchstaging.com:4000/superadmin/register";

    utility.setCookie = function (name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    utility.getCookie = function (name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    utility.eraseCookie = function (cookieArr) {
        for (var i = 0; i < cookieArr.length; i++) {
            document.cookie = cookieArr[i] + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        }
    }

    utility.validateEmail = (email) => {
        return email.match(
            /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        );
    };

    utility.resetErrorDivs = function (name) {
        $('#email_notification').hide();
        $('#password_error').hide();
        $('#login_password_error').hide();
        $('#password_notification').hide();
        $('#fields_error').hide();
        $('#login_error').hide();
        $('#wrong_code_error').hide();
        $('#email_notification').hide();
    }

    utility.redirect = function (viewName) {
        window.location.href = utility.hostUrl + viewName +"/";
    };

    return utility;
})();

/********Login Functions Calling********/
