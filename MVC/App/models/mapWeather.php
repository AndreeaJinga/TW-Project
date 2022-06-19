<?php

    function weatherDetails($city)
    {
        //$city = 'Iasi';
        if($city == 'Bucuresti')
            $city = 'Ilfov';
        $api_key = 'a765045daccb5573d3d4c6479854ced3';

        /* Copyright https://openweathermap.org/current openSource */

        $api_uri = 'https://api.openweathermap.org/data/2.5/weather?q='.$city.'&appid='.$api_key.'';

        //echo "$api_uri";
        $weather = json_decode(file_get_contents($api_uri), true);

        $temp_current = $weather['main']['temp']-273.15;
        $feels_like = $weather['main']['feels_like']-273.15;
        $temp_min = $weather['main']['temp_min']-273.15;
        $temp_max = $weather['main']['temp_max']-273.15;
        $pressure = $weather['main']['pressure'];
        $humidity = $weather['main']['humidity'];
        $visibility = $weather['visibility']/1000;
        $descriere = $weather['weather'][0]['description'];
        $icon = $weather['weather'][0]['icon'];
        $wind = $weather['wind']['speed']*3;
        if(!in_array("rain",$weather,true))
            $rain = 0;
        else
            $rain = $weather['rain'][0]['rain.3h']*3;

        echo "<img src='http://openweathermap.org/img/wn/".$icon."@2x.png'/>";
        echo "<p class='detail'>Descriere: ".$descriere."</p>";
        echo "<p class='detail'>Temperatura actuală: ".$temp_current." C</p>";
        echo "<p class='detail'>Temperatura resimțită: ".$feels_like." C</p>";
        echo "<p class='detail'>Temperatura minimă: ".$temp_min." C</p>";
        echo "<p class='detail'>Temperatura maximă: ".$temp_max." C</p>";
        echo "<p class='detail'>Presiune: ".$pressure." hPa</p>";
        echo "<p class='detail'>Umiditate: ".$humidity." %</p>";
        echo "<p class='detail'>Vizibilitate: ".$visibility." km</p>";
        echo "<p class='detail'>Vânt: ".$wind." km</p>";
        echo "<p class='detail'>Ploaie în ultimele 3h: ".$rain." mm</p>";
    }

    function getLat($city)
    {
        if($city == 'Bucuresti')
            $city = 'Ilfov';
        $api_key = 'a765045daccb5573d3d4c6479854ced3';
        $api_uri = 'https://api.openweathermap.org/data/2.5/weather?q='.$city.'&appid='.$api_key.'';

        //echo "$api_uri";
        $coord = json_decode(file_get_contents($api_uri), true);

        $lat =  $coord['coord']['lat'];
        return $lat;
    }

    function getLong($city)
    {
        if($city == 'Bucuresti')
            $city = 'Ilfov';
        $api_key = 'a765045daccb5573d3d4c6479854ced3';
        $api_uri = 'https://api.openweathermap.org/data/2.5/weather?q='.$city.'&appid='.$api_key.'';

        //echo "$api_uri";
        $coord = json_decode(file_get_contents($api_uri), true);

        $long =  $coord['coord']['lon'];
        return $long;
    }

    function getCity($lat, $long)
    {
        $api_key = 'a765045daccb5573d3d4c6479854ced3';
        $api_uri = 'http://api.openweathermap.org/geo/1.0/reverse?lat='.$lat.'&lon='.$long.'&limit=4&appid='.$api_key.'';

        $coord_data = json_decode(file_get_contents($api_uri), true);

        $city = $coord_data[0]['local_names']['ro'];

        echo "<p class='detail'>Oras by coord: ".$city."</p>";
             
    }
    
?>