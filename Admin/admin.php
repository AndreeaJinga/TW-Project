<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<div id="bg"></div>
<div class="deleteUser">
    <fieldset class="fields">
        <input type="text" id="userID" placeholder="UserID">
        <button type="button" id="deleteUser" onclick="ajax_deleteUser();">Search</button>
    </fieldset>
</div>
<div class="deleteAnnouncement">
    <fieldset class="fields">
        <input type="text" id="annID" placeholder="AnnID">
        <button type="button" id="deleteAnnouncement" onclick="ajax_deleteAnnouncement();">Search</button>
    </fieldset>
</div>
<div id="result">

</div>
<script>
    function ajax_deleteUser(){
        var xhr = new XMLHttpRequest();
        var userID = document.getElementById("userID").value;
        var vars="userID="+userID;
        xhr.open("POST","deleteUser.php",true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.onreadystatechange=function (){
            if(xhr.readyState == 4 && xhr.status == 200) {

                var return_data = xhr.responseText;
                document.getElementById("result").innerHTML = return_data;
            }
        }
        xhr.send(vars);
        document.getElementById("result").innerHTML="Loading data...";
    }
</script>
<script>
    function ajax_deleteAnnouncement(){
        var xhr = new XMLHttpRequest();
        var annID = document.getElementById("annID").value;
        var vars="annID="+annID;
        xhr.open("POST","deleteAnnouncement.php",true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.onreadystatechange=function (){
            if(xhr.readyState == 4 && xhr.status == 200) {

                var return_data = xhr.responseText;
                document.getElementById("result").innerHTML = return_data;
            }
        }
        xhr.send(vars);
        document.getElementById("result").innerHTML="Loading data...";
    }
</script>
</body>
