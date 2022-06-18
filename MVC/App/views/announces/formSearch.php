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
             </div>";
        }
    }
?>
</div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>