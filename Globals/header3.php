<header class="headerClass">
    <div class="navigation">
        <img src="../Globals/logo-Crop-menuBar.png" alt="Logo" width="173" height="98">
        <ul class="navList">
            <li class="listItem">
                <a href="#">
                    <span class="icon"> 
                        <ion-icon name="home-outline"></ion-icon> 
                    </span>
                    <span class="text">Home</span>
                </a>
            </li>
            <li class="listItem">
                <a href="#">
                    <span class="icon"> 
                        <ion-icon name="heart-outline"></ion-icon> 
                    </span>
                    <span class="text">Favorites</span>
                </a>
            </li>
            <li class="listItem">
                <a href="#">
                    <span class="icon"> 
                        <ion-icon name="newspaper-outline"></ion-icon>
                    </span>
                    <span class="text">News</span>
                </a>
            </li>
            <li class="listItem">
                <a href="#">
                    <span class="icon"> 
                        <ion-icon name="book-outline"></ion-icon>
                    </span>
                    <span class="text">Blog</span>
                </a>
            </li>
            <li class="listItem">
                <a href="#">
                    <span class="icon"> 
                        <ion-icon name="call-outline"></ion-icon> 
                    </span>
                    <span class="text">Contact</span>
                </a>
            </li>
            <li class="listItem">
                <a href="#">
                    <span class="icon"> 
                        <ion-icon name="person-outline"></ion-icon>
                    </span>
                    <span class="text">Your account</span>
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