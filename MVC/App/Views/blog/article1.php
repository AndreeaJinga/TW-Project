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
        Același spațiu, funcțional variat, amenajare diferită
        </div>
        <div class="author">
            <a href="https://www.acoladadesign.com/">by Acolada</a>
        </div>
        <div class="articleBody">
        Astăzi, ne-am gândit să abordăm o temă mai puțin de design și mai mult de arhitectură de interior, referindu-ne aici la partea funcțională a unui spațiu, compartimentări, diferite structuri interioare și proiectul de mobilare.
Orice spațiu poate fi amenajat într-o multitudine de variante cromatice, de combinații de texturi, materiale sau stiluri. Însă, înainte de orice abordare estetică a spațiului, primul pas este stabilirea unui funcțional și, implicit, a schemei finale de mobilare, în concordanță cu destinația încăperii, numărul de persoane care o folosesc în același timp sau nevoile de depozitare.
Pentru a explica mai detaliat cum se desfășoară și ce implică o analiză de funcțional în vederea compartimentării unui spațiu, am ales să vă prezentăm un proiect al unui beneficiar real. Este vorba despre zona de zi a unui apartament, formată din două camere, hol intrare și o debara micuță, pentru care a trebuit să elaborăm mai multe variante de mobilare, astfel încât beneficiarul să poată decide dacă va efectua anumite modificări de compartimentare interioară sau nu.
Principala dilemă a clientului era decizia între păstrarea integrală a camerei de la intrare, pe post de dressing, micșorarea acesteia sau eliminarea completă a peretelui despărțitor și contopirea celor două încăperi într-un singur spațiu. O altă problemă a fost ridicată de poziționarea funcțională, dar și estetică, a unei bucătării, folosind debaraua și cât mai puțin spațiu din living.

Astfel, arhitectul a realizat diferite variante de compartimentare și mobilare, oferind soluții pentru fiecare dintre cerințele beneficiarului.
Amplasarea bucătăriei a fost decisă identic în toate propunerile, parțial în living cu partea de depozitare, parțial în debara pentru zona de gătit, din cauza amplasării fixe a utilităților (gaz, apă și canalizare). Poziționarea zonei de luat masa este aceeași, fiind determinată de așezarea ei în proximitatea bucătăriei, pentru facilitarea activităților cotidiene.
De asemenea, în toate variantele realizate, s-a lucrat plecând de la micșorarea încăperii situate la intrarea în apartament, căreia i s-a atribuit, strategic și funcțional, rolul de cameră de dressing.
Poziționarea canapelei colțar cu spatele la zona de gătit și luat masa determină o ușoară delimitare funcțională a spațiului, oferind un grad sporit de intimitate zonei de zi. În dreptul ferestrelor s-a creat o zonă de blat de bar, pentru luarea unui mic dejun cu priveliște sau pentru petrecerea serilor cu prietenii, într-o atmosferă tinerească. De asemenea, poziționarea spre sursa de lumină naturală face posibilă utilizarea, pe timp de zi, și ca un spațiu mai atipic, de birou.
</div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>