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
        <!-- <header class="headerClass">
            <div class="navigation">
                <img src="../Globals/logo-Crop-menuBar.png" alt="Logo" width="173" height="98">
                <ul class="navList">
                        <li class="listItem">
                            <a href="../HomePage/HomePage.html">
                                <span class="icon"> 
                                    <ion-icon name="home-outline"></ion-icon> 
                                </span>
                                <span class="text">Home</span>
                            </a>
                        </li>
                        <li class="listItem">
                            <a href="../Favorites/FavoritesPage.html">
                                <span class="icon"> 
                                    <ion-icon name="heart-outline"></ion-icon> 
                                </span>
                                <span class="text">Favorites</span>
                            </a>
                        </li>
                        <li class="listItem">
                            <a href="../AnnouncesPage/Announces.html">
                                <span class="icon"> 
                                    <ion-icon name="newspaper-outline"></ion-icon>
                                </span>
                                <span class="text">Announces</span>
                            </a>
                        </li>
                        <li class="listItem">
                            <a href="../BlogPage/blog.html">
                                <span class="icon"> 
                                    <ion-icon name="book-outline"></ion-icon>
                                </span>
                                <span class="text">Blog</span>
                            </a>
                        </li>
                        <li class="listItem">
                            <a href="../ContactPage/Contact.html">
                                <span class="icon"> 
                                    <ion-icon name="call-outline"></ion-icon> 
                                </span>
                                <span class="text">Contact</span>
                            </a>
                        </li>
                        <li class="listItem">
                            <a href="../AboutUsPage/aboutUs.html">
                                <span class="icon"> 
                                    <ion-icon name="people-outline"></ion-icon> 
                                </span>
                                <span class="text">About Us</span>
                            </a>
                        </li>
                        <li class="listItem">
                            <a href="../AccountPage/myAccount.html">
                                <span class="icon"> 
                                    <ion-icon name="person-outline"></ion-icon>
                                </span>
                                <span class="text">My account</span>
                            </a>
                        </li>
                        <li class="listItem">
                            <a href="../LoginPage/login.html">
                                <span class="icon"> 
                                    <ion-icon name="log-in-outline"></ion-icon>
                                </span>
                                <span class="text">Login</span>
                            </a>
                        </li>
                    </ul>
                <div class="burgerMenu">
                    <div class="line line1"></div>
                    <div class="line line2"></div>
                    <div class="line line3"></div>
                </div>
            </div>
        </header>
            
        <script>
            document.addEventListener('DOMContentLoaded', nav)
            function nav(){
                const burger = document.querySelector('.burgerMenu');
                const nav = document.querySelector('.navigation');
                burger.addEventListener('click', ()=>{
                    nav.classList.toggle('show')
                })
            }
        </script> -->

    <div class="Announces">
        <div id="bg"></div>

        <div id="search">
            <div class="form">
                <form action="#", method="post">
                    <fieldset>
                        <input type="City" placeholder="City">
                        <input type="category" placeholder="Category">
                        <input type="maxPrice" placeholder="Max price">
                        <input type="submit" id="submit" value="Search">
                    </fieldset>
                </form>
            </div>
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