<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload="loadContent()">
    <h3>input ID&Name</h3>
    <input type="input" id="u_id">
    <input type="input" id="u_name">
    <button onclick="add_new()">Add new</button><hr>
    <div id="out"></div>
    <script>
    function loadContent(){
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
            console.log(this.readyState);
            if(this.readyState==4 && this.status==200){
                console.log(this.responseText);
                data = JSON.parse(this.responseText);
                out = document.getElementById("out");
                text = "";
                text += "<table border='1'>";
                for(i=0;i<data.length;i++){
                    text += "<tr>";
                    for(inf in data[i]){
                        text += "<td>"+data[i][inf]+"</td>";
                    }
                    text+= "</tr>";
                }
                out.innerHTML = text+"</table>";
            }
        }
        xhttp.open("GET", "02 rest.php", true);
        xhttp.send();
        // xtttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        // xhttp.send("a=12&b=15");
    }
    function add_new(){
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                alert(this.responseText);
            }
        }
        xhttp.open("POST", "02 rest.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        u_id = document.getElementById("u_id");
        u_name = document.getElementById("u_name");
        xhttp.send("u_id="+u_id.value+"&u_name="+u_name.value);
    }
    function create_table(){
        m = document.getElementById("out");
        m.innerHTML = "";
        text = "<tabel border='1'>";
        for(i=0;i<my.length;i++){
            text = "<tr>";
            for(key in my[i]){

            }
        }
    }
    </script>
</body>
</html>