<?php
    session_start();
?>
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
                    // $temp = realpath('../App/views/home/index.php');
                    // if($temp == false) {
                    //     echo "<a href=\"../home/index.php\"> <span class=\"icon\"> <ion-icon name=\"home-outline\"></ion-icon> </span> <span class=\"text\">Home</span> </a>";
                    // }
                    // else 
                    //     echo "<a href=\"../App/views/home/index.php\"> <span class=\"icon\"> <ion-icon name=\"home-outline\"></ion-icon> </span> <span class=\"text\">Home</span> </a>";
                ?>
                <a href="home"> 
                    <span class="icon"> 
                        <ion-icon name="home-outline"></ion-icon> 
                    </span> 
                    <span class="text">Home</span> 
                </a>
            </li>
            <li class="listItem">
                <?php
                    // $temp = realpath('../App/views/favorites/index.php');
                    // if($temp == false) {
                    //     echo "<a href=\"../favorites/index.php\"> <span class=\"icon\"> <ion-icon name=\"heart-outline\"></ion-icon> </span> <span class=\"text\">Favorites</span> </a>";
                    // }
                    // else 
                    //     echo "<a href=\"../App/views/favorites/index.php\"> <span class=\"icon\"> <ion-icon name=\"heart-outline\"></ion-icon> </span> <span class=\"text\">Favorites</span> </a>";
                ?>
                <a href="favorites"> 
                    <span class="icon"> 
                        <ion-icon name="heart-outline"></ion-icon> 
                    </span> 
                    <span class="text">Favorites</span> 
                </a>
            </li>
            <li class="listItem">
                <?php
                    // $temp = realpath('../App/views/announces/index.php');
                    // if($temp == false) {
                    //     echo "<a href=\"../announces/index.php\"> <span class=\"icon\"> <ion-icon name=\"newspaper-outline\"></ion-icon> </span> <span class=\"text\">Announces</span> </a>";
                    // }
                    // else 
                    //     echo "<a href=\"../App/views/announces/index.php\"> <span class=\"icon\"> <ion-icon name=\"newspaper-outline\"></ion-icon> </span> <span class=\"text\">Announces</span> </a>";
                ?>
                <a href="announces"> 
                    <span class="icon"> 
                        <ion-icon name="newspaper-outline"></ion-icon> 
                    </span> 
                    <span class="text">Announces</span> 
                </a>
            </li>
            <li class="listItem">               
                <?php
                    // $temp = realpath('../App/views/blog/index.php');
                    // if($temp == false) {
                    //     echo "<a href=\"../blog/index.php\"> <span class=\"icon\"> <ion-icon name=\"book-outline\"></ion-icon> </span> <span class=\"text\">Blog</span> </a>";
                    // }
                    // else 
                    //     echo "<a href=\"../App/views/blog/index.php\"> <span class=\"icon\"> <ion-icon name=\"book-outline\"></ion-icon> </span> <span class=\"text\">Blog</span> </a>";
                ?>
                <a href="blog"> 
                    <span class="icon"> 
                        <ion-icon name="book-outline"></ion-icon> 
                    </span> 
                    <span class="text">Blog</span> 
                </a>
            </li>
            <li class="listItem">
                <?php
                    // $temp = realpath('../App/views/contact/index.php');
                    // if($temp == false) {
                    //     echo "<a href=\"../contact/index.php\"> <span class=\"icon\"> <ion-icon name=\"call-outline\"></ion-icon> </span> <span class=\"text\">Contact</span> </a>";
                    // }
                    // else 
                    //     echo "<a href=\"../App/views/contact/index.php\"> <span class=\"icon\"> <ion-icon name=\"call-outline\"></ion-icon> </span> <span class=\"text\">Contact</span> </a>";
                        
                ?>
                <a href="contact"> 
                    <span class="icon"> 
                        <ion-icon name="call-outline"></ion-icon> 
                    </span> 
                    <span class="text">Contact</span> 
                </a>
            </li>
            <li class="listItem">
                <?php
                    // $temp = realpath('../App/views/aboutUs/index.php');
                    // if($temp == false) {
                    //     echo "<a href=\"../aboutUs/index.php\"> <span class=\"icon\"> <ion-icon name=\"people-outline\"></ion-icon> </span> <span class=\"text\">About Us</span> </a>";
                    // }
                    // else 
                    //     echo "<a href=\"../App/views/aboutUs/index.php\"> <span class=\"icon\"> <ion-icon name=\"people-outline\"></ion-icon> </span> <span class=\"text\">About Us</span> </a>";
                ?>
                <a href="aboutUs"> 
                    <span class="icon"> 
                        <ion-icon name="people-outline"></ion-icon> 
                    </span> 
                    <span class="text">About Us</span> 
                </a>
            </li>
            <li class="listItem">
                <?php
                    if(isset($_SESSION['userid']))
                    {    
                        // $temp = realpath('../App/views/account/index.php');
                        // if($temp == false) {
                        //     echo "<a href=\"../account/index.php\"> <span class=\"icon\"> <ion-icon name=\"person-outline\"></ion-icon> </span> <span class=\"text\">My Account</span> </a>";
                        // }
                        // else 
                        //     echo "<a href=\"../App/views/account/index.php\"> <span class=\"icon\"> <ion-icon name=\"person-outline\"></ion-icon> </span> <span class=\"text\">My Account</span> </a>";
                        //exit();
                        echo "<a href=\"account\"> <span class=\"icon\"> <ion-icon name=\"person-outline\"></ion-icon> </span> <span class=\"text\">My Account</span> </a>";

                    }
                    else
                    {
                        // $temp = realpath('../App/views/login/index.php');
                        // if($temp == false) {
                        //     echo "<a href=\"../login/index.php\"> <span class=\"icon\"> <ion-icon name=\"log-in-outline\"></ion-icon> </span> <span class=\"text\">Login</span> </a>";
                        // }
                        // else 
                        //     echo "<a href=\"../App/views/login/index.php\"> <span class=\"icon\"> <ion-icon name=\"log-in-outline\"></ion-icon> </span> <span class=\"text\">Login</span> </a>";
                        //exit();
                        echo "<a href=\"login\"> <span class=\"icon\"> <ion-icon name=\"log-in-outline\"></ion-icon> </span> <span class=\"text\">Login</span> </a>";
                    }
                ?>
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