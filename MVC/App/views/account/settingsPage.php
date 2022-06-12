<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php   
        $maincss = realpath('../../../Public/css/accountcss/settingsPage.css');
        if($maincss == false) {
            echo "<link rel=\"stylesheet\" href=\"css/accountcss/settingsPage.css\">";
        }
        else {
            echo "<link rel=\"stylesheet\" href=\"../../../Public/css/accountcss/settingsPage.css\">";
        }
        
        $menucss = realpath('../../../Public/css/globals/header2.css');
        if($menucss == false) {
            echo "<link rel=\"stylesheet\" href=\"css/globals/header2.css\">";
        }
        else {
            echo "<link rel=\"stylesheet\" href=\"../../../Public/css/globals/header2.css\">";
        }
    ?>
    <title>Settings</title>
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

    <div class="main">
        <div class="leftSide">
            <div class="upSide">
                <a href="../account/index.php">
                    <button class="genInfo">
                        General Information
                    </button>
                </a>
                <a href="../account/settingsPage.php">
                    <button class="genInfo">
                        Settings
                    </button>
                </a>
            </div>
            <div class="downSide">
                <a href="../login/index.php">
                    <button class="genInfo">
                        Logout
                    </button>
                </a>
            </div>
        </div>
        <div class="rightSide">
            <div class="theme">
                <span class="textPP">Select your prefered theme: </span>
                <br>
                <br>
                <div class="toggleBtn">
                    <span class="textOption">Light</span>
                    <input class="checkTag" type="checkbox" id="switch" /><label for="switch">Toggle</label>
                    <span class="textOption">Night</span>
                </div>
            </div>
            <div class="theme">
                <span class="textPP">Select your prefered language</span>
                <br>
                <br>
                <div class="toggleBtnn">
                    <span class="textOption">English</span>
                    <input class="checkTagg" type="checkbox" id="switchh" /><label for="switchh">Toggle</label>
                    <span class="textOption">Romanian</span>
                </div>
            </div>
            <div class="theme">
                <span class="textPP">Your agreement to our terms and conditions</span>
                <br>
                <br>
                <div class="toggleBtnnn">
                    <span class="textOption">Yes</span>
                    <input class="checkTaggg" type="checkbox" id="switchhh" /><label for="switchhh">Toggle</label>
                    <span class="textOption">No</span>
                </div>
            </div>
            <div class="deleteAccount">
                <a href="../LoginPage/login.html">
                    <button class="saveBtn">
                        Close Account*
                    </button>
                </a>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <footer>
        *If you disclaimed with our terms <br>your account will be deleted.
    </footer>
</body>
</html>