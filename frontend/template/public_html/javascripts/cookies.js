function showelement() {
    var div = document.createElement('div');
    div.setAttribute('id', 'twcCookieDiv');
    div.innerHTML = '<div class="twcCookieDivText">' + cookietext + '</div><div class="twcCookieDivLinks"><a href="cookie-policy" class="m-btn mini rnd">' + viewcookie + '</a ><a href="javascript:void(0);" class="m-btn blue mini rnd" onclick="resetcookievalue();">' + cookieaccept + '</a></div>';
    document.body.appendChild(div);
}

function getCookieHome(c_name) {
    var c_value = document.cookie;
    var c_start = c_value.indexOf(" " + c_name + "=");
    if (c_start == -1) {
        c_start = c_value.indexOf(c_name + "=");
    }
    if (c_start == -1) {
        c_value = null;
    }
    else {
        c_start = c_value.indexOf("=", c_start) + 1;
        var c_end = c_value.indexOf(";", c_start);
        if (c_end == -1) {
            c_end = c_value.length;
        }
        c_value = unescape(c_value.substring(c_start, c_end));
    }
    return c_value;
}

function setCookieHome(c_name, value, exdays) {
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
    document.cookie = c_name + "=" + c_value;
}

function checkCookieHome() {
    var username = getCookieHome("username");
    if (username != null && username != "") {
        if (username == "2") {
            $("#twcCookieDiv").hide();
        }
        else {
            showelement();
        }
    }
    else {
        showelement();
        setCookieHome("username", "1", 365);
    }
}

function resetcookievalue() {
    $("#twcCookieDiv").hide();
    setCookieHome("username", "2", 365);
}

$(window).load(function () {
    checkCookieHome();
});