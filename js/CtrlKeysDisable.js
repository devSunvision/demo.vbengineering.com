document.addEventListener('contextmenu', event => event.preventDefault());

$(document).keydown(function (event) {
    if (event.keyCode == 123) { // Prevent F12
        return false;
    } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I
        return false;
    }
});
document.onkeydown = function (e) {
    if (e.ctrlKey &&
        (e.keyCode === 67 ||
            e.keyCode === 86 ||
            e.keyCode === 85 ||
            e.keyCode === 17 ||
            e.keyCode === 115 ||
            e.keyCode === 16 ||
            e.keyCode === 19 ||
            e.keyCode === 117)) {
        return false;
    } else {
        return true;
    }
};
jQuery(document).ready(function ($) {
    $(document).keydown(function (event) {
        var pressedKey = String.fromCharCode(event.keyCode).toLowerCase();

        if (event.ctrlKey && (pressedKey == "j" || pressedKey == "u" || pressedKey == "s")) {
            //disable key press porcessing
            return false;
        }
    });
});