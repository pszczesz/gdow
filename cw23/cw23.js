
window.onload = function () {
    var rows = 15;
    var cols = 15;
    document.getElementById("tabelka").innerHTML = gener(rows, cols);
    var tds = document.getElementsByTagName("td");
    
    for(var i=0;i<tds.length;i++){
        tds[i].addEventListener('contextmenu',function(evt){
            evt.preventDefault();
        },false);
        tds[i].onmousedown = function (event){
            if(event.button==0){
            this.innerHTML = '<img src="krzyzyk.jpg"/>';
            }else if(event.button==2){
                this.innerHTML = '<img src="koleczko.jpg"/>';
            }
        };
    }
};
function gener(rows, cols) {
    var html = "<table>\n";
    for (var i = 0; i < rows; i++) {
        html += "<tr>\n";
        for (var j = 0; j < cols; j++) {
            html += "\t<td></td>\n";
        }
        html += "</tr>\n";
    }
    html += "</table>";  
   // alert(html);
    return html;
}


