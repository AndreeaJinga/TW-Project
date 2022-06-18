<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Public/css/homecss/HomePage.css">
    <link rel="stylesheet" href="../../../Public/css/globals/header2.css">
</head>
<body>
<?php
include realpath('../../../Public/resources/header3.php');
?>
<h1>Announces resulted:</h1>

<div class="announces">
<?php
require_once '../../models/countrySearch.php';
$countyS=new CountrySearch();
$result1=$countyS->getResults($_GET['county']);
if(count($result1)!=0){
    foreach ($result1 as &$value) {
        echo "<div class='card'>
                <img src='".$value['img_source']."' alt='img_announce'>
                <h3>" . $value['property_type'] . "</h3>
                <p>Price:" . $value['price'] . "</p>
                <p>Usable Area:" . $value['usable_area'] . "</p>
                <p>Country:" . $value['county'] . "</p>
                <a href='detailedAnnounce.php?id=".$value['id']."'> Detailes</a>
             </div>";
    }
}
else{
    echo "<h2>No result were found for the county: ".$_GET['county']."!</h2>";
}
?>

</div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>
