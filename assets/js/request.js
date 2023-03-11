var request = (function () {
    function request() { }

    request.doAjaxRequest = function (type, url, headersData, parameterData, datatype, async) {
        var result = "";
        $.ajax({
            type: type,
            url: url,
            data: parameterData,
            headers: headersData,
            contentType: "application/json;",
            async: async,
            datatype: datatype,
            success: function (data) {
                result = data;
            },
            failure: function (data) {
                result = data;
            }
        });

        return result;
    }

    return request;
})();