<!DOCTYPE html>
<html lang="ro">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        <title>Scholarly HTML</title>
        <link rel="stylesheet" type="text/css" href="../../../Public/css/scholarlycss/Scholarly.css">
        <script src="js/scholarly.min.js"></script>
    </head>

    <body prefix="schema: http://schema.org">

        <header>
        <h1>Scholarly HTML</h1>
        </header>

        <div class="contentStyle" role="contentinfo">
            <h2>Cuprins</h2>
            <ol role="directory">
                <li><a href="#introduction">Introducere</a> 
                    <ul dir="auto"> 
                        <li> 1.1 <a href="#purpose"> Scop </a> </li> 
                        <li> 1.2 <a href="#conventions"> Conventiile documentelor </a> </li> 
                        <li> 1.3 <a href="#audience"> Publicul vizat si sugestii de lectura </a> </li> 
                        <li> 1.4 <a href="#scope"> Domeniul produsului </a> </li>
                    </ul>
                </li>
                <li><a href="#descrierea">Descrierea</a> 
                    <ul dir="auto"> 
                        <li> 2.1 <a href="#perspectiva"> Perspectiva produsului </a> </li> 
                        <li> 2.2 <a href="#functiile"> Functiile produsului </a> </li> 
                        <li> 2.3 <a href="#clasele"> Clasele si caracteristicile utilizatorului </a> </li> 
                        <li> 2.4 <a href="#mediu"> Mediul de operare </a> </li>
                        <li> 2.5 <a href="#constrangeri"> Constrangeri de implementare si design </a> </li>
                        <li> 2.6 <a href="#ipoteze"> Ipoteze si dependente </a> </li>
                    </ul>
                </li>
                <li><a href="#cerinte">Cerinte de interfata externa</a> 
                    <ul dir="auto"> 
                        <li> 3.1 <a href="#interfete"> Interfete cu utilizatorul </a> </li> 
                        <li> 3.2 <a href="#interfeteHard"> Interfete hardware  </a> </li> 
                        <li> 3.3 <a href="#interfeteSoft"> Interfete software </a> </li> 
                        <li> 3.4 <a href="#interfeteComm"> Interfete de comunicatii </a> </li>
                    </ul>                    
                </li>
                <li><a href="#caracteristici">Caracteristicile sistemului</a> 
                    <ul dir="auto"> 
                        <li> 4.1 <a href="#home"> Home Page </a> </li> 
                        <li> 4.2 <a href="#announces"> Announces Page </a> </li> 
                        <li> 4.3 <a href="#favorites"> Favorites Page </a> </li> 
                        <li> 4.4 <a href="#blog"> Blog page </a> </li>
                        <li> 4.5 <a href="#login"> Login Page </a> </li>
                        <li> 4.6 <a href="#account"> My account </a> </li>
                        <li> 4.7 <a href="#settings"> Settings </a> </li>
                        <li> 4.8 <a href="#aboutUs"> About Us </a> </li>
                        <li> 4.9 <a href="#contact">Contact Page </a> </li>
                    </ul>
                </li>
                <li><a href="#functional">Alte functionalitati</a> 
                    <ul dir="auto"> 
                        <li> 5.1 <a href="#performance"> Cerin??e de performan???? </a> </li> 
                        <li> 5.2 <a href="#security"> Cerin??e de securitate </a> </li> 
                        <li> 5.3 <a href="#software"> Atribute de calitate software </a> </li>
                    </ul>
                </li>
            </ol>
            <dl>
                <dt>Autori: </dt>
                    <dd>
                        Stanca Alisa, Jinga Andreea si Popescu Andrei
                    </dd>
                <dt>Discussion Group: </dt>
                    <dd>
                        The <a href="https://github.com/AndreeaJinga/TW-Project">Website Project GitHub Group</a>
                    </dd>
            </dl>
        </div>
        <section id="introduction" role="doc-introduction">
            <h2>1. Introducere</h2>
            <section id="purpose" role="doc-purpose">
                <h3>1.1 Scop</h3>
                <p>    
                    Achizitia unui imobil reprezinta un proces complex si elaborat, de cele mai multe ori fiind o decizie grea pentru cumparator. 
                    Astfel, aplicatia noastra <b>Real Estate</b> vine in ajutorul celor interesati de aceste servicii simplificand procesul de alegere al viitoarei lor locuinte. 
                    Scopul acestui site web este de a oferi clientilor o interfata prietenoasa si usor de manevrat, facilitand intreg procesul de achizitie.
                </p>
            </section>
            <section id="conventions" role="doc-conventions">
                <h3>1.2 Conventiile documentelor </h3>
                <p>
                    Pentru realizarea acestui document nu au fost folosite conventii tipografice.                    
                </p>
            </section>
            <section id="audience" role="doc-audience">
                <h3>1.3 Publicul vizat si sugestii de lectura </h3>
                <p> 
                    Acest document are ca tinta cititorii din randul profesorilor universitari, 
                    dar si din randul utilizatorilor doritori sa inteleaga structura pe care 
                    a fost construit proiectul.
                    In continuare, in acest document se pot gasi atat motivele, cat si 
                    ideile utilizate pentru realizarea aplicatiei, dar si detaliile de 
                    implementare ale fiecarei pagini.
                </p>
            </section>
            <section id="scope" role="doc-scope">
                <h3>1.4 Scopul produsului </h3>
                <p>
                    Scopul acestui proiect este de a realiza un sistem de centralizare al 
                    imobiliarelor puse la vanzare. 
                    El doreste integrarea anunturilor existente pe piata din diverse 
                    orase din Romania, pentru a facilita o cautare si alegere mai 
                    eficienta a acestora si pentru a obtine un raport calitate-pret cat mai bun.
                </p>
            </section>
        </section>
        <section id="descrierea" role="doc-descrierea">
            <h2>2. Descrierea</h2>
            <section id="perspectiva" role="doc-perspectiva">
                <h3>2.1 Perspectiva produsului</h3>
                <p>   
                    Produsul nostru este unul autonom care inglobeaza functionalitatile 
                    deja existente pe piata in cadrul altor aplicatii care nu satisfac 
                    nevoile cumparatorului.
                    <img class="diagram2" src="../../../Public/resources/C4DiagramPng.png" alt="Diagrama C4">
                </p>
            </section>
            <section id="functiile" role="doc-functiile">
                <h3>2.2 Functiile produsului</h3>
                <p>
                    Printre multiplele functii ale produsului putem enumera vizulizarea 
                    anunturilor imobiliare dintr-un judet selectat, cautarea apartamentelor 
                    si filtrarea acestora pe baza unor caracteristici preferate de utilizator.
                    O alta functionalitate importanta pentru experienta utilizatorului este 
                    reprezentata de lista de favorite in cadrul careia cumparatorul isi 
                    poate salva apartamentele de care este interesat pentru a le putea 
                    accesa cu usurinta in viitorul apropiat.
                    <img class="diagram" src="../../../Public/resources/client-serverDiagram.svg" alt="Diagrama aplicatiei">
                </p>
            </section>
            <section id="clasele" role="doc-clasele">
                <h3>2.3 Clasele si caracteristicile utilizatorului</h3>
                <p>   
                    Cele doua clase de utilizatori sunt reprezentate de utilizatori autentificati 
                    si utilizatori neautentificati.
                    Prima categorie cuprinde persoanele interesate de cumpararea unui imobil, 
                    acestea dispunand de multiplele functionalitati oferite de site. Acesta isi 
                    poate gestiona contul personal si a listei de imobiliare preferate. 
                    De asemenea, el va avea optiunea de a-si filtra cautarile si personaliza 
                    setarile, iar in ajutorul alegerii pe care o au de facut vor veni si 
                    diverse articole relevante subiectului postate pe blogul site-ului. Totodata, 
                    ei pot accesa informatii despre dezvoltatorii proiectului.  
                    Cea de-a doua categorie include atat persoanele indecise asupra utilizarii 
                    aplicatiei noastre, cat si viitorii vanzatori de apartamente pe care 
                    ii intereseaza sa-si studieze concurenta. Aceste persoane vor putea 
                    realiza cautari filtrate, vizualiza blogul cu articole si generalitatile 
                    despre propritarii paginii. 
                    In momentul incercarii folosirii celorlalte functionalitati, 
                    utilizatorii vor fi invitati sa se inregistreze pe site-ul nostru.
                </p>
            </section>
            <section id="mediu" role="doc-mediu">
                <h3>2.4 Mediul de operare</h3>
                <p>   
                    Site-ul este dezvoltat pe platforma Windows si destinat utilizarii in browser. Datele necesare functionarii acestuia sunt stocate folosind baze de date relationale interogate via SQL. 
                </p>
            </section>
            <section id="constrangeri" role="doc-constrangeri">
                <h3>2.5 Constrangeri de implementare si design</h3>
                <p>   
                    In realizarea proiectului am ales o paleta de culori bazata pe nuante de bej care 
                    transmit eleganta si formalitate. Am facut aceasta alegere deoarece aceasta culoare 
                    este asociata cu echilibrul, generand in acelasi timp o senzatie de calm si relaxare.
                    Deoarece site-ul nostru vrea sa transforme o casa in acasa, starea generala pe care 
                    el o transmite este de liniste si confort.
                    Design-ul abordat este unul simplist, fapt care denota atat neutralitatea si 
                    profesionalismul echipei noastre, cat si dorinta de a tinti o categorie de varsta 
                    cat mai mare.
                    Fundalul paginilor este ales in concordanta cu tema proiectului, fiind unul modern si prietenos.
                </p>
            </section>
            <section id="ipoteze" role="doc-ipoteze">
                <h3>2.6 Ipoteze si dependente</h3>
                <p>   
                    Intrucat site-ul Real Estate inglobeaza functionalitati existente in cadrul altor 
                    aplicatii nu la fel de complexe, el depinde de unele informatii puse la dispozitie 
                    de aceste aplicatii. 
                    Un exemplu concludent in acest sens consta in modul de parsare al crawler-ului 
                    folosit pentru a extrage anunturi imobiliare pe alte site-uri de profil. In cazul 
                    in care acestea si-ar schimba modul de structurare al datelor, crawler-ul ar fi 
                    afectat ducand la transmirea eronata a informatiilor despre un anunt.
                </p>
            </section>
        </section>

        <section id="cerinte" role="doc-cerinte">
            <h2>3. Cerinte de interfata externa</h2>
            <section id="interfete" role="doc-interfete">
                <h3>3.1 Interfete cu utilizatorul</h3>
                <img class="meniu1" src="../../../Public/resources/meniu.png" alt="Meniul aplicatiei">
                <div class="box">
                    <div class="text">
                        Principala componenta a interfetei cu care utilizatorul interactioneaza 
                        este reprezentata de un meniu cu acces la paginile aplicatiei.
                        Acestea sunt: 
                        <ul class="list31">
                            <li>Home</li>                                                   
                            <li>Favorites</li>
                            <li>Announces</li> 
                            <li>Blog</li>
                            <li>Contact</li>
                            <li>Login/Your Account</li> 
                        </ul>
                        Acest meniu este pozitionat in partea de sus a paginilor pentru a fi la indemana.
                        De asemenea, pentru o mai buna incadrare in pagina, meniul se redimensioneaza 
                        in pozitie verticala in partea laterala a site-ului, atunci cand scade 
                        latimea paginii sub un anumit nivel. 
                    </div>
                    <img class="meniu2" src="../../../Public/resources/burgerMeniu.png" alt="Meniul aplicatiei">
                </div>
            </section>
            <section id="interfeteHard" role="doc-interfeteHard">
                <h3>3.2 Interfete hardware</h3>
                <p> 
                    Website-ul poate fi vizualizat cu ajutorul unui browser atat in format desktop, 
                    cat si al unui dispozitiv mobil, datorita faptului ca este creat intr-o maniera receptiva.
                    Paginile web sunt realizate ??n limbaj de marcare hipertext ??i acestea sunt 
                    transmise prin protocolul HTTP.
                </p>
            </section>
            <section id="interfeteSoft" role="doc-interfeteSoft">
                <h3>3.3 Interfete software</h3>
                <p> 
                    Aplicatia web va realiza conexiuni cu alte site-uri care se ocupa cu anunturile 
                    imobiliare pentru a prelua date si a le stoca intr-o baza de date pentru 
                    usurinta accesului la datele respective.
                    Acestea urmeaza sa fie utilizate pentru recreerea anunturilor intr-o forma diferita 
                    pe pagina Announces. Pe baza datelor preluate din baza de date, se va realiza si 
                    o conexiune cu World Air Quality Index pentru a avea acces la o reprezentare fizica pe 
                    harta a adresei specificate in anun??, ??mpreun?? cu nivelul de poluare al zonei respective. De asemenea, pozitionarea imobilului este folosita 
                    pentru a obtine date legate de vreme ??i alte date meteorologice din zona respectiva, cum ar fi temperatura minima, temperatura maxima, precipitatii, viteza vantului.
                    Aceste date sunt colectate prin intermediul unui Open Weather Map API. 
                </p>
            </section>
            <section id="interfeteComm" role="doc-interfeteComm">
                <h3>3.4 Interfete de comunicatii</h3>
                <p> 
                    In cazul in care un client are o solicitare speciala, acestuia ii este pusa 
                    la dispozitie o adresa de contact prin care poate lua legatura cu 
                    proprietarii site-ului. De asemenea, utilizatorul poate trimite un mesaj c??tre ace??tia 
                    completand formularul din pagina de Contact.
                </p>
            </section>
        </section>

        <section id="caracteristici" role="doc-caracteristici">
            <h2>4. Caracteristicile sistemului</h2>
            <section id="home" role="doc-home">
                <h3>4.1 Home Page </h3>
                <p> 
                    Pagina Home reprezinta pagina principala pe care ajunge utilizatorul dupa ce se 
                    inregistreaza sau fara a se inregistra daca utilizeaza butonul Home din pagina de 
                    login/register.
                    Odata ajuns pe pagina principala, utilizatorul are optiunea de a schimba pagina pe 
                    care se afla utilizand meniul sau sa inceapa cautarile pentru un imobil.
                    Pentru realizarea cautarilor avem implementate doua metode care urmaresc nivele 
                    de detalii diferite.
                    Prima metoda este cea de cautare in detaliu, care implica cautarea pe baza datelor 
                    introduse de utilizator, adica oras, tipul de imobil si un pret maxim pentru o 
                    filtrare mai detaliata a anunturilor.
                    A doua metoda este cea de cautare rapida, ea implica utilizarea unei harti 
                    interactive care permitere alegerea, cu mouse-ul sau utilizand touch screen-ul, 
                    a unui judet care va fi utilizat pentru filtarea rezultatelor vazute de utilizator.
                    Ambele metode de alegere a anunturilor dorite ne redirectioneaza catre 
                    pagina <a href="#announces">Announces</a> in care urmeaza sa fie listate anunturile.
                </p>
            </section>
            <section id="announces" role="doc-carac2">
                <h3>4.2 Announces </h3>
                <p> 
                    In aceasta pagina se pot gasi anunturi despre imobiliare de vanzare. Selectarea unui anunt conduce catre o pagina pe care se afla cateva detalii, cum ar fi: 
                    suprafata, pret, oras, adresa, starea cladirii, anul de constructie, caracterictici utile, o scurta descriere oferita de proprietar si o imagine a imobiliarului.
                    Pagina dispune de o harta cu nivelul de poluare al zonei ??n care se afl?? imobiliarul respectiv, detalii despre vreme ??i o comparatie a pretului pe metru patrat cu media din jude??ul respectiv. 
                    Pentru filtrarea anunturilor dupa interesele si preferitele utilizatorului, pozitionata in partea de sus a paginii se afla bara de cautare unde se poate seta jude??ul, tipul de imobil, 
                    pretul minim, pretul maxim, suprafata utila si tipul de compartimentare.
                    Totodata, exista si posibiliatea de adaugare a unui anunt la lista de favorite, ??nso??ita de unul dintre mesajele: "Anuntul a fost adaugat in lista de favorite.", "Anuntul se afla deja in lista de favorite." 
                    si "Trebuie sa fii logat pentru a adauga anuntul in lista de favorite.".
                </p>
            </section>
            <section id="favorites" role="doc-favorites">
                <h3>4.3 Favorites </h3>
                <p> 
                    Fiecare utilizator inregistrat in aplicatie va putea sa-si salveze anunturile 
                    peste care sa vrea sa revina ulterior utilizand pagina Favorites. 
                    In cadrul acestei pagini utilizatorul, deja logat, are acces la o lista cu anunturi favorite pe 
                    care a ales sa le salveze in timpul cautarii de imobiliare facuta in pagina <a href="#announces">Announces</a>.
                    Din lista respectiva, o sa fie posibila intoarcerea spre pagina de anunturi in care 
                    sa poata fi vizualizat din nou imobilul mai in detaliu.
                    In cazul dorintei de a sterge un element din lista, fiecare anunt prezent acolo va 
                    avea posibilitatea de a fi eliminat.
                    Pentru usurinta navigarii prin lista, se va folosi un meniu de filtrare al anunturilor salvate.
                    <img class="fav" src="../../../Public/resources/favoritesTable.png" alt="Favorites">
                </p>
            </section>
            <section id="blog" role="doc-blog">
                <h3>4.4 Blog </h3>
                <p> 
                    Aceasta pagina este destinata culturalizarii viitorilor proprietari de imobile. In 
                    cadrul acesteia, vizitatorii site-ului vor putea citi diverse articole scrise de 
                    specialisti in domeniu. 
                    Interesul acestei pagini este de a ajuta cumparatorul sa isi cunoasca nevoile pentru 
                    a-si alege locuinta cat mai potrivita.
                    Dupa selectarea unui articol, utilizatorul va fi redirectionat catre o pagina dedicata
                    articolului in care il va putea citi in intregime, dar in cadrul careia vor aparea si 
                    unele detalii in plus, cum ar fi autorul articolului si categoria din care face parte.
                </p>
            </section>
            <section id="login" role="doc-login">
                <h3>4.5 Login Page </h3>
                <p> 
                    O pagina ce poate fi accesata atat de persoanele care au deja un cont pe platforma, cat si de cele care nu au, este cea de logare/inregistrare. 
                    In functie de intentia pe care utilizatorul o are, ii sunt puse la dispozitie doua formulare. 
                    In formularul destinat celor ce detin deja un cont campurile de completat sunt: username sau email si parola. Dupa conectare, utilizatorul este redirectionat catre pagina <a href="#account">My Account</a>. 
                    Datele necesare pentru inregistrarea pe site-ul nostru web sunt username, adresa de email si parola (confirmare parola). 
                    Pentru cazurile ??n care parola si confirmarea parolei nu coincid, username-ul sau email-ul de conectare introdus nu exista in baza de date, parola de logare nu este valida, 
                    username-ul de la inscrierea pe site este deja folosit de alt utilizator si alte situatii, vor fi afisate pe ecran mesaje de eroare.
                    In cadrul paginii, in coltul din stanga sus, se afla un buton care ofera posibilitatea de intoarcere catre pagina <a href="#home">Home</a>.
                    <img class="users" src="../../../Public/resources/usersTable.png" alt="Users">
                </p>
            </section>
            <section id="account" role="doc-account">
                <h3>4.6 My account</h3>
                <p> 
                    Pagina My Account este accesibila din cadrul meniului principal doar daca utilizatorul este logat deja, el fiind 
                    redirectionat pe aceasta dupa apasarea ultimului buton din meniu.
                    In cadrul acesteia, clientul isi poate vizualiza si personaliza datele legate de 
                    contul lui. Spre exemplu, isi poate schimba numele de utilizator sau adresa 
                    de email si isi poate reseta parola. De asemenea, el isi poate sterge contul la care este conectat in momentul respectiv.
                    La finalul navigarii clientului pe site-ul nostru, el se va putea deconecta prin 
                    intermediul butonului de Logout ce se gaseste in partea de jos a acestei pagini. 
                </p>
            </section>
            <section id="aboutUs" role="doc-aboutUs">
                <h3>4.8 About Us </h3>
                <p> 
                    In cadrul paginii About Us vor fi prezente informatii despre creatorii aplicatie web.
                    Va fi prezenta o scurta descriere a aplicatiei, cate o poza a fiecarui participant al proiectului si cateva detalii despre acesta.
                    De asemenea, aici se va afla si un buton care sa ne redirectioneze catre pagina documentatiei proiectului, pentru utilizatorii care doresc sa intre mai in detaliu in diferite aspecte ale temei si implementarii aplicatiei.
                </p>
            </section>
            <section id="contact" role="doc-contact">
                <h3>4.9 Contact Page </h3>
                <p> 
                    O alta pagina cu care pot interactiona toti vizitatorii site-ului este cea de contact. 
                    Aici, pe langa informatiile legate de adresa de email oficiala a platformei "Real Estate" si locatia sediului, insotita de o harta care faciliteaza vizualizarea adresei, se afla si un formular pentru trimiterea unui mesaj direct catre echipa site-ului web.
                    Formularul cuprinde urmatoarele campuri: nume, prenume, adresa de email, un numar de telefon pentru a putea fi contactat ulterior, si mesajul ce se doreste a fi trimis.
                    Dupa trimiterea unui mesaj, utilizatorului i se va afisa pe ecran un mesaj de succes (sau eroare).
                    <img class="msg" src="../../../Public/resources/messagesTable.png" alt="Messages">
                </p>
            </section>
        </section>

        <section id="functional" role="doc-functional">
            <h2>5. Alte functionalitati</h2>
            <section id="performance" role="doc-performance">
                <h3>5.1 Cerinte de performan???? </h3>
                <p> 
                    Site-ul nostru functioneaza in stransa legatura cu o baza de date complexa. 
                    Crawler-ul va fi utilizat pentru a prelua si introduce anunturile in 
                    baza de date, verificandu-se daca acele informatii exista deja in baza de date si 
                    evitandu-se suprascrierea tabelelor cu aceeasi informatie.
                    Pe baza datelor stocate se va face popularea paginilor cu anunturi, fara a mai fi 
                    nevoie de a accesa o sursa exterioara de informatie. 
                </p>
                <img class="ann1" src="../../../Public/resources/announcesDatabase1.png" alt="Anunturi">
                <img class="ann1" src="../../../Public/resources/announcesDatabase2.png" alt="Anunturi">
            </section>
            <section id="security" role="doc-security">
                <h3>5.2 Cerinte de securitate </h3>
                <p> 
                    Pentru a garanta siguranta informatiei din conturile utilizatorilor la crearea unui 
                    cont este necesara stabilirea unei adrese de email si a unei parole.
                    Adresa de email va fi asociata unui singur cont, iar parola va avea cateva cerinte 
                    minimale de siguranta. 
                    Pentru a spori securitatea conturilor in cazul unei brese, in baza de date parolele 
                    vor fi stocate in mod criptat.
                </p>
            </section>
            <section id="software" role="doc-software">
                <h3>5.3 Atribute de calitate</h3>
                <p> 
                    Un prim atribut al site-ul este utilitatea acestuia deoarece este prezentat printr-o interfata simpla, usor de navigat, in favoarea utilizatorilor noi sau mai putin frecventi pe platforma.
                    De asemenea, se remarca prin corectitudine, prin functionalitate si flexibilitate, fiind adaptabil la noi produse.
                    Un alt atribut major este eficienta, datorata timpului scurt pe care utilizatorii trebuie sa il investeasca pentru a-si indeplini scopul.
                </p>
            </section>
        </section>               
    </body>
</html>