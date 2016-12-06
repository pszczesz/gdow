

window.onload = function () {
    var sel = document.getElementsByName("imiona")[0].value;
    document.getElementById(sel).className = "show";
    document.getElementsByName("imiona")[0].onclick = function () {
        var pars = document.getElementsByTagName("p");
        for (var i = 0; i < pars.length; i++) {
            pars[i].className = "hide";
        }
        var sel = document.getElementsByName("imiona")[0].value;
        document.getElementById(sel).className = "show";
    };
};
