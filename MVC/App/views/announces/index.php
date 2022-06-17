<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/globals/header2.css">
        <link rel="stylesheet" href="css/announcescss/AnnouncesPage.css">
        <title>Announces</title>
    </head>

    <body>
        <?php
            include realpath('resources/header3.php');
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
                        <img src="../App/views/announces/img1.png">
                    </div>
                    <div class="content">
                        <h2>Anunt 1</h2>
                        <p>Pret: 1000000$ <br>Suprafata 120 m2 <br>Oras: Galati</p>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBx">
                        <img src="../App/views/announces/img2.png">
                    </div>
                    <div class="content">
                        <h2>Anunt 2</h2>
                        <p>Pret: 1000000$ <br>Suprafata 120 m2 <br>Oras: Galati</p>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBx">
                        <img src="../App/views/announces/img3.png">
                    </div>
                    <div class="content">
                        <h2>Anunt 3</h2>
                        <p>Pret: 1000000$ <br>Suprafata 120 m2 <br>Oras: Galati</p>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBx">
                        <img src="../App/views/announces/img4.png">
                    </div>
                    <div class="content">
                        <h2>Anunt 4</h2>
                        <p>Pret: 1000000$ <br>Suprafata 120 m2 <br>Oras: Galati</p>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBx">
                        <img src="../App/views/announces/img1.png">
                    </div>
                    <div class="content">
                        <h2>Anunt 5</h2>
                        <p>Pret: 1000000$ <br>Suprafata 120 m2 <br>Oras: Galati</p>
                    </div>
                    </div>
                <div class="card">
                    <div class="imgBx">
                        <img src="../App/views/announces/img2.png">
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
