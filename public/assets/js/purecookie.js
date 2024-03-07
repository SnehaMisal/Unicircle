// --- Config --- //
var purecookieTitle = "Cookies."; // Title
var purecookieDesc = "We use our own and third-party cookies to personalise content <br>and to analize web traffic."; // Description
var purecookieLink = 'http://localhost/Unicircle_Website/cookie_policy'; // Cookiepolicy link
var purecookieButton = "Accept cookies"; // Button text
var rejectcookieButton = "Reject"; // Button text
// ---        --- //

function pureFadeIn(elem, display) {
    var el = document.getElementById(elem);
    el.style.opacity = 0;
    el.style.display = display || "block";

    (function fade() {
        var val = parseFloat(el.style.opacity);
        if (!((val += .02) > 1)) {
            el.style.opacity = val;
            requestAnimationFrame(fade);
        }
    })();
};

function pureFadeOut(elem) {
    var el = document.getElementById(elem);
    el.style.opacity = 1;

    (function fade() {
        if ((el.style.opacity -= .02) < 0) {
            el.style.display = "none";
        } else {
            requestAnimationFrame(fade);
        }
    })();
};

function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function eraseCookie(name) {
    document.cookie = name + '=; Max-Age=-99999999;';
}

function cookieConsent() {
    if (!getCookie('purecookieDismiss')) {
        document.body.innerHTML += '<div class="cookieConsentContainer" id="cookieConsentContainer"><div class="cookieDesc"><p>' + purecookieDesc + '<a href="' + purecookieLink + '"> Read more about cookies</a> ' + '</p></div><div class="cookieButton"><a class="accept-btn" onClick="purecookieDismiss();"> <img src="./dist/img/Cookie.png" style="width:auto;">' + purecookieButton + '</a><a class="reject-btn" onClick="Dismiss();">' + rejectcookieButton + '</a></div></div>';
        pureFadeIn("cookieConsentContainer");
    }
}

function purecookieDismiss() {
    setCookie('purecookieDismiss', '1', 7);
    pureFadeOut("cookieConsentContainer");
}

function Dismiss() {
    pureFadeOut("cookieConsentContainer");
}
window.onload = function() { cookieConsent(); };