<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/globals/header2.css">
    <link rel="stylesheet" href="css/aboutUscss/aboutUs.css">

    <title>About Us</title>
</head>
<body>
    <?php
        include realpath('resources/header3.php');
        //echo __DIR__;
    ?>

    <div id="bg"></div>

    <div class="documentation">
        <a href="aboutUs/scholarly">
            <button class="docButton">
                Documentation
            </button>
        </a>
    </div>
    <div class="info">
        <div class="pers">
            <img src="resources/Andreea.jpg" alt="Andreea.jpg">
            <!-- <img src="Andreea.jpg" alt="Andreea.jpg"> -->
            <p>Andreea Jinga is a second year student at the Faculty of Informatics in Iasi. </p>
        </div> 
        <div class="pers">
            <img src="resources/Andrei.jpg" alt="Andrei.jpg">
            <p>Andrei Popescu is a second year student at the Faculty of Informatics in Iasi. </p>
        </div> 
        <div class="pers">
            <img src="resources/Alisa.jpg" alt="Alisa.jpg">
            <p>Alisa Stanca is a second year student at the Faculty of Informatics in Iasi. </p>
        </div> 
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>