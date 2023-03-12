var request = (function () {
    function request() { }

    jQuery.support.cors = true;

    request.doAjaxRequest = function (type, url, data, callback) {
        $.ajax({
            type: type,
            url: url,
            crossDomain: true,
            data: data,
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            processData: false,
            //headers: headersData,
            success: function (o) {
                if (!o) {
                    console.log("web service call returned null");
                    return;
                }
                if (o.length == 0) {
                    console.log("web service returned empty object");
                    return;
                }

                callback(o);
            },
            error: function (err) {
                console.log("AJAX ERROR");
                console.log(err.responseText);
            }
        });
    };
    return request;
})();