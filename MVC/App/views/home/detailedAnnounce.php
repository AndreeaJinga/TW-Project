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
require_once '../../models/dataBase.php';

$db=new DataBase();
//var_dump($_GET['id']);
$results=$db->customQuery("SELECT * FROM announces WHERE id=".$_GET['id']);
//var_dump($results);
foreach ($results as &$value) {
    echo "<div class='announce'>
                    <h3>".$value['title']."</h3>
                    <img src='".$value['img_source']."' alt='img_announce'>
                    <p>" . $value['property_type'] . "</p>
                    <p>Price:" . $value['price'] . "</p>
                    <p>Usable Area:" . $value['usable_area'] . "</p>
                    <p>Country:" . $value['county'] . "</p>
                 </div>";
}
?>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
