<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php   
            $maincss = realpath('../../../Public/css/announcescss/AnnouncesPage.css');
            if($maincss == false) {
                echo "<link rel=\"stylesheet\" href=\"css/announcescss/AnnouncesPage.css\">";
            }
            else {
                echo "<link rel=\"stylesheet\" href=\"../../../Public/css/announcescss/AnnouncesPage.css\">";
            }
            
            $menucss = realpath('../../../Public/css/globals/header2.css');
            if($menucss == false) {
                echo "<link rel=\"stylesheet\" href=\"css/globals/header2.css\">";
            }
            else {
                echo "<link rel=\"stylesheet\" href=\"../../../Public/css/globals/header2.css\">";
            }
        ?>
        <title>Announces</title>
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
    
    <div class="Announces">
        <div class="form">
            <form action="#" method="post">
                <fieldset class="fields">
                    <input type="text" placeholder="City">
                    <input type="text" placeholder="Category">
                    <input type="text" placeholder="Maximum price">
                    <input type="submit" id="submit" value="Search">
                </fieldset>
            </form>
        </div>
        <div class="announces">
            <div class="container">
                <div class="card">
                    <div class="imgBx">
                        <img src="img1.png">
                    </div>
                    <div class="content">
                        <h2>Anunt 1</h2>
                        <p>Pret: 1000000$ <br>Suprafata 120 m2 <br>Oras: Galati</p>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBx">
                        <img src="img2.png">
                    </div>
                    <div class="content">
                        <h2>Anunt 2</h2>
                        <p>Pret: 1000000$ <br>Suprafata 120 m2 <br>Oras: Galati</p>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBx">
                        <img src="img3.png">
                    </div>
                    <div class="content">
                        <h2>Anunt 3</h2>
                        <p>Pret: 1000000$ <br>Suprafata 120 m2 <br>Oras: Galati</p>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBx">
                        <img src="img4.png">
                    </div>
                    <div class="content">
                        <h2>Anunt 4</h2>
                        <p>Pret: 1000000$ <br>Suprafata 120 m2 <br>Oras: Galati</p>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBx">
                        <img src="img1.png">
                    </div>
                    <div class="content">
                        <h2>Anunt 5</h2>
                        <p>Pret: 1000000$ <br>Suprafata 120 m2 <br>Oras: Galati</p>
                    </div>
                    </div>
                <div class="card">
                    <div class="imgBx">
                        <img src="img2.png">
                    </div>
                    <div class="content">
                        <h2>Anunt 6</h2>
                        <p>Pret: 1000000$ <br>Suprafata 120 m2 <br>Oras: Galati</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    </body>

</html>
