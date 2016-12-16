
window.onload = function () {
    var rows = 15;
    var cols = 15;
    document.getElementById("tabelka").innerHTML = gener(rows, cols);
    var tds = document.getElementsByTagName("td");
    for(var i=0;i<tds.length;i++){
        tds[i].onclick = function (){
            this.innerHTML = '<img src="krzyzyk.jpg"/>';
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


