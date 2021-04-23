"use strict";
exports.__esModule = true;
var jquery_1 = require("jquery");
/*onscrolls===========================*/
window.onscroll = function () {
    scrollFunction();
};
/*onload===========================*/
window.onload = function () {
    addUnicodeMenu();
};
// Set.prototype.add();
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
function scrollFunction() {
    var navbarKiko = document.getElementById("navbarkiko");
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        navbarKiko.style.padding = "10px 20px";
        navbarKiko.style.background = "#1B527C";
        navbarKiko.style.marginTop = "0";
    }
    else {
        // document.getElementById("navbarkiko").style.padding = "80px 10px";
        navbarKiko.style.background = "transparent";
        navbarKiko.style.marginTop = "5vh";
    }
}
function addUnicodeMenu() {
    var menuItem = document.getElementsByClassName("menu-item-has-children");
    console.log(menuItem);
    var getLi = document.getElementsByTagName("li");
    console.log(getLi);
    if (jquery_1["default"]("li").hasClass("menu-item-has-children")) {
        // menuItem.append("done");
    }
}
/*=================== if document is ready*/
jquery_1["default"](document).ready(function () {
    addUnicodeMenu();
    console.log("lolo mo");
});
