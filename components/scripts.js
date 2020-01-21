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