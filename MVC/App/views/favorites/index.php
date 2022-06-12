<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php   
        $maincss = realpath('../../../Public/css/favoritescss/FavoritesPage.css');
        if($maincss == false) {
            echo "<link rel=\"stylesheet\" href=\"css/favoritescss/FavoritesPage.css\">";
        }
        else {
            echo "<link rel=\"stylesheet\" href=\"../../../Public/css/favoritescss/FavoritesPage.css\">";
        }
        
        $menucss = realpath('../../../Public/css/globals/header2.css');
        if($menucss == false) {
            echo "<link rel=\"stylesheet\" href=\"css/globals/header2.css\">";
        }
        else {
            echo "<link rel=\"stylesheet\" href=\"../../../Public/css/globals/header2.css\">";
        }  
        $mainjs = realpath('../../../Public/js/filtrare.js');
        if($mainjs == false) {
            echo "<script src=\"js/filtrare.js\"></script>";
        }
        else {
            echo "<script src=\"../../../Public/js/filtrare.js\"></script>";
        }
    ?>
    <!-- <script src="./filtrare.js"></script> -->
    <title>Favorites</title>
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
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>