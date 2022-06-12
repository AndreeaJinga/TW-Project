<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Contact.css">
        <link rel="stylesheet" href="../Globals/header2.css">
        <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
        <link rel="manifest" href="./site.webmanifest">
        
        <?php   
        $maincss = realpath('../../../Public/css/contactcss/Contact.css');
        if($maincss == false) {
            echo "<link rel=\"stylesheet\" href=\"css/contactcss/Contact.css\">";
        }
        else {
            echo "<link rel=\"stylesheet\" href=\"../../../Public/css/contactcss/Contact.css\">";
        }
        
        $menucss = realpath('../../../Public/css/globals/header2.css');
        if($menucss == false) {
            echo "<link rel=\"stylesheet\" href=\"css/globals/header2.css\">";
        }
        else {
            echo "<link rel=\"stylesheet\" href=\"../../../Public/css/globals/header2.css\">";
        }
        ?>

        <title>Contact</title>
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

        <div class="Contact">
            <div class="title">
                <h2>Get in touch</h2>
            </div>
            <div id="bg"></div>
            <div class="boxZone">
                <div class="box form">
                    <h3>Send a message</h3>
                    <form>
                        <div class="formBox">
                            <div class="row50">
                                <div class="inputBox">
                                    <span>First Name</span>
                                    <input type="text" placeholder="Alisa">
                                </div>
                                <div class="inputBox">
                                    <span>Last Name</span>
                                    <input type="text" placeholder="Stanca">
                                </div>                                 
                            </div>
                            <div class="row50">
                                <div class="inputBox">
                                    <span>Email Address</span>
                                    <input type="email" placeholder="name@yahoo.com">
                                </div>  
                                <div class="inputBox">
                                    <span>Phone Number</span>
                                    <input type="text" placeholder="0798654321">
                                </div> 
                            </div>
                            <div class="row100">
                                <div class="inputBox">
                                    <span>Message</span>
                                    <textarea placeholder="What about...?"></textarea>
                                </div>
                            </div>

                            <div class="row100">
                                <div class="inputBox">
                                    <input type="submit" value="Send">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="box info">
                    <h3>Contact Info</h3>
                    <div class="infoBox">
                        <div>
                            <span><ion-icon name="location-outline"></ion-icon></span>
                            <p>Computer Science Faculty<br>Iași<br>România</p>
                        </div>
                        <div>
                            <span><ion-icon name="mail-outline"></ion-icon></span>
                            <a href="mailto:real.estateproj@yahoo.com">real.estateproj@yahoo.com</a>
                        </div>
                    </div>
                </div>
                <div class="box map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1356.0818130820644!2d27.573350700000013!3d47.17423284999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cafb6227e846bd%3A0x193e4b6864504e2c!2sFacultatea%20de%20Informatic%C4%83!5e0!3m2!1sro!2sro!4v1649941774399!5m2!1sro!2sro" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    </body>
</html>