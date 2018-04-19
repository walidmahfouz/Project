<?php

?>
<html>
    <head>
        <script lang="javascript">
        function show(str) {
    if (str.length == 0) { 
        document.getElementById("a").innerHTML = "";
     
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("a").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "getdata.php?id=" + str, true);
        xmlhttp.send();
    }
}
</script>
    </head>

    <body>
        
        <select onchange="show(this.value)">
            <option value="">select department</option>
            <option value="cs">cs</option>
            <option value="is">is</option>
            <option value="it">it</option>
        </select>
        <div id="a"></div>
    </body>
</html>
