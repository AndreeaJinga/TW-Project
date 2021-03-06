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

    <div id="bg"></div>

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
            <p> Hi, I am Andreea Jinga! <br>
                I am a student in the 2<sup>nd</sup> year, soon in the 3<sup>rd</sup> year, <br>at the Computer Science Faculty in Iasi. <br>
                Some of the things I really enjoy doing are riding my bike and reading, <br>drinking tea and hanging out with my friends. <br>
                I like to spend time in the nature and hike on mountains.<br>
                I love learning new things about how our IT world is made. 
            </p>
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
            <p>Hi, I am Popescu Andrei! <br>
                I am a student in the 2<sup>nd</sup> year at the Computer Science Faculty in Iasi. <br>
                Some of my hobbies are cinematography, video games,<br> and any aspects related to these two. <br>
                Usually, when I am not spending time on this hobbies, <br>
                I enjoy learning and watching different types of tutorials<br> for the subjects I practice in college.
            </p>
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
            <p> Hi, I am Alisa Stanca! <br>
                I am a student in the 2<sup>nd</sup> year, soon in the 3<sup>rd</sup> year, <br>at the Computer Science Faculty in Iasi. <br>
                Some of the things I really enjoy doing are travelling and <br>spending time with my family and friends. <br>
                I have a sister and a few friends, not many, but they are great. <br>
                I also love good music and good food.<br>
                The things I do the most are learning and coding.<br>
                I hope it is worth it!
            </p>
        </div> 
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>