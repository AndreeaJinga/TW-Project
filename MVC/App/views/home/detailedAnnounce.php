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
                    $idd = $_GET['id'];
                    echo "<div class='favs'>";
                        echo "<button type=\"button\" id=\"adding\" onclick=\"addingToFavs('$idd');\" class='loveBtn'><ion-icon name=\"heart-outline\"></ion-icon></button>";
                        echo "<div id='favsID' class='favsID'></div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";

            echo "<div class='bottomPage'>";
                echo "<h2> Detalii generale: </h2>";
                echo "<div>";
                    echo "<p class='detail'>Aceasta proprietate este o proprietate " . $value['state'] . "a, avand o compartimentare de tip " . $value['partitioning'] . ".</p>";
                    echo "<p class='detail'>Are un numar de " . $value['rooms'] . " camere.</p>";
                    echo "<p class='detail'>Proprietatea este la etajul " . $value['floor'] . ".</p>";
                    echo "<p class='detail'>A fost construita in anul " . $value['construction_year'] . ".</p>";

                    if ($value['elevator'] == 'da') {
                        echo "<p class='detail'>In aceasta proprietate exista lift.</p>";
                    }
                    else {
                        echo "<p class='detail'>In aceasta proprietate nu exista lift.</p>";
                    }
                    echo "<p class='detail'>Alte caracteristici utile: " . $value['characteristics'] . "</p>";
                echo "</div>";
            echo "</div>";

            echo "<div class='bottomPage'>";
                echo "<h2> Detalii despre vreme: </h2>";
                echo "<div>";
                    include '../../models/mapWeather.php';
                    weatherDetails($value['county']);
                echo "</div>";
            echo "</div>";

            echo "<div class='bottomPage'>";
                echo "<h2> Scurta descriere oferita de proprietar: </h2>";
                echo "<p class='detail'>" . $value['description'] . "</p>";
            echo "</div>";
        echo "</div>";
    }
?>

    <div  id='map'  style='height:380px;margin: 30px;'>
        <link  rel="stylesheet"  href="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.css"  />
        <script  src="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.js"></script>

        <script>
            var  OSM_URL  =  'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
            var  OSM_ATTRIB  =  '&copy;  <a  href="http://openstreetmap.org/copyright">OpenStreetMap</a>  contributors';
            var  osmLayer  =  L.tileLayer(OSM_URL,  {attribution:  OSM_ATTRIB});

            var  WAQI_URL    =  "https://tiles.waqi.info/tiles/usepa-aqi/{z}/{x}/{y}.png?token=65638e8f26dd0b2c54a55cb1993ce0002b2a37c1";
            var  WAQI_ATTR  =  'Air  Quality  Tiles  &copy;  <a  href="http://waqi.info">waqi.info</a>';
            var  waqiLayer  =  L.tileLayer(WAQI_URL,  {attribution:  WAQI_ATTR});

            var  map  =  L.map('map').setView([51.505,  -0.09],  11);
            map.addLayer(osmLayer).addLayer(waqiLayer);
        </script>
    </div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        function addingToFavs(announceID){
            var xhr = new XMLHttpRequest();
            var vars="announceID="+announceID;

            xhr.open("POST","../../models/addFavoriteAnnounce.php",true);
            xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            xhr.onreadystatechange=function (){
                if(xhr.readyState == 4 && xhr.status == 200) {

                    var return_data = xhr.responseText;
                    document.getElementById("favsID").innerHTML = return_data;
                }
            }
            xhr.send(vars);
            // document.getElementById("ceva").innerHTML="Loading data...";
        }
    </script>

</body>
