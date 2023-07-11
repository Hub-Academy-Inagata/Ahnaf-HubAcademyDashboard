function selectfocus(theP) {
    var x = document.getElementsByTagName("p");
    var i;
    for (i = 0; i < x.length; i++) {
        x[i].style.backgroundColor = "";
        x[i].style.color = "";
        x[i].style.border = "";
        x[i].style.transition = "1s ease";
    }
    theP.style.backgroundColor = "white";
    theP.style.color = "black";
    theP.style.border = "1px solid var(--primary)";
    theP.style.transition = "0.3s ease";
}

function selectfocuss(boxfocus) {
    var x = document.getElementsByTagName("p");
    var i;
    for (i = 0; i < x.length; i++) {
        x[i].style.backgroundColor = "";
        x[i].style.color = "";
        x[i].style.border = "";
        x[i].style.boxShadow = "";
        x[i].style.transition = "0.3s ease";
    }
    boxfocus.style.backgroundColor = "white";
    boxfocus.style.color = "black";
    boxfocus.style.border = "1px solid var(--gray-lines)";
    boxfocus.style.transition = "0.3s ease";
    boxfocus.style.boxShadow = "0px 0px 8px 0px rgba(235, 34, 39, 0.25)";
}