<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Public/css/homecss/HomePage.css">
    <link rel="stylesheet" href="../../../Public/css/globals/header2.css">
</head>
<body>
    <?php
        include realpath('../../../Public/resources/header3.php');
    ?>
    <h1>Announces resulted:</h1>

    <div class="announces">
        <?php
        require_once '../../models/dataBase.php';
            if(isset($_POST['submit-data'])){
                $db = new DataBase();
                $continue=true;

                $result1=array();
                if($_POST['property_type']!=null) {
                    $search1 = $db->conn->prepare("SELECT * FROM announces WHERE property_type = :property_type");
                    $search1->execute(['property_type' => $_POST['property_type']]);
                    $result1 = $search1->fetchAll();
                    if (count($result1) == 0) {
                        $continue = false;
                        echo "<h2>No result were found for the property type:" . $_POST['property_type'] . "!</h2>";
                    }
                }
                $result2 = array();
                if ($continue) {
                    if ($_POST['minPrice'] != null && $_POST['maxPrice'] != null) {
                        $search2 = $db->conn->prepare("SELECT * FROM announces WHERE price >= :minPrice AND price<=:maxPrice");
                        $search2->execute(['minPrice' => intval($_POST['minPrice']), 'maxPrice' => intval($_POST['maxPrice'])]);
                        $result2 = $search2->fetchAll();
                        if (count($result2) == 0) {
                            $continue = false;
                            echo "<h2>No result were found for the price range:" . $_POST['minPrice'] . "-" . $_POST['maxPrice'] . "!</h2>";
                        }
                    } else if ($_POST['minPrice'] != null) {
                        $search2 = $db->conn->prepare("SELECT * FROM announces WHERE price >= :minPrice");
                        $search2->execute(['minPrice' => intval($_POST['minPrice'])]);
                        $result2 = $search2->fetchAll();
                        if (count($result2) == 0) {
                            $continue = false;
                            echo "<h2>No result were found for the price range:" . $_POST['minPrice'] . "- infinite!</h2>";
                        }
                    } else if ($_POST['maxPrice'] != null) {
                        $search2 = $db->conn->prepare("SELECT * FROM announces WHERE price<=:maxPrice");
                        $search2->execute(['maxPrice' => intval($_POST['maxPrice'])]);
                        $result2 = $search2->fetchAll();
                        if (count($result2) == 0) {
                            $continue = false;
                            echo "<h2>No result were found for the price range:" . "0-" . $_POST['maxPrice'] . "!</h2>";
                        }
                    }
                }
                if ($continue) {
                    if (count($result1) != 0) {
                        if (count($result2) != 0) {
                            foreach ($result1 as &$value1) {
                                foreach ($result2 as &$value2) {
                                    if ($value1['id'] == $value2['id']) {
                                        echo "<div class='announce'>
                                            <h2>" . $value1['property_type'] . "</h2>
                                            <p>Price:" . $value1['price'] . "</p>
                                            <p>Price:" . $value1['property_type'] . "</p>
                                            <p>Country:" . $value1['county'] . "</p>
                                         </div>";
                                        break;
                                    }
                                }
                            }
                        }
                        else {
                            foreach ($result1 as &$value1) {
                                echo "<div class='announce'>
                                        <h2>" . $value1['property_type'] . "</h2>
                                        <p>Price:" . $value1['price'] . "</p>
                                        <p>Price:" . $value1['property_type'] . "</p>
                                        <p>Country:" . $value1['county'] . "</p>
                                     </div>";
                            }
                        }
                    }
                    else{
                        foreach ($result2 as &$value2) {
                            echo "<div class='announce'>
                                    <h2>" . $value2['property_type'] . "</h2>
                                    <p>Price:" . $value2['price'] . "</p>
                                    <p>Price:" . $value2['property_type'] . "</p>
                                    <p>Country:" . $value2['county'] . "</p>
                                 </div>";
                        }
                    }

                }
            }
        ?>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>