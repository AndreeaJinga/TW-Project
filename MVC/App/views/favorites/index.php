<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/favoritescss/FavoritesPage.css">
    <link rel="stylesheet" href="css/globals/header2.css">
    <script src="js/filtrare.js"></script>
    <!-- <script src="./filtrare.js"></script> -->
    <title>Favorites</title>
</head>
<body>
    
    <?php
        include realpath('resources/header3.php');
    ?>
    <div id="bg"></div>

    <?php
        if(isset($_SESSION['userid']))
        {
    ?>   
        <div class="tabelSet">
            <table class="favs">
                <thead>
                    <tr>
                        <th>Announcement id</th>
                        <th>City
                            <select class="filter" onchange="filtrationEntry()">
                                <option value="all">All</option>
                            </select>
                        </th>

                        <th>Type
                            <select class="filter" onchange="filtrationEntry()">
                                <option value="all">All</option>
                            </select>
                        </th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Iasi</td>
                        <td>House</td>
                        <td>150000 €</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Iasi</td>
                        <td>Apartment</td>
                        <td>50000 €</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Suceava</td>
                        <td>House</td>
                        <td>100000 €</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Suceava</td>
                        <td>Apartment</td>
                        <td>40000 €</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Iasi</td>
                        <td>Apartment</td>
                        <td>70000 €</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Brasov</td>
                        <td>Apartment</td>
                        <td>45000 €</td>
                    </tr>
                </tbody>
            </table>
            <script>filtration()</script> 
        </div>
    <?php
        }
        else
        {
    ?>
        <div class="notConnected">
            <h3 class="headerNotConnected"> Pentru a vizualiza preferintele trebuie sa fiti logat. </h3>
        </div>

    <?php
        }
    ?>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>