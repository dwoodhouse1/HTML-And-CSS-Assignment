// ==========================================================================
// JavaScript Cookies
// ==========================================================================
const btnAcceptCookies = $(".btn-acceptcookies");
const btnManageConsent = $(".cookie-settings-btn");
const cookieSection = $("#cookie-consent");
const webPage = $("body");

btnAcceptCookies.click(() => {
    cookieSection.hide();
    setCookie("cookie", false, .001);
    webPage.css("overflow", "auto");
    console.log("cookie should be stored now");
    
})

btnManageConsent.click(() => {
    cookieSection.show();
    webPage.css("overflow", "hidden");

})

function setCookie(name, value, duration) {
    let date = new Date();
    date.setTime(date.getTime() + (duration * 24 * 60 * 60 * 1000)); // sets the numeric value inputted into 'duration' in days

    const expires = "expires=" + date.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + "; path=/"
}

function getCookie(name) {
    const cName = name + "=";
    const cDecoded = decodeURIComponent(document.cookie);
    const cArray = cDecoded.split("; ");
    let value;
    
    cArray.forEach(val => {
        if (val.indexOf(name) === 0) value = val.substring(name.length);
    })

    return value;
}

function cookieMessage() {
    if(!getCookie("cookie"))
    {
        console.log("cookie not here");
        cookieSection.show();
        cookieSection.css("display", "flex");
        cookieSection.css("justifyContent", "center");
        webPage.css("overflow", "hidden");
    }
}

window.addEventListener("load", cookieMessage);



