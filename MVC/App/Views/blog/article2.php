<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php   
        $maincss = realpath('../../../Public/css/blogcss/article.css');
        if($maincss == false) {
            echo "<link rel=\"stylesheet\" href=\"css/blogcss/article.css\">";
        }
        else {
            echo "<link rel=\"stylesheet\" href=\"../../../Public/css/blogcss/article.css\">";
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

    <div class="article">
        <div class="title">
        5 soluții decorative pentru pereți, altele decât varul lavabil
        </div>
        <div class="author">
            <a href="https://www.acoladadesign.com/">by Acolada</a>
        </div>
        <div class="articleBody">
        Dacă în interioarele din casele bunicilor noștri predomina varul în nuanțe de bleo, vernil sau galben pai, în prezent gama finisajelor pentru pereți s-a diversificat din ce în ce mai tare, în ultimii ani, apărând pe piață materiale nu doar ingenioase, dar și foarte rezistente. Inclusiv pereții băilor suportă acum mult mai multe variante de finisare, înlocuind uzuala faianță cu materiale noi, revoluționare.

În articolul de astăzi, vom trece în revistă principalele categorii de materiale folosite, în amenajările contemporane, la finisarea pereților interiori.
<br><br>
    1. Tapetul, pe lângă proprietățile sale tehnice inovatoare și varietatea largă a materialelor din care poate fi fabricat (hârtie, vinil, mătase, alte fibre textile și vegetale, fibră de sticlă etc.), este foarte apreciat și pentru eleganța și unicitatea designului ce poate fi creat în orice încăpere. Printre noutățile din domeniu, se regăsește și tapetul rezistent la umezeală, recomandabil inclusiv în camera de baie. Indiferent că vorbim despre o amenajare inițială a unui spațiu sau doar o redecorare, pentru a obține un puternic impact vizual, dar și pentru ca pereții să arate perfect finisați cât mai mult timp, tapetul este un produs potrivit designului interior al locuințelor, spațiilor de birouri sau comerciale.
<br><br>
    2. Pe lângă tapetul clasic, prezentat sub formă de role, care se lipesc cu un adeziv special pe tavane și pereți, a mai apărut pe piața materialelor de finisaj o variantă mai puțin cunoscută la noi în țară, denumită tapet lichid. Acest produs se aplică în stare umedă (de aici fiind preluat și numele), aproximativ în mod similar tencuielilor decorative. Aspectul său fascinant este rezultatul texturii compuse din fіbre celulozice și аdеzіv care conține bumbac ѕаu fіrе de mătаѕе, vopsea șі еlеmеntе dе rеlіеf, precum așchii dіn lemn, mісі frаgmеntе din mаrmură sau chiar рlаntе tratate în acest sens. Acest tip de finisaj ѕе comercializează ѕub fоrmа unui аmеѕtес uѕсаt sau a unei soluții gаtа рrераrаtе, la care sе аdаugă apă, șі ѕе aplică direct ре ѕuрrаfаțа aleasă, cu ajutorul unei spatule.
<br><br>
    3. O altă noutate în finisarea pereților interiori este sistemul panourilor izolatoare Halltex, care înglobează în cadrul aceluiași produs un material de construcții, un produs de izolare fonică și termică și, nu în ultimul rând, un finisaj decorativ original. Panoul Halltex este asemănător unui placaj poros, în conținutul căruia fibrele din lemn de pin sunt fixate cu lignină, un liant propriu al lemnului, toate materialele folosite fiind sută la sută naturale și ecologice. Panoul izolant prezintă reale avantaje legate de timpii și costurile pre- și post- instalare, care sunt mai mult decât satisfăcătoare: montarea panourilor se realizează ușor, într-un timp foarte scurt, evitând mizeria și praful caracteristice lucrărilor de renovare, iar proprietățile termice reduc considerabil costurile necesare pentru atingerea unei temperaturi optime interioare.

</div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>