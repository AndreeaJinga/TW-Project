<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php   
        $maincss = realpath('../../../Public/css/aboutUscss/aboutUs.css');
        if($maincss == false) {
            echo "<link rel=\"stylesheet\" href=\"css/aboutUscss/aboutUs.css\">";
        }
        else {
            echo "<link rel=\"stylesheet\" href=\"../../../Public/css/aboutUscss/aboutUs.css\">";
        }
        
        $menucss = realpath('../../../Public/css/globals/header2.css');
        if($menucss == false) {
            echo "<link rel=\"stylesheet\" href=\"css/globals/header2.css\">";
        }
        else {
            echo "<link rel=\"stylesheet\" href=\"../../../Public/css/globals/header2.css\">";
        }
    ?>
    <title>About Us</title>
</head>
<body>
    <?php
        $temp = realpath('resources/header3.php');
        if($temp != false) {
            include realpath('resources/header3.php');
        }
        else {        
            include realpath('../../../Public/resources/header3.php');
        }
    ?>
    <script>
        document.addEventListener('DOMContentLoaded', nav)
        function nav(){
            const burger = document.querySelector('.burgerMenu');
            const nav = document.querySelector('.navigation');
            burger.addEventListener('click', ()=>{
                nav.classList.toggle('show')
            })
        }
    </script>

    <div class="documentation">
        <a href="scholarly.php">
            <button class="docButton">
                Documentation
            </button>
        </a>
    </div>
    <div class="info">
        <div class="pers">
            <?php
            $temp = realpath('resources/Andreea.jpg');
            if($temp != false) {
                echo "<img src=\"resources/Andreea.jpg\" alt=\"Andreea.jpg\">";
            }
            else {        
                echo "<img src=\"../../../Public/resources/Andreea.jpg\" alt=\"Andreea.jpg\">";
            }
            ?>
            <!-- <img src="Andreea.jpg" alt="Andreea.jpg"> -->
            <p>Andreea Jinga is a second year student at the Faculty of Informatics in Iasi. </p>
        </div> 
        <div class="pers">
        <?php
            $temp = realpath('resources/Andreea.jpg');
            if($temp != false) {
                echo "<img src=\"resources/Andrei.jpg\" alt=\"Andrei.jpg\">";
            }
            else {        
                echo "<img src=\"../../../Public/resources/Andrei.jpg\" alt=\"Andrei.jpg\">";
            }
            ?>
            <p>Andrei Popescu is a second year student at the Faculty of Informatics in Iasi. </p>
        </div> 
        <div class="pers">
        <?php
            $temp = realpath('resources/Andreea.jpg');
            if($temp != false) {
                echo "<img src=\"resources/Alisa.jpg\" alt=\"Alisa.jpg\">";
            }
            else {        
                echo "<img src=\"../../../Public/resources/Alisa.jpg\" alt=\"Alisa.jpg\">";
            }
            ?>
            <p>Alisa Stanca is a second year student at the Faculty of Informatics in Iasi. </p>
        </div> 
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>