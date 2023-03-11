var otpSetup = (function () {
    function otpSetup() { }

    otpSetup.IsValidate = function () {
        debugger
        utility.resetErrorDivs();
        var isError = true;
        var digit1 = $("#digit-1").val();
        var digit2 = $("#digit-2").val();
        var digit3 = $("#digit-3").val();
        var digit4 = $("#digit-4").val();
        var digit5 = $("#digit-5").val();
        debugger
        if (!digit1 || !digit2 || !digit3 || !digit4 || !digit5) {
            /*$('#wrong_code_error').show();*/
            isError = false;
        }

        else if (digit1 && digit2 && digit3 && digit4 && digit5) {
            var requestStatus = request.doAjaxRequest('GET', '', {}, JSON.stringify({ 'key': '1' }), 'json', false);

            if (requestStatus) {
                window.location.href = utility.hostUrl + "profile/";
            }
        }
        return isError;
    }
    return otpSetup;
})();

/********otpSetup Functions Calling********/