<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php   
        $maincss = realpath('../../../Public/css/blogcss/blog.css');
        if($maincss == false) {
            echo "<link rel=\"stylesheet\" href=\"css/blogcss/blog.css\">";
        }
        else {
            echo "<link rel=\"stylesheet\" href=\"../../../Public/css/blogcss/blog.css\">";
        }
        
        $menucss = realpath('../../../Public/css/globals/header2.css');
        if($menucss == false) {
            echo "<link rel=\"stylesheet\" href=\"css/globals/header2.css\">";
        }
        else {
            echo "<link rel=\"stylesheet\" href=\"../../../Public/css/globals/header2.css\">";
        }
    ?>
    <title>Blog</title>
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

    <div class="mainFrame">
        <div class="article">
            <a href="article7.php">
                <div class="title">
                Construcția casei mele, coșmar sau bucurie?
                </div>
                <div class="articleBody">
                Imaginează-ți că ai început construcția locuinței tale de vis. Ești pe șantier. Lângă tine stă echipa de constructori înarmată cu excavatoare, buldozere, camioane, paleți de saci de ciment, cărămidă, bare din fier beton, o mulțime de oameni și echipamente, dar nimeni nu știe de unde și cum să înceapă construcția. 
                </div>
            </a>
        </div>
        <div class="article">
            <a href="article1.php">
                <div class="title">
                Același spațiu, funcțional variat, amenajare diferită
                </div>
                <div class="articleBody">
                Astăzi, ne-am gândit să abordăm o temă mai puțin de design și mai mult de arhitectură de interior, referindu-ne aici la partea funcțională a unui spațiu, compartimentări, diferite structuri interioare și proiectul de mobilare.
                </div>
            </a>
        </div>
        <div class="article">
            <a href="article2.php">
                <div class="title">
                5 soluții decorative pentru pereți, altele decât varul lavabil
                </div>
                <div class="articleBody">
                Dacă în interioarele din casele bunicilor noștri predomina varul în nuanțe de bleo, vernil sau galben pai, în prezent gama finisajelor pentru pereți s-a diversificat din ce în ce mai tare, în ultimii ani, apărând pe piață materiale nu doar ingenioase, dar și foarte rezistente. Inclusiv pereții băilor suportă acum mult mai multe variante de finisare, înlocuind uzuala faianță cu materiale noi, revoluționare.
                </div>
            </a>
        </div>
        <div class="article">
            <a href="article3.php">
                <div class="title">
                Bun venit în casa mea! – Idei pentru amenajarea holului de la intrare
                </div>
                <div class="articleBody">
                Secolul vitezei ne transformă, din păcate, în indivizi mult prea grăbiți, care nu mai au timp să acorde atenție micilor detalii. Petrecem tot mai puțin timp în antecamera ce servește drept cale de acces către încăperile principale ale locuinței noastre.
                </div>
            </a>
        </div>
        <div class="article">
            <a href="article4.php">
                <div class="title">
                Depozitarea în locuințe
                </div>
                <div class="articleBody">
                Deseori, în locuințele noastre există foarte multe obiecte care nu ar trebui să se găsească pe mese sau pe rafturi, la vedere, mai ales atunci când sunt utilizate foarte rar. Sunt inestetice și mai mult încurcă pe toți membrii familiei. Și ce ne facem dacă mai avem și o locuință nu foarte spațioasă?
                </div>
            </a>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>