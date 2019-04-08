<?php
function ajax(){
    let str = question.value;
    console.log(str);//debug
    if (str == "") {
        document.getElementById("txthint").innerHTML = "";
        return;
    }
    let xmlhttp = new XMLttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200){
            txtHint.innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "getdata.php?q="+str,true);
    xmlttp.send();
    
}
function clear(){}

?>