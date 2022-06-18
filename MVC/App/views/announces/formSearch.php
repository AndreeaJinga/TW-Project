<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    <link rel="stylesheet" href="../../../Public/css/announcescss/AnnouncesPage.css">-->
    <link rel="stylesheet" href="../../../Public/css/announcescss/FormSearch.css">
    <link rel="stylesheet" href="../../../Public/css/globals/header2.css">
</head>
<body>
<?php
include realpath('../../../Public/resources/header3.php');
?>
<div id="bg"></div>

<div class="form">
<!--    <form id="search" onsubmit="return ajax_post()">-->
       <fieldset class="fields">
<!--    <div class="fields">-->
            <input type="text" id="county" placeholder="County">
            <input type="text" id="property_type" placeholder="Category">
            <input type="text" id="minPrice" placeholder="Min price">
            <input type="text" id="maxPrice" placeholder="Max price">
            <input type="text" id="usableArea" placeholder="Usable Area">
            <input type="text" id="partitioning" placeholder="Partitioning">
            <button type="button" id="subsub" onclick="ajax_post();">Search</button>
<!--            <input type="submit" name="submit-data" value="Search">-->
<!--    </div>-->
        </fieldset>
<!--    </form>-->
</div>

<h1 class="bigTitle">Announces resulted:</h1>

<div class="announces">
    <div class="container" id="container">
<?php
    require_once "../../models/formSearch.php";
    $form=new FormSearch();
    if(isset($_GET['county'])){
        $result=$form->countyResults($_GET['county']);
    }else{
        $result=$form->getResults();
    }
    if(count($result)==0){
        echo "<div class=\"notConnected\">
                    <h3 class=\"headerNotConnected\"> No result were found! </h3>
                </div>";
    }
    else{
        foreach ($result as &$value) {
            echo "<div class='card'>
                            <div class=\"imgBx\">
                                <img src='".$value['img_source']."' alt='img_announce'>
                            </div>
                            <div class=\"content\">
                                <h2>" . $value['property_type'] . "</h2>
                                <p>Price: " . $value['price'] . "</p>
                                <p>Usable Area: " . $value['usable_area'] . "</p>
                                <p>Country: " . $value['county'] . "</p>
                                <a href='../home/detailedAnnounce.php?id=".$value['id']."' class='detailBtn'> Detailes</a>
                            </div>
                         </div>";
        }
    }
?>
    </div>
</div>
<script>
    function ajax_post(){
        var xhr = new XMLHttpRequest();
        var county = document.getElementById("county").value;
        var property_type = document.getElementById("property_type").value;
        var minPrice = document.getElementById("minPrice").value;
        var maxPrice = document.getElementById("maxPrice").value;
        var usableArea = document.getElementById("usableArea").value;
        var partitioning = document.getElementById("partitioning").value;
        var vars="county="+county+"&property_type="+property_type+"&minPrice="+minPrice+"&maxPrice="+maxPrice+"&usableArea="+usableArea+"&partitioning="+partitioning;
        xhr.open("POST","../../models/formSearchAjax.php",true);
        xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xhr.onreadystatechange=function (){
            if(xhr.readyState == 4 && xhr.status == 200) {

                var return_data = xhr.responseText;
                document.getElementById("container").innerHTML = return_data;
            }
        }
        xhr.send(vars);
        document.getElementById("container").innerHTML="Loading data...";
    }
</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>