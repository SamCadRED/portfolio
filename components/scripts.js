var visible = false;
function showMenu() {
    event.preventDefault();
    var ppeCont = document.getElementById('visible');
    if (!visible) {
        ppeCont.style.display = "block";
        visible = true;
    } else {
        ppeCont.style.display = "none";
        visible = false;
    }
}

var isVisible = false;
function showActivitee() {
    event.preventDefault();
    var actviteeCont = document.getElementById('ac_visible');
    if (!isVisible) {
        actviteeCont.style.display = "block";
        isVisible = true;
    } else {
        actviteeCont.style.display = "none";
        isVisible = false;
    }
}

var dark = true;
function setTheme() {
    if (dark) {
        document.documentElement.style.setProperty('--color-light', '#202020');
        document.documentElement.style.setProperty('--color-theme', '#e2b237');
        document.documentElement.style.setProperty('--color-dark', '#e5e5e5');
    } else {
        document.documentElement.style.setProperty('--color-light', '#e5e5e5');
        document.documentElement.style.setProperty('--color-theme', '#e2b237');
        document.documentElement.style.setProperty('--color-dark', '#202020');
    }
}