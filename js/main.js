let ajax = new XMLHttpRequest();

function getByCPU()
{
    

    var requestVal = document.getElementById("select_CPU").value;

    ajax.onreadystatechange = resultByCPU; 
    var params = "select_CPU=" + encodeURIComponent(requestVal);
    ajax.open("GET", "./php/ajax_responce/responce_CPU.php?"+params, true);
    ajax.send(null)
}

function resultByCPU()
{
    if (ajax.readyState== 4)  
    {   
        if(ajax.status== 200) 
        {
            // If no errors
            var select = document.getElementById("result_CPU");
            select.innerHTML= ajax.responseText;
        }
        else alert(ajax.status+ " -" + ajax.statusText);
        ajax.abort();
    }
}

function getBySoftware()
{
    //alert("Sending getBySoftware");
    if (!ajax)
    {
        alert("Ajax not initialized");
        return;  
    }

    var pcBySoftware = document.getElementById("select_Software").value;
    //alert(s2val);

    ajax.onreadystatechange = resultBySoftware; 
    var params = 'select_Software=' + encodeURIComponent(pcBySoftware);
    ajax.open("GET", "./php/ajax_responce/responce_Software.php?"+params, true);
    ajax.send(null)
}

function resultBySoftware()
{
    if(ajax.readyState == 4) {
        alert("Here?");
        alert(ajax.status);
        if(ajax.status == 200) {
            var result_Addres = document.getElementById("result_Software"); 
            var result = "";
            var xml = ajax.responseXML;
            var rows = xml.getElementsByTagName("Netname");
            alert(rows.length);
            result += "<table>";
            for (var i = 0; i < rows.length; i++) {
                result += "<tr>";
                result += "<td>" + rows[i].firstChild.nodeValue + "</td>";
                result += "</tr>";
            }
            result += "</table>";
            result_Addres.innerHTML = result;
        }
        else alert(ajax.status+ " -" + ajax.statusText);
        ajax.abort();
    }
}

function getExpired()
{
    alert("Sending getExpired");
    if (!ajax)
    {
        alert("Ajax not initialized");
        return;  
    }

    //ajax.onreadystatechange = resultExpired; 

    ajax.onload = function() {
        if(ajax.status===200) {
            console.dir(ajax.response);
            let res = JSON.parse(ajax.response);
            let result = "";
            result += "<table>";
            for(let i in res) {
                result += "<tr>";
                result += "<td>" + res[i].netname + "</td>"
                result += "<tr>";
            }
        document.getElementById("result_Expired").innerHTML = result;
        }
    }
        

    ajax.open("GET", "./php/ajax_responce/responce_Expired.php?", true);
    ajax.send(null)
}

function resultExpired(){
    if (ajax.readyState== 4)  
    {   
        if(ajax.status== 200) 
        {
            console.dir(ajax.responceText);
            let responce = ajax.responce;
            console.dir(ajax.responce);
            let netnames = JSON.parse(responce);
            let result_Addres = document.getElementById('result_Expired');
            
            for(let i in netnames){

            }
        }
        else alert(ajax.status+ " -" + ajax.statusText);
        ajax.abort();
    }
}