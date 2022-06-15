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
require_once '../../models/dataBase.php';
$db = new DataBase();
$county=$db->conn->prepare("SELECT * FROM announces WHERE county = :county");
$county->execute(['county'=>$_GET['county']]);
$result1=$county->fetchAll();
if(count($result1)!=0){
    foreach ($result1 as &$value1) {
        echo "<div class='announce'>
        <h2>" . $value1['id'] . "</h2>
        <p>Price:" . $value1['price'] . "</p>
        <p>Price:" . $value1['property_type'] . "</p>
        <p>Country:" . $value1['county'] . "</p>
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
