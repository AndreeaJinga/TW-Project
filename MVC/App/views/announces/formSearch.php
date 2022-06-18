<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Public/css/announcescss/AnnouncesPage.css">
    <link rel="stylesheet" href="../../../Public/css/globals/header2.css">
</head>
<body>
<?php
include realpath('../../../Public/resources/header3.php');
?>
<div id="bg"></div>

<div class="form">
    <form action="formSearch.php" method="post">
        <fieldset class="fields">
            <input type="text" name="county" placeholder="County">
            <input type="text" name="property_type" placeholder="Category">
            <input type="text" name="minPrice" placeholder="Min price">
            <input type="text" name="maxPrice" placeholder="Max price">
            <input type="text" name="usableArea" placeholder="Usable Area">
            <input type="text" name="partitioning" placeholder="Partitioning">
            <input type="submit" name="submit-data" value="Search">
        </fieldset>
    </form>
</div>

<h1>Announces resulted:</h1>

<div class="announces">
<?php
    require_once "../../models/formSearch.php";
    $form=new FormSearch();
    $result=$form->getResults();
    if(count($result)==0){
        echo "<p>No results were found!</p>";
    }
    else{
        foreach ($result as &$value) {
            echo "<div class='announce'>
                <img src='".$value['img_source']."' alt='img_announce'>
                <h3>" . $value['property_type'] . "</h3>
                <p>Price:" . $value['price'] . "</p>
                <p>Usable Area:" . $value['usable_area'] . "</p>
                <p>Country:" . $value['county'] . "</p>
                <a href='../home/detailedAnnounce.php?id=".$value['id']."'> Detailes</a>
             </div>";
        }
    }
?>
</div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>