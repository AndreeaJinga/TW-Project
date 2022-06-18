<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php   
        $maincss = realpath('../../../Public/css/accountcss/account.css');
        if($maincss == false) {
            echo "<link rel=\"stylesheet\" href=\"css/accountcss/account.css\">";
        }
        else {
            echo "<link rel=\"stylesheet\" href=\"../../../Public/css/accountcss/account.css\">";
        }
        
        $menucss = realpath('../../../Public/css/globals/header2.css');
        if($menucss == false) {
            echo "<link rel=\"stylesheet\" href=\"css/globals/header2.css\">";
        }
        else {
            echo "<link rel=\"stylesheet\" href=\"../../../Public/css/globals/header2.css\">";
        }
    ?>
    <title>Account</title>
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
                <a href="../../controllers/logout.php">
                    <button class="genInfo">
                        Logout
                    </button>
                </a>
            </div>
        </div>
        <div class="rightSide">
            <div class="profilePic">
                <span class="textPP">Profile picture: </span>
                <img src="../../../Public/resources/default-avatar-profile.jpg" alt="avatarPic">
                <!-- <img src="./default-avatar-profile.jpg" alt="avatarPic"> -->
            </div>

            <div class="formm">
                <form action="../../controllers/updateInfo.php" method="post">
                    <!-- <div class="textBoxes"> -->
                        <!-- <span class="text">Update your account info</span> -->
                        <h2>Update your account info</h2>
                        <!-- <span class="text">Email:</span>
                        <span class="text"> Password:</span> -->
                        <!-- <span class="invisibleTxt">Ignore</span> -->
                    <!-- </div> -->
                    <!-- <div class="inputBoxes"> -->
                        <input class="inputTag" type="text" name="uid" placeholder="Type your new username" autocomplete="given-name" required>
                        <input class="inputTag" type="text"  name="email" placeholder="Type your new email" autocomplete="email" required>
                        <input class="inputTag" type="password" name="pwd" placeholder="Type your new password" required>
                        <input class="inputTag" type="password" name="pwdrepeat" placeholder="Confirm new password" required>
                    <!-- </div> -->
                

                   <!-- <div class="saveChanges"> -->
                        <input class="currentPass" type="password" name="currentPwd" placeholder="Type your current password" required/>
                        <input class="saveBtn" type="submit" name="submit" value="Save changes">
                    <!-- </div> -->
                </form>
            </div>
                
            <div class="deleteAccount">
                <a href="../LoginPage/login.html" class="smallerWidth">
                    <button class="saveBtn">
                        Close Account
                    </button>
                </a>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <footer>
        *You will need to retype your actual password<br>to save any changes.
    </footer>
</body>
</html>