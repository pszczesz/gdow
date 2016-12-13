
window.onload = function () {
   
    document.getElementById("oblicz").onclick = function () {
        var wartosc = parseFloat(document.getElementById("wartosc").value);
        
        if (!isNaN(wartosc)) {
            var wybor = document.getElementsByName("wybor");
            var check = wybor[0].checked ? "c" : "f";
            
            switch(check){
                case "c" : var wynik = (9/5*wartosc+32).toFixed(2)+" <sup>o</sup>F"; break;
                case "f" : var wynik = (5/9*(wartosc-32)).toFixed(2)+" <sup>o</sup>C"; break;
            }
            
            document.getElementById("wynik").innerHTML = wynik;
        }else{
             document.getElementById("wynik").innerHTML = "błędne dane";
        }
    };
};
