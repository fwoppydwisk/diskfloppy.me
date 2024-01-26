/**
 * Retrieves a cookies value
 * @param {string} cname Cookie name
 * @returns {string}     Cookie value
 */
function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) === 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

/**
 * Sets/creates a cookie
 * @param {string} cname  Cookie name
 * @param {string} cvalue Cookie value
 * @param {number} exdays Cookie lifespan (days)
 */
function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/;SameSite=Strict";
}

/**
 * Checks if a cookie exists
 * @param {string} cname Cookie name
 * @returns {boolean}    If cookie exists or not
 */
function cookieExists(cname) {
    const cvalue = getCookie(cname);
    return cvalue !== "";
}

/**
 * Swaps the colorscheme
 * @param {string} scheme Color scheme ID
 */
function swapScheme(scheme) {
    setCookie("colorscheme", scheme, 90);
    document.getElementById("css-colorscheme").href = `/css/colorschemes/${scheme}.css`;
    console.log(`Set colorscheme to ${getCookie("colorscheme")}`)
}

function setSchemeSelector() {
    if (!cookieExists("colorscheme")) {
        setCookie("colorscheme", "catppuccin-macchiato", 90);
    } else {
        const scheme = getCookie("colorscheme");
        const scheme_selector = document.getElementById("scheme-selector");
        if (scheme && scheme_selector) {
            for (let option of scheme_selector.options) {
                if (option.value === scheme) {
                    option.selected = true;
                    break;
                }
            }
        }
    }
}
