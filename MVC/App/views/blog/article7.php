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
    <div id="bg"></div>
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
        Construcția casei mele, coșmar sau bucurie?
        </div>
        <div class="author">
            <a href="https://www.acoladadesign.com/">by Acolada</a>
        </div>
        <div class="articleBody">
        Imaginează-ți că ai început construcția locuinței tale de vis. Ești pe șantier. Lângă tine stă echipa de constructori înarmată cu excavatoare, buldozere, camioane, paleți de saci de ciment, cărămidă, bare din fier beton, o mulțime de oameni și echipamente, dar nimeni nu știe de unde și cum să înceapă construcția. Îi explici șefului de echipă că-ți dorești un living, două dormitoare, o baie, o bucătărie, parcă ai avea nevoie și de ceva spații de depozitare, o debara, un dressing etc. Nu ți-e foarte clar nici cât va costa casa la gata, nici cât o să dureze construcția ei sau dacă sunt suficiente materialele pe care le-ai achiziționat deja. Nimeni nu știe ce răspuns să-ți dea, nici constructorul, șoferul de pe camion sau sudorul! De peste gard apare și vecinul furios că locuința ta va fi, cu siguranță, mult prea înaltă și îi va umbri curtea, iar la prima ploaie toată apa de pe casă se va scurge la el. Deja începe stresul! Simți starea de agitație care pune stăpânire pe tine. Nodul din gât e din ce în ce mai greu de stăpânit. Nu știi ce să le spui celor din jur, care așteaptă de la tine indicațiile următorilor pași. N-ai nicio idee cum să procedezi mai departe, ca să fie bine și pentru tine, dar și pentru ceilalți.

În toată nebunia care crește din ce în ce mai haotic, îți răsună în minte o singură întrebare: “Cum pot face lucrurile mai ușoare pentru mine? Cum scap de tot stresul ăsta care va urma? Cum mă întorc la viața mea, de dinainte de șantier?”

Răspunsul este clar: “Ai nevoie de un arhitect! Ai nevoie de un diriginte de șantier! Ai nevoie de un designer!” Cu alte cuvinte, ai nevoie de o echipă pe care să te bazezi și care să știe cum se transformă visele în realitate.
De ce am nevoie de arhitect, designer interior și diriginte de șantier?
Construirea sau renovarea unei locuințe este o activitate care necesită eforturi financiare majore, din partea proprietarilor. Motiv pentru care, odată luată hotărârea de a gestiona un astfel de moment, este obligatoriu să ne sfătuim cu persoane avizate, profesioniști din domeniul arhitecturii, designului interior, construcțiilor și amenajărilor interioare. Nimeni nu-și dorește să aibă cheltuieli inutile sau să dărâme ce nu a construit bine, de prima oară. Existența pe piață a numeroase proiecte de case standardizate, ce pot fi aparent corectate sau modificate cu ușurință, după bunul plac, a creat multora dintre noi iluzia că, ghidându-ne după niște planuri preluate de pe internet, se poate trece imediat la faza de execuție a lucrărilor de construcție. Bineînțeles, în ipoteza descrisă mai sus, destul de des întâlnită, din păcate, rolul arhitectului este aproape eliminat, aparent nemaifiind nevoie de cunoștințele lui, în această etapă.

Articolul nostru de astăzi, chiar dacă a debutat într-o notă ușor amuzantă, descriind printr-un scurt pamflet o realitate destul de comună în România contemporană, are rolul de a trata, în cel mai serios mod, această situație de diminuare a rolului arhitectului în momentul construirii unei case. Chiar și atunci când ne alegem un proiect “la gata”.        
</div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>