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
                echo "<img src='" . $value['img_source'] . "' alt='img_announce' draggable='false'>";
                echo "<div class='shortDetails'>";
                    echo "<div class='upperPart'>";
                        echo "<p class='detail'>Tipul proprietatii: " . $value['property_type'] . "</p>";
                        echo "<p class='detail'>Pretul: " . $value['price'] . " &euro;</p>";
                        echo "<p class='detail'>Judetul: " . $value['county'] . "</p>";
                        echo "<p class='detail'>Suprafata utila: " . $value['usable_area'] . " m<sup>2</sup></p>";
                        $idd = $_GET['id'];
                        echo "<div class='favs'>";
                            echo "<button type=\"button\" id=\"adding\" onclick=\"addingToFavs('$idd');\" class='loveBtn'><ion-icon name=\"heart-outline\"></ion-icon></button>";
                            echo "<div id='favsID' class='favsID'></div>";
                        echo "</div>";
                    echo "</div>";

                    $price =  round($value['price'] / $value['usable_area'],2);
                    $stmt = $db->customQuery("SELECT avg(price/usable_area) as medie FROM announces WHERE county='".$value['county']."'");
                    foreach ($stmt as &$val) {
                        $cityAvg = round(floatval($val['medie']),2);
                        // echo $cityAvg;
                    }
                    
                    if($cityAvg + 100 <= $price)
                        $result = -1;
                    else if($cityAvg -100 >= $price )
                        $result = 1;
                    else $result = 0;
                    //$result = 0;
                    
                    if($result == 1) {
                        echo "<div class='pretMetru green'>";
                            echo "<p class='boldtext'>Pretul pe metru patrat pentru acest apartament este <strong>" . $price . " &euro;</strong>.</p>";
                    }
                    else if($result == 0){
                        echo "<div class='pretMetru yellow'>";
                            echo "<p class='boldtext'>Pretul pe metru patrat pentru acest apartament este " . $price . " &euro;.</p>";    
                    }
                    else{
                        echo "<div class='pretMetru red'>";
                            echo "<p class='boldtext'>Pretul pe metru patrat pentru acest apartament este " . $price . " &euro;.</p>";
                    }
                            echo "<p class='boldtext'>Media orasului este de ". $cityAvg ." &euro;.</p>";
                            echo "<p class='squares'><span class='square green'>Sub media orasului</span><span class='square yellow'>In media orasului</span><span class='square red'>Peste media orasului</span></p>";
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
                    $lat = getLat($value['county']);
                    $long = getLong($value['county']);
                    //getCity($lat,$long);
                echo "</div>";
            echo "</div>";

            echo "<div class='bottomPage'>";
                echo "<h2> Scurta descriere oferita de proprietar: </h2>";
                echo "<p class='detail'>" . $value['description'] . "</p>";
            echo "</div>";
        echo "</div>";
    }
?>
    <!-- Copyright https://aqicn.org/city/romania/ openSource AirQuality API
    the attribution to the World Air Quality Index project 
    as well as the EPA providing the data (using the map service to show 
    data from a specicic location or source). -->
    <div  id='map'  class="map">
        <link  rel="stylesheet"  href="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.css"  />
        <script  src="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.js"></script>
        <script>
            var  OSM_URL  =  'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
            var  OSM_ATTRIB  =  '&copy;  <a  href="http://openstreetmap.org/copyright">OpenStreetMap</a>  contributors';
            var  osmLayer  =  L.tileLayer(OSM_URL,  {attribution:  OSM_ATTRIB});

            var  WAQI_URL    =  "https://tiles.waqi.info/tiles/usepa-aqi/{z}/{x}/{y}.png?token=65638e8f26dd0b2c54a55cb1993ce0002b2a37c1";
            var  WAQI_ATTR  =  'Air  Quality  Tiles  &copy;  <a  href="http://waqi.info">waqi.info</a>';
            var  waqiLayer  =  L.tileLayer(WAQI_URL,  {attribution:  WAQI_ATTR});

            var latlng = L.latLng(<?php echo getLat($value['county']); ?>, <?php echo getLong($value['county']); ?> ); 
            var  map  =  L.map('map').setView(latlng,  11);
            //map.flyTo(latlng);
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
