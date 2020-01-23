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