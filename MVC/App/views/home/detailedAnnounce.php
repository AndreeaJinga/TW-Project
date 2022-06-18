<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Public/css/homecss/detaliedAnnounce.css">
    <link rel="stylesheet" href="../../../Public/css/globals/header2.css">
</head>
<body>
    <div id="bg"></div>

<?php
    include realpath('../../../Public/resources/header3.php');
    require_once '../../models/dataBase.php';

    $db=new DataBase();
    $results=$db->customQuery("SELECT * FROM announces WHERE id=".$_GET['id']);
    foreach ($results as &$value) {
        echo "<div class='announce'>";
            echo "<div class='title'>";
                echo "<h3>" . $value['title'] . "</h3>";
            echo "</div>";

            echo "<div class='centerPage'>";
                echo "<img src='" . $value['img_source'] . "' alt='img_announce'>";
                echo "<div class='shortDetails'>";
                    echo "<p class='detail'>Tipul proprietatii: " . $value['property_type'] . "</p>";
                    echo "<p class='detail'>Pretul: " . $value['price'] . "</p>";
                    echo "<p class='detail'>Judetul: " . $value['county'] . "</p>";
                    echo "<p class='detail'>Suprafata utila: " . $value['usable_area'] . "</p>";
                echo "</div>";
            echo "</div>";

            echo "<div class='bottomPage'>";
                echo "<h2> Detalii generale: </h2>";
                echo "<div>";
                    echo "<p class='detail'>Aceasta proprietate este o proprietate " . $value['state'] . "a, avand o compartimentare de tip " . $value['partitioning'] . ".</p>";
                    echo "<p class='detail'>Are un numar de " . $value['rooms'] . " camere.</p>";
                    echo "<p class='detail'>Proprietatea este la etajul " . $value['floor'] . ".</p>";
                    echo "<p class='detail'>A fost construita in anul " . $value['construction_year'] . ".</p>";

                    if ($value['elevator'] == 'da')
                        echo "<p class='detail'>In aceasta proprietate exista lift.</p>";
                    else
                        echo "<p class='detail'>In aceasta proprietate nu exista lift.</p>";
                    echo "<p class='detail'>Alte caracteristici utile: " . $value['characteristics'] . "</p>";
                echo "</div>";
            echo "</div>";

            echo "<div class='bottomPage'>";
                echo "<h2> Scurta descriere oferita de proprietar: </h2>";
                echo "<p class='detail'>" . $value['description'] . "</p>";
            echo "</div>";
        echo "</div>";
    }
?>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
