<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php   
        $maincss = realpath('../../../Public/css/favoritescss/FavoritesPage.css');
        if($maincss == false) {
            echo "<link rel=\"stylesheet\" href=\"css/favoritescss/FavoritesPage.css\">";
        }
        else {
            echo "<link rel=\"stylesheet\" href=\"../../../Public/css/favoritescss/FavoritesPage.css\">";
        }
        
        $menucss = realpath('../../../Public/css/globals/header2.css');
        if($menucss == false) {
            echo "<link rel=\"stylesheet\" href=\"css/globals/header2.css\">";
        }
        else {
            echo "<link rel=\"stylesheet\" href=\"../../../Public/css/globals/header2.css\">";
        }  
        $mainjs = realpath('../../../Public/js/filtrare.js');
        if($mainjs == false) {
            echo "<script src=\"js/filtrare.js\"></script>";
        }
        else {
            echo "<script src=\"../../../Public/js/filtrare.js\"></script>";
        }
    ?>
    <!-- <script src="./filtrare.js"></script> -->
    <title>Favorites</title>
</head>
<body>
    
    <?php
        $temp = realpath('resources/header3.php');
        if($temp != false) {
            include realpath('resources/header3.php');
        }
        else {        
            include realpath('../../../Public/resources/header3.php');
        }
    ?>
    <div id="bg"></div>

    <?php
        if(isset($_SESSION['userid']))
        {
    ?>   
        <div class="tabelSet">
            <table class="favs">
                <thead>
                    <tr>
                        <th>Announcement id</th>
                        <th>County
                            <select class="filter" onchange="filtrationEntry()">
                                <option value="all">All</option>
                            </select>
                        </th>

                        <th>Type
                            <select class="filter" onchange="filtrationEntry()">
                                <option value="all">All</option>
                            </select>
                        </th>
                        <th>Price</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                <?php
                    include_once '../../models/favoritesSearch.php';
                ?>
                </tbody>
            </table>
            <script>filtration()</script>
            <script>
                function ajax_delete(varId){
                    var xhr = new XMLHttpRequest();
                    var vars="id="+varId;
                    xhr.open("POST","../../models/favoritesDeleteAjax.php",true);
                    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                    xhr.onreadystatechange=function (){
                        if(xhr.readyState == 4 && xhr.status == 200) {

                            var return_data = xhr.responseText;
                            document.getElementById("tableBody").innerHTML = return_data;
                        }
                    }
                    xhr.send(vars);
                    document.getElementById("tableBody").innerHTML="Loading data...";
                }
            </script>
        </div>
    <?php
        }
        else
        {
    ?>
        <div class="notConnected">
            <h3 class="headerNotConnected"> Pentru a vizualiza preferintele trebuie sa fiti logat. </h3>
        </div>

    <?php
        }
    ?>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>