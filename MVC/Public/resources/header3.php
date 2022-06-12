
<header class="headerClass">
    <div class="navigation">
        <?php   
            $img = realpath('../../../Public/resources/logo-Crop-menuBar.png');
            if($img == false) {
                echo "<img src=\"resources/logo-Crop-menuBar.png\" alt=\"Logo\" width=\"173\" height=\"98\">";
            }
            else {
                echo "<img src=\"../../../Public/resources/logo-Crop-menuBar.png\" alt=\"Logo\" width=\"173\" height=\"98\">";
            }
        ?>
        <ul class="navList">
            <li class="listItem">
                <?php 
                    $temp = realpath('../App/views/home/index.php');
                    if($temp == false) {
                        echo "<a href=\"../home/index.php\"> <span class=\"icon\"> <ion-icon name=\"home-outline\"></ion-icon> </span> <span class=\"text\">Home</span> </a>";
                    }
                    else 
                        echo "<a href=\"../App/views/home/index.php\"> <span class=\"icon\"> <ion-icon name=\"home-outline\"></ion-icon> </span> <span class=\"text\">Home</span> </a>";
                ?>
            </li>
            <li class="listItem">
                <?php
                    $temp = realpath('../App/views/favorites/index.php');
                    if($temp == false) {
                        echo "<a href=\"../favorites/index.php\"> <span class=\"icon\"> <ion-icon name=\"heart-outline\"></ion-icon> </span> <span class=\"text\">Favorites</span> </a>";
                    }
                    else 
                        echo "<a href=\"../App/views/favorites/index.php\"> <span class=\"icon\"> <ion-icon name=\"heart-outline\"></ion-icon> </span> <span class=\"text\">Favorites</span> </a>";
                ?>
            </li>
            <li class="listItem">
                <?php
                    $temp = realpath('../App/views/announces/index.php');
                    if($temp == false) {
                        echo "<a href=\"../announces/index.php\"> <span class=\"icon\"> <ion-icon name=\"newspaper-outline\"></ion-icon> </span> <span class=\"text\">Announces</span> </a>";
                    }
                    else 
                        echo "<a href=\"../App/views/announces/index.php\"> <span class=\"icon\"> <ion-icon name=\"newspaper-outline\"></ion-icon> </span> <span class=\"text\">Announces</span> </a>";
                ?>
<!--             
                <a href="../AnnouncesPage/Announces.html">
                    <span class="icon"> 
                        <ion-icon name="newspaper-outline"></ion-icon>
                    </span>
                    <span class="text">Announces</span>
                </a> -->
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
                <?php
                    $temp = realpath('../App/views/aboutUs/index.php');
                    if($temp == false) {
                        echo "<a href=\"../aboutUs/index.php\"> <span class=\"icon\"> <ion-icon name=\"people-outline\"></ion-icon> </span> <span class=\"text\">About Us</span> </a>";
                    }
                    else 
                        echo "<a href=\"../App/views/aboutUs/index.php\"> <span class=\"icon\"> <ion-icon name=\"people-outline\"></ion-icon> </span> <span class=\"text\">About Us</span> </a>";
                ?>
                <!-- /*<a href="../AboutUsPage/aboutUs.html">
                    <span class="icon"> 
                        <ion-icon name="people-outline"></ion-icon> 
                    </span>
                    <span class="text">About Us</span>
                </a>*/ -->
            </li>
            <li class="listItem">
                <a href="../AccountPage/myAccount.html">
                    <span class="icon"> 
                        <ion-icon name="person-outline"></ion-icon>
                    </span>
                    <span class="text">My account</span>
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
</script>