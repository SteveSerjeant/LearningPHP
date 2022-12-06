<!DOCTYPE html>
<html>
<body>
<h2>Host Names:</h2>

<!--<button type="button" onclick="loadXMLDoc()">-->
<!--    Get Host Names</button>-->

<p id="demo"></p>

<!--<script>-->
<!--    function loadXMLDoc() {-->
<!--        var xmlhttp = new XMLHttpRequest();-->
<!--        xmlhttp.onreadystatechange = function() {-->
<!--            if (this.readyState == 4 && this.status == 200) {-->
<!--                myFunction(this);-->
<!--            }-->
<!--        };-->
<!--        xmlhttp.open("GET", "221125.xml", true);-->
<!--        xmlhttp.send();-->
<!--    }-->
<!---->
<!--    function myFunction(xml) {-->
<!--        var x, i, xmlDoc, txt;-->
<!--        xmlDoc = xml.responseXML;-->
<!--        txt = "";-->
<!--        x = xmlDoc.getElementsByTagName("host");-->
<!--        for (i = 0; i< x.length; i++) {-->
<!--            txt += x[i].childNodes[0].nodeValue + "<br>";-->
<!--        }-->
<!--        document.getElementById("demo").innerHTML = txt;-->
<!--    }-->
<!--</script>-->
<script>
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            showResult(xhttp.responseXML);
        }
    };
    xhttp.open("GET", "221125.xml", true);
    xhttp.send();

    function showResult(xml) {
        var txt = "";
        path = "/nmaprun/host/hostname/[text()]"
        if (xml.evaluate) {
            var nodes = xml.evaluate(path, xml, null, XPathResult.ANY_TYPE, null);
            var result = nodes.iterateNext();
            while (result) {
                txt += result.childNodes[0].nodeValue + "<br>";
                result = nodes.iterateNext();
            }
            // Code For Internet Explorer
        } else if (window.ActiveXObject || xhttp.responseType == "msxml-document") {
            xml.setProperty("SelectionLanguage", "XPath");
            nodes = xml.selectNodes(path);
            for (i = 0; i < nodes.length; i++) {
                txt += nodes[i].childNodes[0].nodeValue + "<br>";
            }
        }
        document.getElementById("demo").innerHTML = txt;
    }
</script>
</body>
</html>



<?php
